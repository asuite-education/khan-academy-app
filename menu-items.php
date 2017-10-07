<?php
/*
Plugin Name:  Khan Academy
Plugin URI:   https://www.khanacademy.org
Description:  Enables the Khan Academy API
Version:      1.0
Author:       ASuite SDS
Author URI:   http://sds.asuite.cf
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  khan-academy-app
?>
<?php global $current_user; get_currentuserinfo(); ?>
<?php

/** Step 2 (from text above). */
add_action( 'admin_menu', 'help_setup' );

/** Step 1. */
function khan_academy_app() {
	add_menu_page( 'Khan Academy', 'Khan Academy', 'read', 'khan-academy', 'khan_academy_options' );
}

/** Step 3. */
function khan_academy_options() {
	if ( !current_user_can( 'read' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<h2>Khan Academy</h2>';
	echo '<p>Contact your account manager.';
	echo '</div>';
}
?>
