<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @package   ReorderEntryImages
 * @author    Vayu Robins <v@vayu.dk>
 * @license   GPL-2.0+
 * @link      http://vayu.dk/reorder-entry-images/
 * @copyright 2013 Vayu Robins
 */

if ( ! current_user_can( 'activate_plugins' ) ) { return; }

check_admin_referer( 'bulk-plugins' );

// If uninstall, not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}