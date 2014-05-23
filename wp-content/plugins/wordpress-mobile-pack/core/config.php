<?php

define("WMP_VERSION", '2.0');
define('WMP_PLUGIN_NAME', 'WP Mobile Pack');
define('WMP_DOMAIN', 'wordpress-mobile-pack');

define('WMP_PLUGIN_PATH', WP_PLUGIN_DIR . '/'.WMP_DOMAIN.'/');

require_once( dirname( __FILE__ ) . '/config-uploads.php' );
if ( !defined( 'WMP_FILES_UPLOADS_DIR' ) && !defined( 'WMP_FILES_UPLOADS_URL' ) ) {
	wmp_set_uploads_dir();
}

define('WMP_FEEDBACK_EMAIL','florentina@webcrumbz.co');
define('WMP_NEWS_UPDATES','https://s3-eu-west-1.amazonaws.com/appticles-wmpack/dashboard/news.json');
define('WMP_WHATSNEW_UPDATES','https://s3-eu-west-1.amazonaws.com/appticles-wmpack/dashboard/whats_new/content.json');
define('WMP_NEWSLETTER_PATH','http://gateway-dev.appticles.com/newsletter/api/subscribe');
define('WMP_WAITLIST_PATH','http://gateway-dev.appticles.com/waitlist/api/subscribe');

// define the string used for generating comments tokens (can be overwritten for increasing security)
define('WMP_CODE_KEY','asdc%/dfr_A!8792*');

?>
