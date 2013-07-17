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
	<div class="form-wrap">
		<form method="post" action="options.php">
			<?php //settings_fields( 'reorder_entry_images_options' ); ?>
			<?php settings_fields( 'rei_the_settings_group' ); ?>
			<?php do_settings_sections( $this->plugin_slug ); ?>
			<?php submit_button(); ?>
		</form>
	</div>
</div>