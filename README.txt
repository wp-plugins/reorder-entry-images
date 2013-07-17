=== Reorder Entry Images ===
Contributors: Vayu Robins
Tags: attachments, images, reorder, sort, entry, post, custom post types, page
Requires at least: 3.4
Tested up to: 3.5.3
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Get all the attachments (images only) that belong to a post or a page and display them in a list. This list can be reordered by drag and drop.

== Description ==

This plugin will help you manually reorder or sort the images attached to your post, custom post type or page.  Once installed and acivated you can choose which post type or page you want this functionality on.  All the images attached to that specific post or page will then be listed on the post-edit page in the admin.  You will then be able to drag & drop the images in the order you want them to be listed.

This will only affect those images uploaded to the specific post or page.

Here is the php code to get the images in your theme:

`$thumb_id = get_post_thumbnail_id( get_the_ID() );
$args = array(
	'post_type' => 'attachment',
	'post_mime_type'  => 'image/jpeg',
	'orderby' => 'menu_order',
	'numberposts' => -1,
	'order' => 'ASC',
	'post_parent' => get_the_ID(),
	'exclude' => $thumb_id // Exclude featured thumbnail
); 
$attachments = get_posts($args);
if ( $attachments ) :
	foreach ( $attachments as $attachment ) :
		echo wp_get_attachment_image( $attachment->ID, 'full' );	
	endforeach;	
endif;`

== Website ==
http://vayu.dk/reorder-entry-images/

== Installation ==

1. Upload `reorder-entry-images` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Settings->Reorder images and choose which post type or page to use this.


== Screenshots ==

1. Drag & drop your images in the order you choose.
2. Settings page - set which post type or page to use this.

== Changelog ==

= 1.0 =
* Launch first version of plugin.