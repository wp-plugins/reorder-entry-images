<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   ReorderEntryImages
 * @author    Vayu Robins <v@vayu.dk>
 * @license   GPL-2.0+
 * @link      http://vayu.dk/reorder-entry-images/
 * @copyright 2013 Vayu Robins
 */
?>
<div class="wrap">
	<?php screen_icon(); ?>
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<div class="form-wrap" style="float:left;">
		<form method="post" action="options.php">
			<?php settings_fields( 'rei_the_settings_group' ); ?>
			<?php do_settings_sections( $this->plugin_slug ); ?>
			<?php do_meta_boxes( $this->plugin_slug, 'main', 'rei-options'); ?>
			<?php submit_button(); ?>
		</form>
	</div>

	<div class="metabox-holder" style="float:right; width: 32%;">

		<div class="post-box-container column-2 side">
			<div id="side-sortables" class="meta-box-sortables">
				<div id="members-donate" class="postbox">
					<div class="handlediv" title="<?php echo esc_attr__('Click to toggle'); ?> '"><br /></div>
					<h3 class='hndle'><span>About this plugin</span></h3>
					<div class="inside">
						<a href="http://wordpress.org/extend/plugins/reorder-entry-images" title="Reorder entry images on the WordPress plugin repository">Please give the plugin a good rating.</a>
						<p><strong>Version:</strong> <?php echo $this->version; ?></p>
						<p><strong>Author:</strong> <a href="http://vayu.dk/reorder-entry-images/" title="Vayu Robins" target="_blank">Plugin home page.</a></p>
						<p><strong>Description:</strong> Get all the attachments (images only) that belong to a post or a page and display them in a list. This list can be reordered by drag and drop.</p>
						<p><strong>Feedback:</strong> Please got the <a href="http://wordpress.org/support/plugin/reorder-entry-images">Wordpress.org support forum</a> for feedback or support questions.</p>
						<p>
							<strong>Insert images into post/page with this shortcode:</strong> <code>[list_attached_images]</code><br>
							<p>Her are some parameters</p>
							<ul>
								<li><strong>imagesize:</strong> ie. thumbnail, medium, large</li>
								<li><strong>numberimages:</strong> ie. -1, 0, 5</li>
								<li><strong>imagelink:</strong> link to the image file - false/true</li>
								<li><strong>order:</strong> ie. desc, asc</li>
								<li><strong>listclass:</strong> use your own class</li>
							</ul>
							Example:

							<code>[list_attached_images imagesize="large" numberimages="3" imagelink="true" order="asc" listclass="my-images"]</code>
						</p>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>