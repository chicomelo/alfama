<?php
/*
Plugin Name: reCaptcha by BestWebSoft
Plugin URI: https://bestwebsoft.com/products/wordpress/plugins/google-captcha/
Description: Protect WordPress website forms from spam entries with Google Captcha (reCaptcha).
Author: BestWebSoft
Text Domain: google-captcha
Domain Path: /languages
Version: 1.72
Author URI: https://bestwebsoft.com/
License: GPLv3 or later
*/

/*  © Copyright 2022  BestWebSoft  ( https://support.bestwebsoft.com )

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

require_once( dirname( __FILE__ ) . '/includes/forms.php' );

/* Add menu page */
if ( ! function_exists( 'gglcptch_admin_menu' ) ) {
	function gglcptch_admin_menu() {
		global $submenu, $wp_version, $gglcptch_plugin_info;

		if ( ! is_plugin_active( 'google-captcha-pro/google-captcha-pro.php' ) ) {
			$settings_page = add_menu_page(
                __( 'reCaptcha Settings', 'google-captcha' ),
                'reCaptcha',
                'manage_options',
                'google-captcha.php',
                'gglcptch_add_settings_page',
                'none'
            );

			add_submenu_page(
                'google-captcha.php',
                __( 'reCaptcha Settings', 'google-captcha'),
                __( 'Settings', 'google-captcha' ),
                'manage_options',
                'google-captcha.php',
                'gglcptch_add_settings_page'
            );

			$allowlist_page = add_submenu_page(
                'google-captcha.php',
                __( 'reCaptcha Allow List', 'google-captcha' ),
                __( 'Allow List', 'google-captcha' ),
                'manage_options',
                'google-captcha-allowlist.php',
                'gglcptch_add_settings_page'
            );

			add_submenu_page(
                'google-captcha.php',
                'BWS Panel',
                'BWS Panel',
                'manage_options',
                'gglcptch-bws-panel',
                'bws_add_menu_render'
            );
            /*pls */
            if ( isset( $submenu['google-captcha.php'] ) ) {
                $submenu['google-captcha.php'][] = array(
                    '<span style="color:#d86463"> ' . __('Upgrade to Pro', 'google-captcha' ) . '</span>',
                    'manage_options',
                    'https://bestwebsoft.com/products/wordpress/plugins/google-captcha/?k=b850d949ccc1239cab0da315c3c822ab&pn=109&v=' . $gglcptch_plugin_info["Version"] . '&wp_v=' . $wp_version );
            }
            /* pls*/
			add_action( "load-{$settings_page}", 'gglcptch_add_tabs' );
			add_action( "load-{$allowlist_page}", 'gglcptch_add_tabs' );
		}
	}
}

if ( ! function_exists( 'gglcptch_plugins_loaded' ) ) {
	function gglcptch_plugins_loaded() {
		/* Internationalization, first(!)  */
		load_plugin_textdomain( 'google-captcha', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}
}

if ( ! function_exists( 'gglcptch_init' ) ) {
	function gglcptch_init() {
		global $gglcptch_plugin_info, $gglcptch_options, $pagenow;

		require_once( dirname( __FILE__ ) . '/bws_menu/bws_include.php' );
		bws_include_init( plugin_basename( __FILE__ ) );

		if ( empty( $gglcptch_plugin_info ) ) {
			if ( ! function_exists( 'get_plugin_data' ) ) {
				require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			}
			$gglcptch_plugin_info = get_plugin_data( __FILE__ );
		}

		/* Function check if plugin is compatible with current WP version */
		bws_wp_min_version_check( plugin_basename( __FILE__ ), $gglcptch_plugin_info, '4.5' );

		$is_user_edit_page = isset( $pagenow ) && 'user-edit.php' == $pagenow;
		$is_admin = is_admin() && ( ! defined( 'DOING_AJAX' ) || ! $is_user_edit_page );
		
		/* Call register settings function */
		if ( ! $is_admin || ( isset( $_GET['page'] ) && 'google-captcha.php' == $_GET['page'] ) ) {
			register_gglcptch_settings();
		}

		/* Add hooks */
		if ( ! $is_admin && ! empty( $gglcptch_options['public_key'] ) && ! empty( $gglcptch_options['private_key'] ) ) {
			gglcptch_add_actions();
		}
	}
}

/**
 * Activation plugin function
 */
if ( ! function_exists( 'gglcptch_plugin_activate' ) ) {
	function gglcptch_plugin_activate( $networkwide ) {
		/* Activation function for network, check if it is a network activation - if so, run the activation function for each blog id */
		if ( is_multisite() ) {
			switch_to_blog( 1 );
			register_uninstall_hook( __FILE__, 'gglcptch_delete_options' );
			restore_current_blog();
		} else {
			register_uninstall_hook( __FILE__, 'gglcptch_delete_options' );
		}
	}
}

if ( ! function_exists( 'gglcptch_admin_init' ) ) {
	function gglcptch_admin_init() {
		global $pagenow, $bws_plugin_info, $gglcptch_plugin_info, $gglcptch_options;

		if ( empty( $bws_plugin_info ) ) {
			$bws_plugin_info = array( 'id' => '109', 'version' => $gglcptch_plugin_info["Version"] );
		}

        /*pls */
		if ( 'plugins.php' == $pagenow ) {
			if ( empty( $gglcptch_options ) )
				register_gglcptch_settings();

			if ( function_exists( 'bws_plugin_banner_go_pro' ) ) {
                bws_plugin_banner_go_pro( $gglcptch_options, $gglcptch_plugin_info, 'gglcptch', 'google-captcha', '676d9558f9786ab41d7de35335cf5c4d', '109', 'google-captcha' );
            }
		}
        /* pls*/
	}
}

/* Add google captcha styles */
if ( ! function_exists( 'gglcptch_add_admin_script_styles' ) ) {
	function gglcptch_add_admin_script_styles() {
		global $gglcptch_plugin_info;

		/* css for displaing an icon */
		wp_enqueue_style( 'gglcptch_admin_page_stylesheet', plugins_url( 'css/admin_page.css', __FILE__ ) );

		if ( isset( $_REQUEST['page'] ) && ( 'google-captcha.php' == $_REQUEST['page'] || 'google-captcha-allowlist.php' == $_REQUEST['page'] ) ) {
			wp_enqueue_style( 'gglcptch_stylesheet', plugins_url( 'css/style.css', __FILE__ ), array(), $gglcptch_plugin_info['Version'] );
			wp_enqueue_script( 'gglcptch_admin_script', plugins_url( 'js/admin_script.js', __FILE__ ), array( 'jquery', 'jquery-ui-accordion' ), $gglcptch_plugin_info['Version'] );

			bws_enqueue_settings_scripts();
			bws_plugins_include_codemirror();
		}
	}
}
/* Add reCaptcha styles for login page */
if ( ! function_exists( 'gglcptch_add_login_styles' ) ) {
	function gglcptch_add_login_styles() {
		global $gglcptch_plugin_info, $gglcptch_options;

		wp_enqueue_style( 'gglcptch_stylesheet', plugins_url( 'css/login-style.css', __FILE__ ), array(), $gglcptch_plugin_info['Version'] );
	}
}

/* Add google captcha admin styles for test key  */
if ( ! function_exists( 'gglcptch_admin_footer' ) ) {
	function gglcptch_admin_footer() {
		global $gglcptch_plugin_info, $gglcptch_options;
		if ( isset( $_REQUEST['page'] ) && 'google-captcha.php' == $_REQUEST['page'] ) {

			/* update $gglcptch_options */
			register_gglcptch_settings();

			$api_url = gglcptch_get_api_url();

			/* for gglcptch test key */
			if ( isset( $gglcptch_options['recaptcha_version'] ) && in_array( $gglcptch_options['recaptcha_version'], array( 'v2', 'invisible' ) ) ) {
				$deps = ( ! empty( $gglcptch_options['disable_submit'] ) ) ? array( 'gglcptch_pre_api' ) : array( 'jquery' );
			} else {
				$deps = array();
			}
            wp_register_script( 'gglcptch_api', $api_url, $deps, $gglcptch_plugin_info['Version'], true );
			gglcptch_add_scripts();
		}
	}
}

/**
 * Remove dublicate scripts
 */
if ( ! function_exists( 'gglcptch_remove_dublicate_scripts' ) ) {
	function gglcptch_remove_dublicate_scripts() {
		global $wp_scripts;

		if ( ! is_object( $wp_scripts ) || empty( $wp_scripts ) ) {
			return false;
		}

		foreach ( $wp_scripts->registered as $script_name => $args ) {
			if ( preg_match( "|google\.com/recaptcha/api\.js|", $args->src ) && 'gglcptch_api' != $script_name ) {
				/* remove a previously enqueued script */
				wp_dequeue_script( $script_name );
			}
		}
	}
}

/**
 * Add google captcha styles
 */
if ( ! function_exists( 'gglcptch_add_styles' ) ) {
	function gglcptch_add_styles() {
		global $gglcptch_plugin_info, $gglcptch_options;
		wp_enqueue_style( 'gglcptch', plugins_url( 'css/gglcptch.css', __FILE__ ), array(), $gglcptch_plugin_info["Version"] );

		if ( defined( 'BWS_ENQUEUE_ALL_SCRIPTS' ) && BWS_ENQUEUE_ALL_SCRIPTS ) {
			if ( ! wp_script_is( 'gglcptch_api', 'registered' ) ) {
				$api_url = gglcptch_get_api_url();
				if ( isset( $gglcptch_options['recaptcha_version'] ) && in_array( $gglcptch_options['recaptcha_version'], array( 'v2', 'invisible' ) ) ) {
					$deps = ( ! empty( $gglcptch_options['disable_submit'] ) ) ? array( 'gglcptch_pre_api' ) : array( 'jquery' );
				} else {
					$deps = array();
				}

				wp_register_script( 'gglcptch_api', $api_url, $deps, $gglcptch_plugin_info['Version'], true );

				add_action( 'wp_footer', 'gglcptch_add_scripts' );
				if (
				        $gglcptch_options['login_form'] ||
                        $gglcptch_options['reset_pwd_form'] ||
                        $gglcptch_options['registration_form']
				) {
					add_action( 'login_footer', 'gglcptch_add_scripts' );
				}
			}
		}
	}
}

/**
 * Add google captcha js scripts
 */
if ( ! function_exists( 'gglcptch_add_scripts' ) ) {
	function gglcptch_add_scripts() {
		global $gglcptch_options, $gglcptch_plugin_info;

		if ( empty( $gglcptch_options ) ) {
			register_gglcptch_settings();
		}

		if ( isset( $gglcptch_options['recaptcha_version'] ) ) {
			gglcptch_remove_dublicate_scripts();
			if ( ! empty( $gglcptch_options['disable_submit'] ) ) {
				wp_enqueue_script( 'gglcptch_pre_api', plugins_url( 'js/pre-api-script.js', __FILE__ ), array( 'jquery'), $gglcptch_plugin_info['Version'], true );
				wp_localize_script( 'gglcptch_pre_api', 'gglcptch_pre', array(
					'messages' => array(
						'in_progress'	=> __( 'Please wait until Google reCAPTCHA is loaded.', 'google-captcha' ),
						'timeout'		=> __( 'Failed to load Google reCAPTCHA. Please check your internet connection and reload this page.', 'google-captcha' )
					),
					'custom_callback' => apply_filters( 'gglcptch_custom_callback', '' )
				) );
			}
		}

		wp_enqueue_script( 'gglcptch_script', plugins_url( 'js/script.js', __FILE__ ), array( 'jquery', 'gglcptch_api' ), $gglcptch_plugin_info["Version"], true );

		do_action( 'gglcptch_custom_enqueue_script' );

		$options = array(
			'version'	=> $gglcptch_options['recaptcha_version'],
			'sitekey'	=> $gglcptch_options['public_key'],			
			'error'		=> sprintf( '<strong>%s</strong>:&nbsp;%s', __( 'Warning', 'google-captcha' ), gglcptch_get_message( 'multiple_blocks' ) ),
            'disable'   => $gglcptch_options['disable_submit_button']
		);

		if ( $gglcptch_options['recaptcha_version'] == 'v2' )
			$options['theme'] = $gglcptch_options['theme_v2'];

		wp_localize_script( 'gglcptch_script', 'gglcptch', array(
			'options' => $options,
			'vars' => array(
				'visibility'	=> ( 'login_footer' == current_filter() )
			)
		) );

		if ( $gglcptch_options['hide_badge'] ) {
			wp_enqueue_style( 'gglcptch_hide', plugins_url( 'css/hide_badge.css', __FILE__ ), array(), $gglcptch_plugin_info['Version'] );
        }
	}
}

if ( ! function_exists( 'gglcptch_pagination_callback' ) ) {
	function gglcptch_pagination_callback( $content ) {
		$content .= "if ( typeof Recaptcha != 'undefined' || typeof grecaptcha != 'undefined' ) { gglcptch.prepare(); }";
		return $content;
	}
}

/**
 * Add the "async" attribute to our registered script.
 */
if ( ! function_exists( 'gglcptch_add_async_attribute' ) ) {
	function gglcptch_add_async_attribute( $tag, $handle ) {
		if ( 'gglcptch_api' == $handle ) {
			$tag = str_replace( ' src', ' data-cfasync="false" async="async" defer="defer" src', $tag );
		}
		return $tag;
	}
}

if ( ! function_exists( 'gglcptch_create_table' ) ) {
	function gglcptch_create_table() {
		global $wpdb;
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

        $sql = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}gglcptch_allowlist` (
            `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
            `ip` CHAR(31) NOT NULL,
            `ip_from_int` BIGINT,
            `ip_to_int` BIGINT,
            `add_time` DATETIME,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
        dbDelta( $sql );

        /* add unique key */
        if ( ! $wpdb->query( "SHOW KEYS FROM `{$wpdb->prefix}gglcptch_allowlist` WHERE Key_name='ip'" ) ) {
            $wpdb->query( "ALTER TABLE `{$wpdb->prefix}gglcptch_allowlist` ADD UNIQUE(`ip`);" );
        }
	}
}

/* Google catpcha settings */
if ( ! function_exists( 'register_gglcptch_settings' ) ) {
	function register_gglcptch_settings() {
		global $wpdb, $gglcptch_options, $gglcptch_plugin_info;

		if ( empty( $gglcptch_plugin_info ) ) {
			if ( ! function_exists( 'get_plugin_data' ) ) {
				require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
			}
			$gglcptch_plugin_info = get_plugin_data( __FILE__ );
		}

		$plugin_db_version = '0.2';

		/* Install the option defaults */
		if ( ! get_option( 'gglcptch_options' ) ) {
			add_option( 'gglcptch_options', gglcptch_get_default_options() );
		}
		/* Get options from the database */
		$gglcptch_options = get_option( 'gglcptch_options' );

		/* Update tables when update plugin and tables changes*/
		if ( ! isset( $gglcptch_options['plugin_db_version'] ) || $gglcptch_options['plugin_db_version'] != $plugin_db_version ) {

			if ( ! isset( $gglcptch_options['plugin_db_version'] ) ) {
				gglcptch_create_table();
			}

			/**
			 * @deprecated since 1.59
			 * @todo remove after 01.05.2021
			 */
			if ( isset( $gglcptch_options['plugin_option_version'] ) && version_compare( $gglcptch_options['plugin_option_version'], '1.59', '<' ) ) {
				$prefix = $wpdb->prefix . 'gglcptch_';
				/* Renaming a table */
				$wpdb->query( "RENAME TABLE `" . $prefix . "whitelist` TO `" . $prefix . "allowlist`" );

				/* Renaming old options to DB */
				$gglcptch_options['allowlist_is_empty'] = $gglcptch_options['whitelist_is_empty'];
				$gglcptch_options['allowlist_message'] = $gglcptch_options['whitelist_message'];
			}
			/* end deprecated */

			$gglcptch_options['plugin_db_version'] = $plugin_db_version;
			update_option( 'gglcptch_options', $gglcptch_options );
		}

		/* Array merge incase this version has added new options */
		if ( ! isset( $gglcptch_options['plugin_option_version'] ) || $gglcptch_options['plugin_option_version'] != $gglcptch_plugin_info["Version"] ) {
			$gglcptch_options = array_merge( gglcptch_get_default_options(), $gglcptch_options );
			$gglcptch_options['plugin_option_version'] = $gglcptch_plugin_info["Version"];

			/* show pro features */
			$gglcptch_options['hide_premium_options'] = array();

			if ( is_multisite() ) {
				switch_to_blog( 1 );
				register_uninstall_hook( __FILE__, 'gglcptch_delete_options' );
				restore_current_blog();
			} else {
				register_uninstall_hook( __FILE__, 'gglcptch_delete_options' );
			}
			update_option( 'gglcptch_options', $gglcptch_options );
		}
	}
}

if ( ! function_exists( 'gglcptch_get_default_options' ) ) {
	function gglcptch_get_default_options() {
		global $gglcptch_plugin_info;

		$default_options = array(
			'allowlist_message'			=> __( 'You are in the allow list', 'google-captcha' ),
			'public_key'				=> '',
			'private_key'				=> '',
			'login_form'				=> 0,
			'registration_form'			=> 0,
			'reset_pwd_form'			=> 1,
			'comments_form'				=> 0,
			'contact_form'				=> 0,
			'testimonials'				=> 0,
			'theme_v2'					=> 'light',
			'recaptcha_version'			=> 'v2',
			'plugin_option_version'		=> $gglcptch_plugin_info["Version"],
			'first_install'				=>	strtotime( "now" ),
			'display_settings_notice'	=> 1,
			'suggest_feature_banner'	=> 1,
            'score_v3'                  => 0.5,
            'hide_badge'                => 0,
            'disable_submit_button'     => 0,
			'use_globally'              => 0
		);

		if ( function_exists( 'get_editable_roles' ) ) {
			foreach ( get_editable_roles() as $role => $fields ) {
				$default_options[ $role ] = '0';
			}
		}
		return $default_options;
	}
}

if ( ! function_exists( 'gglcptch_plugin_status' ) ) {
	function gglcptch_plugin_status( $plugins, $all_plugins, $is_network ) {
		$result = array(
			'status'      => '',
			'plugin'      => '',
			'plugin_info' => array(),
		);
		foreach ( ( array )$plugins as $plugin ) {
			if ( array_key_exists( $plugin, $all_plugins ) ) {
				if (
					( $is_network && is_plugin_active_for_network( $plugin ) ) ||
					( ! $is_network && is_plugin_active( $plugin ) )
				) {
					$result['status']      = 'activated';
					$result['plugin']      = $plugin;
					$result['plugin_info'] = $all_plugins[ $plugin ];
					break;
				} else {
					$result['status']      = 'deactivated';
					$result['plugin']      = $plugin;
					$result['plugin_info'] = $all_plugins[ $plugin ];
				}

			}
		}
		if ( empty( $result['status'] ) ) {
			$result['status'] = 'not_installed';
		}
		return $result;
	}
}

if ( ! function_exists( 'gglcptch_allowlisted_ip' ) ) {
	function gglcptch_allowlisted_ip() {
		global $wpdb, $gglcptch_options;
		$checked = false;
		if ( empty( $gglcptch_options ) ) {
			$gglcptch_options = get_option( 'gglcptch_options' );
		}
		$allowlist_exist = $wpdb->query( "SHOW TABLES LIKE '{$wpdb->prefix}gglcptch_allowlist'" );
		if ( 1 === $allowlist_exist ) {
			$ip = gglcptch_get_ip();

			if ( ! empty( $ip ) ) {
				$ip_int = sprintf( '%u', ip2long( $ip ) );
				$result = $wpdb->get_var(
					"SELECT `id`
					FROM `{$wpdb->prefix}gglcptch_allowlist`
					WHERE ( `ip_from_int` <= {$ip_int} AND `ip_to_int` >= {$ip_int} ) OR `ip` LIKE '{$ip}' LIMIT 1;"
				);
				$checked = is_null( $result ) || ! $result ? false : true;
			}
		}
		return $checked;
	}
}

/* Display settings page */
if ( ! function_exists( 'gglcptch_add_settings_page' ) ) {
	function gglcptch_add_settings_page() {
		global $gglcptch_plugin_info;
		/*pls */
		require_once( dirname( __FILE__ ) . '/includes/pro_banners.php' );
		/* pls*/ 
		if ( 'google-captcha.php' == $_GET['page'] ) {
			if ( ! class_exists( 'Bws_Settings_Tabs' ) ) {
				require_once( dirname( __FILE__ ) . '/bws_menu/class-bws-settings.php' );
			}
			require_once( dirname( __FILE__ ) . '/includes/class-gglcptch-settings-tabs.php' );
			$page = new Gglcptch_Settings_Tabs( plugin_basename( __FILE__ ) );
			if ( method_exists( $page, 'add_request_feature' ) ) {
                $page->add_request_feature();
			}
		} ?>
		<div class="wrap">
			<?php if ( 'google-captcha.php' == $_GET['page'] ) { ?>
				<h1><?php _e( 'reCaptcha Settings', 'google-captcha' ); ?></h1>
                <noscript><div class="error below-h2"><p><strong><?php _e( "Please enable JavaScript in your browser.", 'google-captcha' ); ?></strong></p></div></noscript>
				<?php $page->display_content();
			} else {
				require_once( dirname( __FILE__ ) . '/includes/allowlist.php' );
				$page = new Gglcptch_Allowlist( plugin_basename( __FILE__ ) );
				if ( is_object( $page ) ) {
					$page->display_content();
				}
				/*pls */
                bws_plugin_reviews_block( $gglcptch_plugin_info['Name'], 'google-captcha' );
				/* pls*/
			} ?>
		</div>
	<?php }
}

if ( ! function_exists( 'gglcptch_is_recaptcha_required' ) ) {
	function gglcptch_is_recaptcha_required( $form_slug = '', $is_user_logged_in = null ) {
		global $gglcptch_options;

		if ( is_null( $is_user_logged_in ) ) {
			$is_user_logged_in = is_user_logged_in();
		}

		if ( empty( $gglcptch_options ) ) {
			$gglcptch_options = get_option( 'gglcptch_options' );
			if ( empty( $gglcptch_options ) ) {
				register_gglcptch_settings();
			}
		}

		$result =
			isset( $gglcptch_options[ $form_slug ] ) &&
            (
				! empty( $gglcptch_options[ $form_slug ] ) &&
				( ! $is_user_logged_in || ! gglcptch_is_hidden_for_role() )
			);

		return $result;
	}
}

/* Checking current user role */
if ( ! function_exists( 'gglcptch_is_hidden_for_role' ) ) {
	function gglcptch_is_hidden_for_role() {
		global $current_user, $gglcptch_options;

		if ( ! is_user_logged_in() ) {
			return false;
		}

		if ( ! empty( $current_user->roles[0] ) ) {
			$role = $current_user->roles[0];
			if ( empty( $gglcptch_options ) ) {
				register_gglcptch_settings();
			}
			return ! empty( $gglcptch_options[ $role ] );
		} else {
			return false;
		}
	}
}

/* Display google captcha */
if ( ! function_exists( 'gglcptch_display' ) ) {
	function gglcptch_display( $content = false ) {
		global $gglcptch_options, $gglcptch_count, $gglcptch_plugin_info;

		if ( empty( $gglcptch_options ) ) {
			register_gglcptch_settings();
		}

		if ( ! gglcptch_allowlisted_ip() || ( isset( $_GET['action'] ) && 'gglcptch-test-keys' == $_GET['action'] ) ) {

			if ( ! $gglcptch_count ) {
				$gglcptch_count = 1;
			}

			$content .= '<div class="gglcptch gglcptch_' . $gglcptch_options['recaptcha_version'] . '">';

			if ( $gglcptch_options['hide_badge'] && 'v2' != $gglcptch_options['recaptcha_version'] ) {
				$content .= sprintf(
					'<div class="google-captcha-notice">%s<a href="https://policies.google.com/privacy" target="_blank">%s</a>%s<a href="https://policies.google.com/terms" target="_blank">%s</a>%s</div>',
					__( 'This site is protected by reCAPTCHA and the Google ', 'google-captcha' ),
					__( 'Privacy Policy', 'google-captcha' ),
					__( ' and ', 'google-captcha' ),
					__( 'Terms of Service', 'google-captcha' ),
					__( ' apply.', 'google-captcha' )
				);
			}
			if ( ! $gglcptch_options['private_key'] || ! $gglcptch_options['public_key'] ) {
				if ( current_user_can( 'manage_options' ) ) {
					$content .= sprintf(
						'<strong>%s <a target="_blank" href="https://www.google.com/recaptcha/admin#list">%s</a> %s <a target="_blank" href="%s">%s</a>.</strong>',
						__( 'To use reCaptcha you must get the keys from', 'google-captcha' ),
						__( 'here', 'google-captcha' ),
						__( 'and enter them on the', 'google-captcha' ),
						admin_url( '/admin.php?page=google-captcha.php' ),
						__( 'plugin setting page', 'google-captcha' )
					);
				}
				$content .= '</div>';
				$gglcptch_count++;
				return $content;
			}

			$api_url = gglcptch_get_api_url();

			/* generating random id value in case of getting content with pagination plugin for not getting duplicate id values */
			$id = mt_rand();
			if ( isset( $gglcptch_options['recaptcha_version'] ) && in_array( $gglcptch_options['recaptcha_version'], array( 'v2', 'invisible' ) ) ) {
				$content .= '<div id="gglcptch_recaptcha_' . $id . '" class="gglcptch_recaptcha"></div>
				<noscript>
					<div style="width: 302px;">
						<div style="width: 302px; height: 422px; position: relative;">
							<div style="width: 302px; height: 422px; position: absolute;">
								<iframe src="https://www.google.com/recaptcha/api/fallback?k=' . $gglcptch_options['public_key'] . '" frameborder="0" scrolling="no" style="width: 302px; height:422px; border-style: none;"></iframe>
							</div>
						</div>
						<div style="border-style: none; bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px; background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px; height: 60px; width: 300px;">
							<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px !important; height: 40px !important; border: 1px solid #c1c1c1 !important; margin: 10px 25px !important; padding: 0px !important; resize: none !important;"></textarea>
						</div>
					</div>
				</noscript>';
				$deps = ( ! empty( $gglcptch_options['disable_submit'] ) ) ? array( 'gglcptch_pre_api' ) : array( 'jquery' );
			} elseif ( isset( $gglcptch_options['recaptcha_version'] ) &&  'v3' == $gglcptch_options['recaptcha_version'] ) {
			    $content .= '<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" /><br /><div class="gglcptch_error_text">' . __( 'The reCAPTCHA verification period has expired. Please reload the page.', 'google-captcha' ) . '</div>';
            }
			$content .= '</div>';
			$gglcptch_count++;

			/* register reCAPTCHA script */
			if ( ! wp_script_is( 'gglcptch_api', 'registered' ) ) {

                if ( isset( $gglcptch_options['recaptcha_version'] ) && 'v3' == $gglcptch_options['recaptcha_version'] ) {
                    wp_register_script( 'gglcptch_api', $api_url, false, null, false );
                } else {
                    wp_register_script( 'gglcptch_api', $api_url, $deps, $gglcptch_plugin_info['Version'], true );
                }
				add_action( 'wp_footer', 'gglcptch_add_scripts' );
				if (
					$gglcptch_options['login_form'] ||
					$gglcptch_options['reset_pwd_form'] ||
					$gglcptch_options['registration_form']
				) {
					add_action( 'login_footer', 'gglcptch_add_scripts' );
				}
			}
			if (
                ( ! isset( $_SERVER['REQUEST_URI'] ) ) ||
                ( ! strstr( $_SERVER['REQUEST_URI'], '/wp-login.php' ) ) ||
				( '/wp-login.php?action=register' == $_SERVER['REQUEST_URI'] && $gglcptch_options['registration_form'] ) ||
				( '/wp-login.php?action=lostpassword' == $_SERVER['REQUEST_URI'] && $gglcptch_options['reset_pwd_form'] ) ||
				( '/wp-login.php' == $_SERVER['REQUEST_URI'] && $gglcptch_options['login_form'] ) ||
                ( strstr( $_SERVER['REQUEST_URI'], '/wp-login.php' ) && strstr( $_SERVER['REQUEST_URI'], 'loggedout' ) && $gglcptch_options['login_form'] )
			) {
				gglcptch_add_styles();
			}
		} elseif ( ! empty( $gglcptch_options['allowlist_message'] ) ) {
			$content .= '<label class="gglcptch_allowlist_message" style="display: block;">' . $gglcptch_options['allowlist_message'] . '</label>';
		}

		return $content;
	}
}

/* Return google captcha content for custom form */
if ( ! function_exists( 'gglcptch_display_custom' ) ) {
	function gglcptch_display_custom( $content = '', $form_slug = '' ) {
		if ( gglcptch_is_recaptcha_required( $form_slug ) ) {
			$content = gglcptch_display( $content );
		}

		return $content;
	}
}

/* Get the reCAPTCHA api js url that corresponds to the reCAPTCHA version. */
if ( ! function_exists( 'gglcptch_get_api_url' ) ) {
	function gglcptch_get_api_url() {
		global $gglcptch_options;
		$use_globally = $gglcptch_options['use_globally'] ? 'recaptcha.net' : 'google.com';

		switch ( true ) {
            case (
                    isset( $gglcptch_options['recaptcha_version'] ) &&
                    in_array( $gglcptch_options['recaptcha_version'], array( 'v2', 'invisible' ) )
            ) :
                $callback = ( ! empty( $gglcptch_options['disable_submit'] ) ) ? 'onload=gglcptch_onload_callback&' : '';
				$api_url = sprintf( 'https://www.' . $use_globally . '/recaptcha/api.js?%srender=explicit', $callback );
            break;
            case (
                    isset( $gglcptch_options['recaptcha_version'] ) &&
                    'v3' == $gglcptch_options['recaptcha_version']
            ) :
				$api_url = sprintf( 'https://www.' . $use_globally . '/recaptcha/api.js?render=%s', $gglcptch_options['public_key'] );
            break;
            default :
				$api_url = 'https://www.google.com/recaptcha/api/js/recaptcha_ajax.js';
        }
		return $api_url;
	}
}

if ( ! function_exists( 'gglcptch_get_response' ) ) {
	function gglcptch_get_response( $privatekey, $remote_ip ) {
		$args = array(
			'body' => array(
				'secret'   => $privatekey,
				'response' => isset( $_POST["g-recaptcha-response"] ) ? stripslashes( sanitize_text_field( $_POST["g-recaptcha-response"] ) ) : '',
				'remoteip' => $remote_ip,
			),
			'sslverify' => false
		);
		$resp = wp_remote_post( 'https://www.google.com/recaptcha/api/siteverify', $args );
		return json_decode( wp_remote_retrieve_body( $resp ), true );
	}
}

/* Check google captcha */
if ( ! function_exists( 'gglcptch_check' ) ) {
	function gglcptch_check( $form = 'general', $debug = false ) {
		global $gglcptch_options;

		if ( 'reset_pwd_form' === $form && empty( $_REQUEST ) && empty( $_SERVER['REQUEST_URI'] ) ) {
			$result = array(
				'response' => true,
				'reason' => ''
			);
			return $result;
		}

		if ( gglcptch_allowlisted_ip() && 'gglcptch_test' != $form ) {
			$result = array(
				'response' => true,
				'reason' => ''
			);
			return $result;
		}

		if ( empty( $gglcptch_options ) ) {
			register_gglcptch_settings();
		}

		if ( ! $gglcptch_options['public_key'] || ! $gglcptch_options['private_key'] ) {
			$errors = new WP_Error;
			$errors->add( 'gglcptch_error', gglcptch_get_message() );
			return array(
				'response'	=> false,
				'reason'	=> 'ERROR_NO_KEYS',
				'errors'	=> $errors
			);
		}

		$gglcptch_remote_addr = filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP );

		if (
			isset( $gglcptch_options['recaptcha_version'] ) &&
			in_array( $gglcptch_options['recaptcha_version'], array( 'v2', 'invisible', 'v3' ) )
		) {
			if ( ! isset( $_POST["g-recaptcha-response"] ) ) {
				$result = array(
					'response' => false,
					'reason' => 'RECAPTCHA_NO_RESPONSE'
				);
			} elseif ( empty( $_POST["g-recaptcha-response"] ) ) {
				$result = array(
					'response' => false,
					'reason' => 'RECAPTCHA_EMPTY_RESPONSE'
				);
			} else {
				$response = gglcptch_get_response( $gglcptch_options['private_key'], $gglcptch_remote_addr );
				if ( empty( $response ) ) {
					$result = array(
							'response' => false,
							'reason' => $debug ? __( 'Response is empty', 'google-captcha' ) : 'VERIFICATION_FAILED'
						);
				} elseif ( isset( $response['success'] ) && !! $response['success'] ) {
					if ( 'v3' ==  $gglcptch_options['recaptcha_version'] && $response['score'] <  $gglcptch_options['score_v3'] ) {
                        $result = array(
                            'response' => false,
                            'reason' => 'RECAPTCHA_SMALL_SCORE'
                        );
                    } else {
                        $result = array(
                            'response' => true,
                            'reason' => ''
                        );
                    }
				} else {
					if (
						! $debug &&
						(
							in_array( 'missing-input-secret', $response['error-codes'] ) ||
							in_array( 'invalid-input-secret', $response['error-codes'] )
						)
					) {
						$result = array(
							'response' => false,
							'reason' => 'ERROR_WRONG_SECRET'
						);
					} else {
						$result = array(
							'response' => false,
							'reason' => $debug ? $response['error-codes'] : 'VERIFICATION_FAILED'
						);
					}
				}
			}
		}

		if ( ! $result['response'] ) {
			$result['errors'] = new WP_Error;
			if ( ! $debug && ! in_array( $result['reason'], array( 'ERROR_WRONG_SECRET', 'ERROR_NO_KEYS' ) ) ) {
				$result['errors']->add( 'gglcptch_error', gglcptch_get_message( $result['reason'] ) );
			}
		}
		$result = apply_filters( 'gglcptch_limit_attempts_check', $result, $form );
		return $result;
	}
}

/**
 * Check google captcha for custom form
 * @since 1.32
 * @param		bool		$allow				(Optional) initial value wheter the previous verification is passed
 * @param		string		$return_format		(Optional) The type of variable to be returned when recaptcha is failed.
 * @param		string		$form_slug			(Optional) The slug of the form to check.
 * 												Default is empty string. When specified, the reCAPTCHA check may be skipped if the form is disabled on the plugin settings page.
 * @return		mixed		$allow				True if ReCapthca is successfully completed, error message string, WP_Error object or false otherwise, depending on the $return_format value.
 */
if ( ! function_exists( 'gglcptch_check_custom' ) ) {
	function gglcptch_check_custom( $allow = true, $return_format = 'bool', $form_slug = '' ) {

		if ( true !== $allow ) {
			return $allow;
		}

		if ( gglcptch_is_recaptcha_required( $form_slug ) ) {
			$gglcptch_check = gglcptch_check();

			if ( ! $gglcptch_check['response'] && 'ERROR_NO_KEYS' == $gglcptch_check['reason'] ) {
				return $allow;
			}

			$la_result = ( ! empty( $form_slug ) ) ? gglcptch_handle_by_limit_attempts( $gglcptch_check['response'], $form_slug ) : true;

			if ( ! $gglcptch_check['response'] || true !== $la_result ) {
				if ( ! in_array( $return_format, array( 'bool', 'string', 'wp_error' ) ) ) {
					$return_format = 'bool';
				}

				switch ( $return_format ) {
					case 'string':
						$allow = '';
						if ( true !== $la_result ) {
							if ( is_wp_error( $la_result ) ) {
								$allow .= $la_result->get_error_message();
							} elseif ( is_string( $la_result ) ) {
								$allow .= $la_result;
							}
						}
						if ( ! $gglcptch_check['response'] ) {
							$allow .= ( ( '' != $allow ) ? "&nbsp;" : '' ) . gglcptch_get_message();
						}
						break;
					case 'wp_error':
						$allow = new WP_Error();
						if ( true !== $la_result ) {
							if ( is_wp_error( $la_result ) ) {
								$allow = $la_result;
							} elseif ( is_string( $la_result ) ) {
								$allow->add( 'gglcptch_la_error', $la_result );
							}
						}
						if ( ! $gglcptch_check['response'] ) {
							$error_message = sprintf( '<strong>%s</strong>:&nbsp;%s', __( 'Error', 'google-captcha' ), gglcptch_get_message() );
							$allow->add( 'gglcptch_error', $error_message );
						}
						break;
					case 'bool':
					default:
						$allow = false;
						break;
				}
			}
		}

		return $allow;
	}
}

/* Limit Attempts plugin check */
if ( ! function_exists( 'gglcptch_limit_attempts_check' ) ) {
	function gglcptch_limit_attempts_check( $gglcptch_check, $form ){

		$result = gglcptch_handle_by_limit_attempts( $gglcptch_check['response'], $form );

		if ( true !== $result ) {
			$gglcptch_check['response'] = false;
			if ( 'login_form' != $form ) {
				if ( is_wp_error( $result ) ) {
					$gglcptch_check['errors']->add( 'lmttmpts_error', $result->get_error_message() );
				} elseif ( is_string( $result ) ) {
					$gglcptch_check['errors']->add( 'lmttmpts_error', $result );
				}
			}
			return $gglcptch_check;
		} else {
			if ( 'contact_form' == $form ) {
				$gglcptch_check['response'] = true;
			}
			return $gglcptch_check;
		}
	}
}

/**
 *
 * @since 1.32
 */
if ( ! function_exists( 'gglcptch_handle_by_limit_attempts' ) ) {
	function gglcptch_handle_by_limit_attempts( $check_result, $form_slug = 'login_form' ) {
		global $gglcptch_forms;

		if ( ! has_filter( 'lmtttmpts_check_ip' ) ) {
			return $check_result;
		}

		if ( empty( $gglcptch_forms ) ) {
			$gglcptch_forms = gglcptch_get_forms();
		}

		$la_form_slug = "{$form_slug}_captcha_check";

		/* if reCAPTCHA answer is right */
		if ( true == $check_result ) {
			/* check if user IP is blocked in the Limit Attempts plugin lists */
			$check_result = apply_filters( 'lmtttmpts_check_ip', $check_result );
            do_action( 'lmtttmpts_form_success', $la_form_slug, gglcptch_get_ip(), array( 'form_name' => $gglcptch_forms[ $form_slug ]['form_name'] ) );
		} else {
			/* if reCAPTCHA answer is wrong */
			$form_data = array( 'form_name' => $gglcptch_forms[ $form_slug ]['form_name'] );

			if ( 'login_form_captcha_check' != $form_slug ) {
				$la_error = apply_filters( 'lmtttmpts_form_fail', $la_form_slug, '', $form_data );
			}

			if ( ! empty( $la_error ) && $la_form_slug != $la_error ) {
				if ( is_wp_error( $check_result ) ) {
					$check_result->add( "gglcptch_error_lmttmpts", $la_error );
				} elseif ( is_string( $check_result ) ) {
					$check_result .= '<br />' . $la_error;
				} else {
					$check_result = $la_error;
				}
			}
		}

		return $check_result;
	}
}

if ( ! function_exists( 'gglcptch_get_ip' ) ) {
	function gglcptch_get_ip() {
		$ip = '';
		if ( isset( $_SERVER ) ) {
			$server_vars = array( 'HTTP_X_REAL_IP', 'HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR' );
			foreach ( $server_vars as $var ) {
				if ( ! empty( $_SERVER[ $var ] ) ) {
					if ( filter_var( $_SERVER[ $var ], FILTER_VALIDATE_IP ) ) {
						$ip = $_SERVER[ $var ];
						if ( 0 < sprintf( '%u', ip2long( $ip ) ) ) {
							break;
						}
					} else { /* if proxy */
						$ip_array = explode( ',', $_SERVER[ $var ] );
						if ( is_array( $ip_array ) && ! empty( $ip_array ) && filter_var( $ip_array[0], FILTER_VALIDATE_IP ) ) {
							$ip = $ip_array[0];
							if ( 0 < sprintf( '%u', ip2long( $ip ) ) ) {
								break;
							}
						}
					}
				}
			}
		}
		return $ip;
	}
}

/**
 * Retrieve the message that corresponds to its message code
 * @since 1.29
 * @param	string		$message_code	used to switch the corresponding message
 * @param	boolean		$echo			'false' is default. If 'false' - returns a message, if 'true' - first, echo a message and then return it.
 * @return	string		$message		Returned message.
 */
if ( ! function_exists( 'gglcptch_get_message' ) ) {
	function gglcptch_get_message( $message_code = 'incorrect', $echo = false ) {

		$message = '';

		$messages = array(
			/* custom error */
			'RECAPTCHA_EMPTY_RESPONSE'	=> __( 'The reCaptcha verification failed. Please try again.', 'google-captcha' ),
			/* v2 error */
			'missing-input-secret' 		=> __( 'Secret Key is missing.', 'google-captcha' ),
			'invalid-input-secret' 		=> sprintf(
				'<strong>%s</strong> <a target="_blank" href="https://www.google.com/recaptcha/admin#list">%s</a> %s.',
				__( 'Secret Key is invalid.', 'google-captcha' ),
				__( 'Check your domain configurations', 'google-captcha' ),
				__( 'and enter it again', 'google-captcha' )
			),
			'incorrect-captcha-sol' => __( 'User response is invalid', 'google-captcha' ),
			'incorrect'             => __( 'The reCaptcha verification failed. Please try again.', 'google-captcha' ),
			'multiple_blocks'       => __( 'More than one reCAPTCHA has been found in the current form. Please remove all unnecessary reCAPTCHA fields to make it work properly.', 'google-captcha' ),
			/* v3 error */
			'RECAPTCHA_SMALL_SCORE' => __( 'reCaptcha v3 test failed', 'google-captcha' )
		);

		if ( isset( $messages[ $message_code ] ) ) {
			$message = $messages[ $message_code ];
		} else {
			$message = $messages['incorrect'];
		}

		if ( $echo ) {
			echo $message;
		}

		return $message;
	}
}

if ( ! function_exists( 'gglcptch_is_woocommerce_page' ) ) {
	function gglcptch_is_woocommerce_page() {
		$traces = debug_backtrace();

		foreach( $traces as $trace ) {
			if ( isset( $trace['file'] ) && false !== strpos( $trace['file'], 'woocommerce' ) ) {
				return true;
			}
		}
		return false;
	}
}

if ( ! function_exists( 'gglcptch_test_keys' ) ) {
	function gglcptch_test_keys() {
		global $gglcptch_options;
		if ( isset( $_REQUEST['_wpnonce'] ) && wp_verify_nonce( $_REQUEST['_wpnonce'] , $_REQUEST['action'] ) ) {
			header( 'Content-Type: text/html' );
			register_gglcptch_settings(); ?>
			<p>
				<?php if ( 'invisible' == $gglcptch_options['recaptcha_version'] || 'v3' == $gglcptch_options['recaptcha_version'] ) {
					_e( 'Please submit "Test verification"', 'google-captcha' );
				} else {
					_e( 'Please complete the captcha and submit "Test verification"', 'google-captcha' );
				} ?>
			</p>
			<?php echo gglcptch_display(); ?>
			<p>
				<input type="hidden" name="gglcptch_test_keys_verification-nonce" value="<?php echo wp_create_nonce( 'gglcptch_test_keys_verification' ); ?>" />
				<button id="gglcptch_test_keys_verification" name="action" class="button-primary cptch_loading" value="gglcptch_test_keys_verification" disabled="disabled"><?php _e( 'Test verification', 'google-captcha' ); ?></button>
			</p>
		<?php }
		die();
	}
}

if ( ! function_exists( 'gglcptch_test_keys_verification' ) ) {
	function gglcptch_test_keys_verification() {
		if ( isset( $_REQUEST['_wpnonce'] ) && wp_verify_nonce( $_REQUEST['_wpnonce'] , $_REQUEST['action'] ) ) {
			$result = gglcptch_check( 'gglcptch_test', true );

			if ( ! $result['response'] ) {
				if ( isset( $result['reason'] ) ) {
					foreach ( ( array )$result['reason'] as $error ) { ?>
						<div class="error gglcptch-test-results"><p>
							<?php gglcptch_get_message( $error, true ); ?>
						</p></div>
					<?php }
				}
			} else { ?>
				<div class="updated gglcptch-test-results"><p><?php _e( 'The verification is successfully completed.','google-captcha' ); ?></p></div>
				<?php $gglcptch_options = get_option( 'gglcptch_options' );
				$gglcptch_options['keys_verified'] = true;
				unset( $gglcptch_options['need_keys_verified_check'] );
				update_option( 'gglcptch_options', $gglcptch_options );
			}
		}
		die();
	}
}

if ( ! function_exists( 'gglcptch_action_links' ) ) {
	function gglcptch_action_links( $links, $file ) {
		if ( ! is_network_admin() ) {
			static $this_plugin;
			if ( ! $this_plugin ) {
				$this_plugin = plugin_basename( __FILE__ );
			}

			if ( $file == $this_plugin ) {
				$settings_link = '<a href="admin.php?page=google-captcha.php">' . __( 'Settings', 'google-captcha' ) . '</a>';
				array_unshift( $links, $settings_link );
			}
		}
		return $links;
	}
}

if ( ! function_exists( 'gglcptch_links' ) ) {
	function gglcptch_links( $links, $file ) {
		$base = plugin_basename( __FILE__ );
		if ( $file == $base ) {
			if ( ! is_network_admin() ) {
				$links[]	=	'<a href="admin.php?page=google-captcha.php">' . __( 'Settings', 'google-captcha' ) . '</a>';
			}
			$links[]	=	'<a href="https://support.bestwebsoft.com/hc/en-us/sections/200538719" target="_blank">' . __( 'FAQ', 'google-captcha' ) . '</a>';
			$links[]	=	'<a href="https://support.bestwebsoft.com">' . __( 'Support', 'google-captcha' ) . '</a>';
		}
		return $links;
	}
}

if ( ! function_exists ( 'gglcptch_plugin_banner' ) ) {
	function gglcptch_plugin_banner() {
		global $hook_suffix, $gglcptch_plugin_info, $gglcptch_options;
		if ( 'plugins.php' == $hook_suffix ) {
			if ( empty( $gglcptch_options ) ) {
				register_gglcptch_settings();
			}
			bws_plugin_banner_to_settings( $gglcptch_plugin_info, 'gglcptch_options', 'google-captcha', 'admin.php?page=google-captcha.php' );
		}

		if ( isset( $_GET['page'] ) && 'google-captcha.php' == $_GET['page'] ) {
			bws_plugin_suggest_feature_banner( $gglcptch_plugin_info, 'gglcptch_options', 'google-captcha' );
		}
	}
}

/* add help tab  */
if ( ! function_exists( 'gglcptch_add_tabs' ) ) {
	function gglcptch_add_tabs() {
		$screen = get_current_screen();
		$args = array(
			'id' 			=> 'gglcptch',
			'section' 		=> '200538719'
		);
		bws_help_tab( $screen, $args );
	}
}

if ( ! function_exists( 'gglcptch_delete_options' ) ) {
	function gglcptch_delete_options() {
		if ( ! function_exists( 'get_plugins' ) ) {
			require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		}
		$all_plugins = get_plugins();

		if ( ! array_key_exists( 'google-captcha-pro/google-captcha-pro.php', $all_plugins ) ) {
			global $wpdb;
			if ( function_exists( 'is_multisite' ) && is_multisite() ) {
				$old_blog = $wpdb->blogid;
				/* Get all blog ids */
				$blogids = $wpdb->get_col( "SELECT `blog_id` FROM $wpdb->blogs" );
				foreach ( $blogids as $blog_id ) {
					switch_to_blog( $blog_id );
					$wpdb->query( "DROP TABLE IF EXISTS `{$wpdb->prefix}gglcptch_whitelist`;" );
					delete_option( 'gglcptch_options' );
				}
				switch_to_blog( $old_blog );
				delete_site_option( 'gglcptch_options' );
			} else {
				$wpdb->query( "DROP TABLE IF EXISTS `{$wpdb->prefix}gglcptch_whitelist`;" );
				delete_option( 'gglcptch_options' );
			}
		}

		require_once( dirname( __FILE__ ) . '/bws_menu/bws_include.php' );
		bws_include_init( plugin_basename( __FILE__ ) );
		bws_delete_plugin( plugin_basename( __FILE__ ) );
	}
}

register_activation_hook( __FILE__, 'gglcptch_plugin_activate' );

add_action( 'admin_menu', 'gglcptch_admin_menu' );

add_action( 'init', 'gglcptch_init' );
add_action( 'admin_init', 'gglcptch_admin_init' );

add_action( 'plugins_loaded', 'gglcptch_plugins_loaded' );

add_action( 'admin_enqueue_scripts', 'gglcptch_add_admin_script_styles' );
add_action( 'login_enqueue_scripts', 'gglcptch_add_login_styles' );
add_filter( 'script_loader_tag', 'gglcptch_add_async_attribute', 10, 2 );
add_action( 'admin_footer', 'gglcptch_admin_footer' );
add_filter( 'pgntn_callback', 'gglcptch_pagination_callback' );

add_filter( 'lmtttmpts_plugin_forms', 'gglcptch_add_lmtttmpts_forms', 10, 1 );

add_shortcode( 'bws_google_captcha', 'gglcptch_display' );
add_filter( 'widget_text', 'do_shortcode' );

add_filter( 'gglcptch_display_recaptcha', 'gglcptch_display_custom', 10, 2 );
add_filter( 'gglcptch_verify_recaptcha', 'gglcptch_check_custom', 10, 3 );

add_filter( 'gglcptch_limit_attempts_check', 'gglcptch_limit_attempts_check', 10, 2 );

add_filter( 'plugin_action_links', 'gglcptch_action_links', 10, 2 );
add_filter( 'plugin_row_meta', 'gglcptch_links', 10, 2 );

add_action( 'admin_notices', 'gglcptch_plugin_banner' );

add_action( 'wp_ajax_gglcptch-test-keys', 'gglcptch_test_keys' );
add_action( 'wp_ajax_gglcptch_test_keys_verification', 'gglcptch_test_keys_verification' );
