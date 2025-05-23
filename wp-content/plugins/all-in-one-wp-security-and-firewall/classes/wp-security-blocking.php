<?php
if (!defined('ABSPATH')) {
	exit;//Exit if accessed directly
}

class AIOWPSecurity_Blocking {

	/**
	 * Class constructor
	 **/
	public function __construct() {
		//NOP
	}

	/**
	 * Will return an array of blocked IPs in the AIOWPSEC_TBL_PERM_BLOCK table
	 *
	 * @param string $block_reason - spam, etc
	 * @param string $output_type
	 *
	 * @return single dimensional array
	 */
	public static function get_list_blocked_ips($block_reason = '', $output_type = 'ARRAY_A') {
		global $wpdb;
		$blocked_ip_array = array();
		if (empty($block_reason)) {
			$sql = 'SELECT blocked_ip FROM '.AIOWPSEC_TBL_PERM_BLOCK;
		} else {
			// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared -- PCP error. Ignore.
			$sql = $wpdb->prepare('SELECT blocked_ip FROM '.AIOWPSEC_TBL_PERM_BLOCK.' WHERE block_reason=%s', $block_reason);
		}

		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared, WordPress.DB.DirectDatabaseQuery -- PCP error. Ignore.
		$result = $wpdb->get_results($sql, $output_type);
		//The result returned by wp function is multi-dim array. Let's return a simple single dimensional array of ip addresses
		if (!empty($result)) {
			foreach ($result as $item) {
				$blocked_ip_array[] = $item['blocked_ip'];
			}
		}
		return $blocked_ip_array;
	}

	/**
	 * Checks if an IP address is blocked permanently according to the database
	 *
	 * @param int $ip_address
	 *
	 * @return bool
	 */
	public static function is_ip_blocked($ip_address) {
		global $wpdb;
		// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared, WordPress.DB.DirectDatabaseQuery -- PCP error. Ignore.
		$blocked_record = $wpdb->get_row($wpdb->prepare('SELECT * FROM '.AIOWPSEC_TBL_PERM_BLOCK.' WHERE blocked_ip=%s', $ip_address));
		return !empty($blocked_record);
	}

	/**
	 * Will add an IP address to the permanent block list
	 *
	 * @param int    $ip_address
	 * @param string $reason
	 * @return bool - TRUE or FALSE on error
	 */
	public static function add_ip_to_block_list($ip_address, $reason = '') {
		global $wpdb, $aio_wp_security;
		$user = wp_get_current_user();
		$roles_allowed_to_block_ips = apply_filters('aio_roles_allowed_to_block_ips', array('administrator', 'editor', 'author'));
		if ('spam_discard' != $reason && array_intersect($roles_allowed_to_block_ips, $user->roles) && AIOWPSecurity_Utility_IP::get_user_ip_address() == $ip_address) {
			return;
		}

		//Check if this IP address is already in the block list
		$blocked = AIOWPSecurity_Blocking::is_ip_blocked($ip_address);
		$time_now = current_time('mysql');
		if (empty($blocked)) {
			//Add this IP to the blocked table
			$data = array(
				'blocked_ip'=>$ip_address,
				'block_reason'=>$reason,
				'blocked_date'=>$time_now
			);
			$data = apply_filters('aiowps_pre_add_to_permanent_block', $data);
			$perm_block_tbl_name = AIOWPSEC_TBL_PERM_BLOCK;
			$country_origin = isset($data['country_origin']) ? $data['country_origin'] : '';
			// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared, WordPress.DB.PreparedSQLPlaceholders.QuotedSimplePlaceholder, WordPress.DB.DirectDatabaseQuery -- PCP warning. Ignore.
			$sql = $wpdb->prepare("INSERT INTO ".$perm_block_tbl_name." (blocked_ip, block_reason, blocked_date, country_origin, created) VALUES ('%s', '%s', '%s', '%s', UNIX_TIMESTAMP())", $data['blocked_ip'], $data['block_reason'], $data['blocked_date'], $country_origin);
			// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared, WordPress.DB.DirectDatabaseQuery -- PCP error. Ignore.
			$res = $wpdb->query($sql);
			if (false === $res) {
				$aio_wp_security->debug_logger->log_debug("AIOWPSecurity_Blocking::add_ip_to_block_list - Error inserting record into AIOWPSEC_TBL_PERM_BLOCK table for IP ".$ip_address);
				return false;
			}
			return true;
		}
		return true;
	}

	public static function unblock_ip($ip_address) {
		global $wpdb;
		$where = array('blocked_ip' => $ip_address);
		// phpcs:ignore WordPress.DB -- PCP error. Direct call necessary. No caching needed.
		$result = $wpdb->delete(AIOWPSEC_TBL_PERM_BLOCK, $where);
		return $result;
	}

	/**
	 * Will check the current visitor IP against the blocked table
	 * If IP present will block the visitor from viewing the site
	 */
	public static function check_visitor_ip_and_perform_blocking() {
		global $aio_wp_security;
		$visitor_ip = AIOWPSecurity_Utility_IP::get_user_ip_address();
		$ip_type = WP_Http::is_ip_address($visitor_ip);
		if (empty($ip_type)) {
			$aio_wp_security->debug_logger->log_debug("do_general_ip_blocking_tasks: ".$visitor_ip." is not a valid IP!", 4);
			return;
		}

		//Check if this IP address is in the block list
		$blocked = AIOWPSecurity_Blocking::is_ip_blocked($visitor_ip);
		//TODO - future feature: add blocking whitelist and check

		if (empty($blocked)) {
			return; //Visitor IP is not blocked - allow page to load
		} else {
			//block this visitor!!
			AIOWPSecurity_Utility::redirect_to_url('http://127.0.0.1');
		}
		return;

	}

}
