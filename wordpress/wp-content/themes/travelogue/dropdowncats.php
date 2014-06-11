<h3><?php _e('Choose a Topic:', 'travelogue'); ?></h3>
<form action="<?php bloginfo('url'); ?>/" method="get">
<?php wp_dropdown_categories('order_by=name&show_count=1&hierarchical=1'); ?>
<input type="submit" name="submit" value="<?php _e('View', 'travelogue'); ?>" />
</form>