<?php
/*
Plugin Name: Reorder Entry Images
Plugin URI:  http://vayu.dk/reorder-entry-images/
Description: This will get all the attachments that belong to a post or a page and display them in a list. This list can be reordered by drag and drop.
Version:     1.0.5
Author:      Vayu Robins
Author URI:  http://vayu.dk/
Text Domain: reorder-entry-images
License:     GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

/**
 * The Reorder Entry Images plugin.
 *
 * This will get all the attachments that belong to a post or a page and display them in a list. This list can be reordered by drag and drop.
 *
 * @package   ReorderEntryImages
 * @author    Vayu Robins <v@vayu.dk>
 * @license   GPL-2.0+
 * @link      http://vayu.dk/reorder-entry-images/
 * @copyright 2013 Vayu Robins
 *
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-reorder-entry-images.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'ReorderEntryImages', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'ReorderEntryImages', 'deactivate' ) );
ReorderEntryImages::get_instance();