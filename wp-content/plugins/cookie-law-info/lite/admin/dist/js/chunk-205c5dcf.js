(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-205c5dcf"],{"02dd":function(t,e,s){"use strict";s("6683")},"040b":function(t,e,s){"use strict";s("8596")},"1fbe":function(t,e,s){},"2b43":function(t,e,s){"use strict";s("c7cf")},"39fa":function(t,e,s){t.exports=s.p+"img/language.svg"},5222:function(t,e,s){},"5d4c":function(t,e,s){},6683:function(t,e,s){},"6aed":function(t,e,s){t.exports=s.p+"img/scan-history.svg"},8596:function(t,e,s){},"8dd7":function(t,e,s){"use strict";s("1fbe")},"919d":function(t,e,s){"use strict";var n=function(){var t=this,e=t._self._c;return t.showConnectSuccess?e("div",{staticClass:"cky-connect-success",attrs:{id:"cky-connect-success"}},[t.syncing?e("div",{staticClass:"cky-connect-loader"},[e("cky-spinner"),e("h4",[t._v(" "+t._s(t.$i18n.__("Please wait while we connect your site to app.cookieyes.com","cookie-law-info"))+" ")])],1):e("div",{staticClass:"cky-connect-success-container"},[e("div",{staticClass:"cky-connect-success-icon"}),e("div",{staticClass:"cky-connect-success-message"},[t._t("message",(function(){return[e("h2",[t._v(" "+t._s(t.$i18n.__("Your website is connected to app.cookieyes.com","cookie-law-info"))+" ")]),e("p",[t._v(" "+t._s(t.$i18n.__("You can now continue to manage all your existing settings and access all free CookieYes features from your web app account","cookie-law-info"))+" ")])]}))],2),e("div",{staticClass:"cky-connect-success-actions"},[t._t("action",(function(){return[e("button",{staticClass:"cky-button cky-button-medium cky-external-link",on:{click:function(e){return t.redirectToApp()}}},[t._v(" "+t._s(t.$i18n.__("Go to CookieYes Web App","cookie-law-info"))+" ")])]}))],2)])]):t._e()},i=[],o=function(){var t=this,e=t._self._c;return e("span",{staticClass:"cky-spinner-loader"})},a=[],c={name:"CkySpinner",components:{}},r=c,l=(s("9be8"),s("2877")),u=Object(l["a"])(r,o,a,!1,null,null,null),d=u.exports,y={name:"CkyConnectSuccess",components:{CkySpinner:d},props:{timeout:{type:Number,default:6e3}},data(){return{showConnectSuccess:!1,syncing:!1}},methods:{showMessage(){this.showConnectSuccess=!0},redirectToApp(){this.$router.redirectToApp(),this.showConnectSuccess=!1,this.$router.redirectToDashboard(this.$route.name)}},created(){this.$root.$on("afterConnection",()=>{this.syncing=!0,this.showMessage()}),this.$root.$on("afterSyncing",async()=>{this.syncing=!1})}},p=y,k=(s("d38d"),Object(l["a"])(p,n,i,!1,null,null,null));e["a"]=k.exports},"91db":function(t,e,s){t.exports=s.p+"img/regulation.svg"},"947c":function(t,e,s){t.exports=s.p+"img/banner-status.svg"},9573:function(t,e,s){"use strict";s.r(e);var n=function(){var t=this,e=t._self._c;return e("div",{staticClass:"cky-section cky-section-dashboard cky-zero--padding cky-zero--margin"},[e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("notice-migration"),e("cky-connect-success"),e("cky-connect-notice")],1)]),t.loading?t._e():e("div",{staticClass:"cky-section-content"},[e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("cky-dashboard-overview")],1)]),t.account.connected&&!t.syncing?e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-7"},[e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("cky-scan-summary")],1)])]),e("div",{staticClass:"cky-col-5"},[e("cky-consent-chart")],1)]):t._e()])])},i=[],o=function(){var t=this,e=t._self._c;return e("cky-card",{attrs:{title:t.$i18n.__("Cookie Summary","cookie-law-info"),loading:t.cardLoader},scopedSlots:t._u([{key:"body",fn:function(){return[e("div",{staticClass:"cky-stats-section"},t._l(t.statistics,(function(t){return e("cky-stats-card",{key:t.slug,attrs:{statistics:t}})})),1)]},proxy:!0}])})},a=[],c=s("f9c4"),r=s("9610"),l=function(){var t=this,e=t._self._c;return e("div",{staticClass:"cky-stats-col"},[t.statistics.icon?e("div",{staticClass:"cky-stats-icon"},[e("cky-icon",{attrs:{icon:t.statistics.icon,width:t.iconWidth,color:t.iconColor}})],1):t._e(),e("div",{staticClass:"cky-stats-title"},[t._v(t._s(t.statistics.title))]),e("div",{staticClass:"cky-stats-count"},[t._v(t._s(t.statistics.count))])])},u=[],d=s("1f3d"),y={components:{CkyIcon:d["a"]},name:"CkyStatsCard",props:{statistics:Object,iconWidth:{type:String,default:"30"},iconColor:{type:String,default:"#000000"}},computed:{getLoadingClass(){return{"cky-loading":this.loading}}}},p=y,k=(s("040b"),s("2877")),g=Object(k["a"])(p,l,u,!1,null,null,null),f=g.exports,_={components:{CkyCard:r["a"],CkyStatsCard:f},data(){return{loading:!0,stats:[{slug:"cookies",icon:!1,title:this.$i18n.__("Total Cookies","cookie-law-info"),count:0},{slug:"categories",icon:!1,title:this.$i18n.__("Total Categories","cookie-law-info"),count:0},{slug:"pages",icon:!1,title:this.$i18n.__("Pages Scanned","cookie-law-info"),count:0}]}},methods:{async getstats(){this.loading=!0;try{const t=await c["a"].get({path:"dashboard/summary"});t&&this.stats.forEach((function(e){const s=t[e.slug]?t[e.slug]:0;e.count=s})),this.loading=!1}catch(t){console.error(t)}}},computed:{statistics(){return this.stats},cardLoader(){return!this.$store.state.settings.info||this.loading}},created(){this.getstats()}},h=_,w=Object(k["a"])(h,o,a,!1,null,null,null),b=w.exports,v=function(){var t=this,e=t._self._c;return t.showNotice?e("cky-notice",{ref:"ReviewNotice",staticClass:"cky-notice-migration",attrs:{type:"info"}},[e("div",{staticClass:"cky-row cky-align-center"},[e("div",{staticClass:"cky-col-12"},[e("div",{staticClass:"cky-align-center"},[e("p",{staticStyle:{"margin-bottom":"5px","margin-right":"15px"}},[e("b",[t._v(t._s(t.message)+" ")])]),e("a",{staticClass:"cky-button cky-button-outline",attrs:{href:t.legacyURL}},[t._v(" "+t._s(t.$i18n.__("Switch back to old UI","cookie-law-info"))+" ")])])])])]):t._e()},C=[],m=s("462b"),$={name:"NoticeMigration",components:{CkyNotice:m["a"]},data(){return{showNotice:!!window.ckyAppNotices.migration_notice,legacyURL:window.ckyGlobals.legacyURL}},computed:{message(){return this.showNotice&&window.ckyAppNotices.migration_notice.message||""}},methods:{async removeNotice(){await c["a"].post({path:"/settings/notices/migration_notice"}),this.$refs.ReviewNotice.isShown=!1},async switchToLegacy(){await c["a"].post({path:"/settings/legacy"})}},mounted(){}},S=$,L=(s("02dd"),Object(k["a"])(S,v,C,!1,null,null,null)),x=L.exports,A=s("919d"),B=function(){var t=this,e=t._self._c;return t.account.connected&&!t.syncing?e("cky-notice",{staticClass:"cky-connect-notice",attrs:{type:"default"}},[e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("h4",{staticClass:"cky-admin-notice-header"},[e("cky-icon",{attrs:{icon:"successCircle",color:"#00aa63",width:"16px"}}),t._v(" "+t._s(t.$i18n.__("Your website is connected to CookieYes","cookie-law-info"))+" ")],1),e("div",{staticClass:"cky-connect-notice-message"},[e("p",[t._v(" "+t._s(t.$i18n.__("You can access all the plugin settings (Cookie Banner, Cookie Manager, Languages & Policy Generators) on the web app and unlock new features like Cookie Scan and Consent Log.","cookie-law-info"))+" ")])]),e("button",{staticClass:"cky-button cky-external-link",on:{click:function(e){return e.preventDefault(),t.$router.redirectToApp()}}},[t._v(" "+t._s(t.$i18n.__("Go to Web App","cookie-law-info"))+" ")])])])]):t.showNotice&&!t.tablesMissing?e("cky-notice",{staticClass:"cky-connect-notice cky-connect-notice-disabled",attrs:{type:"default",isDismissable:!0},on:{onDismiss:function(e){return t.removeNotice()}}},[e("div",{staticClass:"cky-row cky-align-center"},[e("div",{staticClass:"cky-col-8"},[e("h3",{staticClass:"cky-admin-notice-header"},[e("cky-icon",{attrs:{icon:"connect",width:"44px"}}),t._v(" "+t._s(t.$i18n.__("Connect your website to CookieYes","cookie-law-info"))+" ")],1),e("p",{staticStyle:{"margin-top":"10px"},domProps:{innerHTML:t._s(t.contents.connect)}}),e("div",{staticClass:"cky-connect-features"},[e("p",{staticClass:"cky-align-center"},[e("span",[t._v("✓")]),t._v(t._s(t.$i18n.__("Cookie Scanner - Discover cookies on your site and auto-block them prior to user consent (Legally required)","cookie-law-info"))+" ")]),e("p",[e("span",[t._v("✓")]),t._v(t._s(t.$i18n.__("Consent Log - Record user consents to demonstrate proof of compliance (Legally required)","cookie-law-info"))+" ")]),e("p",{staticStyle:{"margin-top":"15px"}},[e("i",{domProps:{innerHTML:t._s(t.contents.pageviews)}})])])]),e("div",{staticClass:"cky-col-4 cky-justify-end"},[e("div",{staticClass:"cky-connect-button-container"},[e("cky-button",{ref:"ckyButtonConnectNew",staticClass:"cky-button-connect cky-button-medium",nativeOn:{click:function(e){return t.connectToApp()}}},[t._v(" "+t._s(t.$i18n.__("New? Create a Free Account","cookie-law-info"))+" "),e("template",{slot:"loader"},[t._v(t._s(t.$i18n.__("Connecting...","cookie-law-info")))])],2),e("cky-button",{ref:"ckyButtonConnectExisting",staticClass:"cky-button-connect cky-button-medium cky-button-outline",nativeOn:{click:function(e){return t.connectToApp(!0)}}},[t._v(" "+t._s(t.$i18n.__("Connect Your Existing Account","cookie-law-info"))+" "),e("template",{slot:"loader"},[t._v(t._s(t.$i18n.__("Connecting...","cookie-law-info")))])],2)],1)])])]):t._e()},U=[],N=s("c068"),R=s("2f62"),T={name:"CkyConnectNotice",mixins:[N["a"]],components:{CkyNotice:m["a"],CkyIcon:d["a"]},data(){return{syncing:!1,contents:{connect:this.$i18n.sprintf(this.$i18n.__("Create a free account to connect with %sCookieYes web app%s. After connecting, you can manage all your settings from the web app and access advanced features:","cookie-law-info"),"<b>","</b>"),pageviews:this.$i18n.sprintf(this.$i18n.__('You can continue using the plugin without connecting to the web app if you wish so. Please note that the standalone version of the plugin doesn\'t provide some advanced features. However, it offers unlimited <a href="%s" target="_blank">pageviews</a> in contrast to that of the web app-connected version.',"cookie-law-info"),"https://www.cookieyes.com/documentation/pageview-pricing/")}}},methods:{async removeNotice(){await c["a"].post({path:"/settings/notices/connect_notice",data:{}})}},computed:{...Object(R["d"])("settings",["info"]),account(){return this.getOption("account")},showNotice(){return!!window.ckyAppNotices.connect_notice},tablesMissing(){return!!this.info.tables_missing}},mounted(){this.account.connected||(this.$root.$on("beforeConnection",()=>{this.syncing=!0}),this.$root.$on("afterConnection",()=>{}),this.$root.$on("afterSyncing",()=>{this.syncing=!1}))}},O=T,P=(s("8dd7"),Object(k["a"])(O,B,U,!1,null,null,null)),I=P.exports,G=function(){var t=this,e=t._self._c;return t.pluginStatus&&!t.tablesMissing?e("div",{class:["cky-dashboard-overview",{connected:!!t.account.connected}]},[e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("div",{staticClass:"cky-card-header"},[e("h5",{staticClass:"cky-card-title"},[t._v(" "+t._s(t.$i18n.__("Overview","cookie-law-info"))+" ")])])]),e("div",{staticClass:"cky-col-6"},[e("cky-card",{attrs:{loading:t.cardLoader},scopedSlots:t._u([{key:"body",fn:function(){return[e("div",{staticClass:"cky-card-row"},[t.hasBannerErrors?e("cky-notice",{attrs:{type:t.noticeType,showIcon:!0}},[e("p",{domProps:{innerHTML:t._s(t.getBannerError())}}),e("p",{domProps:{innerHTML:t._s(t.disconnectMessage)}})]):t._e()],1),e("div",{staticClass:"cky-card-row"},[e("div",{staticClass:"cky-info-widget-container"},[e("div",{staticClass:"cky-info-widget"},[e("div",{staticClass:"cky-info-widget-icon"},[e("img",{attrs:{src:s("947c"),alt:"layout"}})]),e("div",{staticClass:"cky-info-widget-content"},[e("span",{staticClass:"cky-info-widget-title"},[t._v(t._s(t.$i18n.__("Banner status","cookie-law-info")))]),t.bannerStatus?e("span",{staticClass:"cky-info-widget-text",staticStyle:{color:"#00aa62"}},[t._v(" "+t._s(t.$i18n.__("Active","cookie-law-info"))+" ")]):e("span",{staticClass:"cky-info-widget-text cky-status-error"},[t._v(" "+t._s(t.$i18n.__("Disabled","cookie-law-info"))+" ")])])]),e("div",{staticClass:"cky-info-widget"},[e("div",{staticClass:"cky-info-widget-icon"},[e("img",{attrs:{src:s("91db"),alt:"layout"}})]),e("div",{staticClass:"cky-info-widget-content"},[e("span",{staticClass:"cky-info-widget-title"},[t._v(t._s(t.$i18n.__("Regulation","cookie-law-info")))]),e("span",{staticClass:"cky-info-widget-text"},[t._v(" "+t._s(t.applicableLaws)+" ")])])])])]),e("div",{staticClass:"cky-card-row"},[e("div",{staticClass:"cky-info-widget-container"},[e("div",{staticClass:"cky-info-widget"},[e("div",{staticClass:"cky-info-widget-icon"},[e("img",{attrs:{src:s("6aed"),alt:"layout"}})]),e("div",{staticClass:"cky-info-widget-content"},[e("span",{staticClass:"cky-info-widget-title"},[t._v(t._s(t.$i18n.__("Last successful scan","cookie-law-info")))]),e("span",{staticClass:"cky-info-widget-text"},[t.successScan.date&&t.account.connected?e("span",{staticStyle:{"font-size":"14px"}},[t._v(" "+t._s(t.successScan.date.date||t.$i18n.__("Not available","cookie-law-info"))+" "),e("span",{staticStyle:{"font-weight":"400"}},[t._v(t._s(t.successScan.date.time||""))])]):e("span",[t._v(t._s(t.$i18n.__("Not available","cookie-law-info")))])])])]),e("div",{staticClass:"cky-info-widget"},[e("div",{staticClass:"cky-info-widget-icon"},[e("img",{attrs:{src:s("39fa"),alt:"layout"}})]),e("div",{staticClass:"cky-info-widget-content"},[e("span",{staticClass:"cky-info-widget-title"},[t._v(t._s(t.$i18n.__("Language","cookie-law-info")))]),e("span",{staticClass:"cky-info-widget-text"},[t._v(" "+t._s(t.defaultLanguage.name)+" ")])])])])]),t.account.connected?e("div",{staticClass:"cky-card-row"},[e("div",{staticClass:"cky-card-row-actions"},[e("a",{staticClass:"cky-button cky-button-outline cky-external-link cky-button-medium",on:{click:function(e){return t.$router.redirectToApp("customize")}}},[t._v(t._s(t.$i18n.__("Customize Banner","cookie-law-info"))+" ")]),e("a",{staticClass:"cky-link cky-actions-link cky-button-icon cky-external-link",attrs:{href:t.getSiteURL(),target:"_blank"}},[t._v(t._s(t.$i18n.__("Preview Banner","cookie-law-info"))+" ")])])]):e("div",{staticClass:"cky-card-row"},[e("div",{staticClass:"cky-card-row-actions"},[e("router-link",{attrs:{to:{name:"customize"},custom:""},scopedSlots:t._u([{key:"default",fn:function({navigate:s}){return[e("a",{staticClass:"cky-button cky-button-outline cky-button-medium",on:{click:s}},[t._v(t._s(t.$i18n.__("Customize Banner","cookie-law-info"))+" ")])]}}],null,!1,1347445872)}),e("a",{staticClass:"cky-link cky-actions-link cky-button-icon cky-external-link",attrs:{href:t.getSiteURL(),target:"_blank"}},[t._v(t._s(t.$i18n.__("Preview Banner","cookie-law-info"))+" ")])],1)])]},proxy:!0}],null,!1,1714923013)})],1),e("div",{staticClass:"cky-col-6"},[t.connected?e("upgrade-widget"):e("tutorial-video")],1)])]):t._e()},j=[],D=s("c4aa"),E=function(){var t=this,e=t._self._c;return t.account.connected?e("cky-card",{staticClass:"cky-upgrade-widget",scopedSlots:t._u([{key:"body",fn:function(){return[e("div",{staticClass:"cky-row cky-align-center"},[e("div",{staticClass:"cky-col-10"},[e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("h3",{staticClass:"cky-admin-notice-header"},[t._v(" "+t._s(t.content.title)+" ")]),e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("p",{staticClass:"cky-py-2"},[t._v(" "+t._s(t.content.description)+" ")])])])])]),e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-8"},[e("div",{staticClass:"cky-premium-features-list"},[e("ul",t._l(t.content.features,(function(s,n){return e("li",{key:n},[t._v(" "+t._s(s)+" ")])})),0)])])]),e("div",{staticClass:"cky-row"},[e("div",{staticClass:"cky-col-12"},[e("div",{staticClass:"cky-align-center cky-py-2"},[e("a",{staticClass:"cky-button cky-button-medium cky-button-icon cky-center",attrs:{href:t.getURL(),target:"_blank"}},["ultimate"!==t.plan.toLowerCase()?e("cky-icon",{attrs:{icon:"crown",width:"20"}}):t._e(),t._v(" "+t._s(t.content.cta)+" ")],1)])])])])])]},proxy:!0}],null,!1,232970681)}):t._e()},M=[],Y=s("3840");const W={default:{title:Y["a"].__("Keep pace with compliance as your business grows","cookie-law-info"),description:Y["a"].__("Access advanced features and future-proof your business against legal risks. Get 2 months free on annual plans!","cookie-law-info"),features:[Y["a"].__("Get unlimited pageviews/month","cookie-law-info"),Y["a"].__("Schedule monthly cookie scan","cookie-law-info"),Y["a"].__("Geo-target cookie banner","cookie-law-info"),Y["a"].__("Remove CookieYes branding","cookie-law-info")],cta:Y["a"].__("Upgrade Now","cookie-law-info")},custom:{title:Y["a"].__("Automate your compliance at scale with our enterprise plan","cookie-law-info"),description:Y["a"].__("Your growing website needs scalable compliance. Get access to custom features tailored to meet your unique requirements.","cookie-law-info"),features:[Y["a"].__("Get unlimited pageviews/month","cookie-law-info"),Y["a"].__("Unlimited pages scanned/month","cookie-law-info"),Y["a"].__("Advanced CSS customization","cookie-law-info"),Y["a"].__("Dedicated customer support","cookie-law-info")],cta:Y["a"].__("Get Custom Plan","cookie-law-info")}};var z={name:"UpgradeWidget",mixins:[N["a"]],components:{CkyCard:r["a"],CkyIcon:d["a"]},props:{},data(){return{}},methods:{getURL(){let t=`${window.ckyGlobals.webApp.url}/settings?upgrade_id=${this.account.website_id}&openUpgrade=true&upgrade_source=cypluginupgrade`;return"ultimate"===this.plan.toLowerCase()&&(t="https://www.cookieyes.com/support/?query=enterprise&ref=cypluginupgrade#enterprise"),t}},computed:{account(){return this.getOption("account")},plan(){return!!this.getInfo("plan")&&this.getInfo("plan").name||"free"},content(){return"ultimate"===this.plan.toLowerCase()?W.custom:W.default}},async created(){}},q=z,V=(s("2b43"),Object(k["a"])(q,E,M,!1,null,null,null)),F=V.exports,H=function(){var t=this,e=t._self._c;return e("cky-card",{staticClass:"cky-tutorial-widget",scopedSlots:t._u([{key:"body",fn:function(){return[e("iframe",{staticClass:"youtube-player",staticStyle:{width:"100%",height:"100%"},attrs:{src:"https://www.youtube.com/embed/g20giM91rs4?rel=0",allowfullscreen:"true",sandbox:"allow-scripts allow-same-origin allow-popups allow-presentation"}})]},proxy:!0}])})},J=[],K={name:"TutorialVideo",components:{CkyCard:r["a"]},props:{},methods:{},computed:{}},Q=K,X=Object(k["a"])(Q,H,J,!1,null,null,null),Z=X.exports,tt={name:"CkyDashboardOverview",components:{CkyCard:r["a"],UpgradeWidget:F,TutorialVideo:Z,CkyNotice:m["a"]},props:{},data(){return{loading:!0,noticeType:"error",subscriptionURL:window.ckyGlobals.webApp.url+"/settings/subscriptions",disconnectMessage:this.$i18n.sprintf(this.$i18n.__('Alternatively, you can <a href="%s">disconnect</a> your site from the web app and continue using the standalone version of the plugin. Please note that by doing so, you will lose your banner customization and access to advanced features.',"cookie-law-info"),"admin.php?page=cookie-law-info#/settings")}},methods:{loadBanner:async function(){this.loading=!0,await D["a"].getActiveBanner(),this.loading=!1},getSiteURL(){const t=new URL(window.ckyGlobals.site.url);return t.searchParams.append("cky_preview",!0),t.toString()},getBannerError(){return!(!this.info.website||!this.connected)&&("suspended"!==this.info.website.status||this.info.website.payment_status?"suspended"===this.info.website.status&&this.info.website.is_trial&&!this.info.website.is_trial_with_card?this.bannerErrors.trailEnds:!!this.info.pageviews.exceeded&&("banner_disabled"===this.info.status?this.bannerErrors.pageviewsExceeded:(this.noticeType="warning",this.bannerErrors.pageviewsWarning)):this.bannerErrors.suspended)}},computed:{...Object(R["c"])("languages",{defaultLanguage:"getDefault"}),...Object(R["d"])("settings",["info"]),cardLoader(){return!this.info||this.loading},banner(){return this.$store.state.banners.current},consentLogs(){return this.getInfo("consent_logs")&&this.getInfo("consent_logs").status||!1},account(){return this.getOption("account")},connected(){return!!this.account.connected},successScan(){return this.getInfo("success_scan")&&this.getInfo("success_scan")||{}},applicableLaws(){if(this.account.connected){const t=this.getInfo("banners");return t.laws&&"ccpa"===t.laws?"US State Laws":t.is_iab_enabled?t.laws&&"ccpa & gdpr"===t.laws?"GDPR (IAB TCF v2.2) & US State Laws":"GDPR (IAB TCF v2.2)":t.laws&&"ccpa & gdpr"===t.laws?"GDPR & US State Laws":"GDPR"}{const t=this.banner.properties.settings.applicableLaw;return"gdpr"===t?"GDPR":"US State Laws"}},pluginStatus(){return this.$store.state.settings.status},tablesMissing(){return!!this.info.tables_missing},bannerStatus(){return!this.info.website||!this.connected||!(this.info.pageviews&&this.info.pageviews.exceeded&&"banner_disabled"==this.info.status||"suspended"===this.info.website.status&&this.info.website.is_trial&&!this.info.website.is_trial_with_card)},hasBannerErrors(){return!!this.getBannerError()},gracePeriod(){return this.info&&this.info.website&&this.info.website.grace_period_ends_at?this.info.website.grace_period_ends_at:0},bannerErrors(){return{trailEnds:this.$i18n.sprintf(this.$i18n.__('Your free trial has expired. This site is now suspended and will be <b>permanently deleted</b> from your web app account if you do not upgrade to a paid plan by <b>%s</b>. Visit <a href="%s" target="_blank">Subscriptions</a> to choose a plan and activate your banner.',"cookie-law-info"),this.gracePeriod,this.subscriptionURL),suspended:this.$i18n.sprintf(this.$i18n.__('This site is currently suspended due to payment failure and will be <b>permanently deleted</b> from your web app account if you do not complete the payment by <b>%s</b>. Visit <a href="%s" target="_blank">Subscriptions</a> to choose a plan and activate your banner.',"cookie-law-info"),this.gracePeriod,this.subscriptionURL),pageviewsWarning:this.$i18n.sprintf(this.$i18n.__('<b>Pageview limit exceeded</b>: Upgrade to a higher plan to increase your pageview limit and continue displaying the banner on this site. Visit <a href="%s" target="_blank">Subscriptions</a> to upgrade plan.',"cookie-law-info"),this.subscriptionURL),pageviewsExceeded:this.$i18n.sprintf(this.$i18n.__('<b>Pageview limit exceeded</b>: Upgrade to a higher plan to increase your pageview limit and continue displaying the banner on this site. Visit <a href="%s" target="_blank">Subscriptions</a> to upgrade plan and activate your banner.',"cookie-law-info"),this.subscriptionURL)}}},created(){this.loadBanner()}},et=tt,st=(s("ad6e"),Object(k["a"])(et,G,j,!1,null,null,null)),nt=st.exports,it={name:"Dashboard",mixins:[N["a"]],components:{NoticeMigration:x,CkyScanSummary:b,CkyConnectSuccess:A["a"],CkyConnectNotice:I,CkyDashboardOverview:nt,CkyConsentChart:()=>s.e("chunk-4e9a2515").then(s.bind(null,"03b4"))},props:{},data(){return{scanStatus:!0,loading:!0,syncing:!1}},methods:{loadBanner:async function(){await D["a"].getActiveBanner()},connectScan(){this.connectToApp(),this.$root.$on("afterConnection",()=>{this.$refs.ckyButtonConnectScan.startLoading()})},connectLog(){this.connectToApp(),this.$root.$on("afterConnection",()=>{this.$refs.ckyButtonConnectLog.startLoading()})},getSiteURL(){const t=new URL(window.ckyGlobals.site.url);return t.searchParams.append("cky_preview",!0),t.toString()}},computed:{banner(){return this.$store.state.banners.current},consentLogs(){return this.getInfo("consent_logs")&&this.getInfo("consent_logs").status||!1},account(){return this.getOption("account")},bannerStatus(){return this.getInfo("banners")&&this.getInfo("banners").status||!1},scans(){return this.getInfo("scans")&&this.getInfo("scans")||{}},...Object(R["c"])("languages",{defaultLanguage:"getDefault"})},async created(){this.loading=!0;try{await this.loadBanner(),this.loading=!1,this.$root.$on("beforeConnection",()=>{this.syncing=!0}),this.$root.$on("afterSyncing",()=>{this.syncing=!1})}catch(t){console.error(t)}}},ot=it,at=(s("db52"),Object(k["a"])(ot,n,i,!1,null,"72c85508",null));e["default"]=at.exports},9610:function(t,e,s){"use strict";var n=function(){var t=this,e=t._self._c;return t.pluginStatus?e("div",{staticClass:"cky-card",class:t.getLoadingClass},[t.title?e("div",{staticClass:"cky-card-header"},[e("h5",{staticClass:"cky-card-title"},[t._v(" "+t._s(t.title)+" ")]),t.hasActions?e("div",{staticClass:"cky-card-actions"},[t._t("headerAction")],2):t._e()]):t._e(),t.hasBodySlot?e("div",{class:t.getBodyClass},[t.loading?e("cky-card-loader"):t._t("body")],2):t._e(),t._t("outside"),t.hasFooterSlot?e("div",{staticClass:"cky-card-footer"},[t._t("footer")],2):t._e()],2):t._e()},i=[],o=s("17aa"),a={components:{CkyCardLoader:o["a"]},name:"CkyCard",props:{title:{type:String,required:!1},bodyClass:{type:String,default:""},loading:{type:Boolean,default:!1},fullWidth:{type:Boolean,default:!1}},computed:{hasActions(){return!!this.$slots.headerAction},hasBodySlot(){return!!this.$slots.body},hasFooterSlot(){return!!this.$slots.footer},getLoadingClass(){return{"cky-loading":this.loading}},getBodyClass(){return{"cky-card-body":!0,"cky-card-body--full":this.fullWidth,[this.bodyClass]:this.bodyClass}},pluginStatus(){return this.$store.state.settings.status}}},c=a,r=s("2877"),l=Object(r["a"])(c,n,i,!1,null,null,null);e["a"]=l.exports},"9be8":function(t,e,s){"use strict";s("be66")},ad6e:function(t,e,s){"use strict";s("be72")},be66:function(t,e,s){},be72:function(t,e,s){},c7cf:function(t,e,s){},d38d:function(t,e,s){"use strict";s("5d4c")},db52:function(t,e,s){"use strict";s("5222")}}]);