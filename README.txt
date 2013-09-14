=== Reorder Entry Images ===
Contributors: Vayu
Tags: attachments, images, reorder, sort, entry, post, custom post types, page, drag & drop
Requires at least: 3.4
Tested up to: 3.6.1
Stable tag: 1.0.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Get all the attachments (images only) that belong to a post or a page and display them in a list. This list can be reordered by drag and drop.

== Description ==

This plugin will help you manually reorder or sort the images attached to your post, custom post type or page.  Once installed and activated you can choose which post type or page you want this functionality on.  All the images attached to that specific post or page will then be listed on the post-edit page in the admin.  You will then be able to drag & drop the images in the order you want them to be listed.

This will only affect those images uploaded to the specific post or page.

Here is the php code that will help you display the images in your theme:

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

Insert images into post/page with this shortcode: `[list_attached_images]`
Her are some parameters

* imagesize: ie. thumbnail, medium, large
* numberimages: ie. -1, 0, 5
* imagelink: link to the image file - false/true
* order: ie. desc, asc
* listclass: use your own class

Example:
`[list_attached_images imagesize="large" numberimages="3" imagelink="true" order="asc" listclass="my-images"]`

== Website ==
http://vayu.dk/reorder-entry-images/

== Installation ==

1. Upload `reorder-entry-images` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Settings->Reorder images and choose which post type or page to use this.

== Frequently Asked Questions ==

= When change the image order, nothing happens? =

Please remember to save the changes by pressing the Update button.

== Screenshots ==

1. Drag & drop your images in the order you choose.
2. Settings page - set which post type or page to use this.

== Changelog ==

= 1.0.2 =
* Added shortcode, to add images to your post/page.
* Updated settings page with som information about the plugin and author.

= 1.0.1 =
* Fixed minor bug

= 1.0 =
* Launch first version of plugin.