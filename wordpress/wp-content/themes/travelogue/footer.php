<div id="footer">
	<p>
		<?php printf(__('%s running on <a href="http://wordpress.org">WordPress</a>.', 'travelogue'), get_bloginfo('name')); ?>
		<br /><?php _e('Using the <a href="http://www.podq.com/travelogue/">Travelogue</a> Theme by <a href="http://www.podq.com/">Joshua Lyman</a>.', 'travelogue'); ?>
		<br /><?php printf(__('RSS: <a href="feed:%s">Entries</a> &amp; <a href="feed:%s">Comments</a>.', 'travelogue'), get_bloginfo('rss2_url'), get_bloginfo('comments_rss2_url')); ?>
		<br /><?php printf(__('Atom: <a href="feed:%s">Entries</a>.', 'travelogue'), get_bloginfo('atom_url')); ?>
		<!-- <?php echo $wpdb->num_queries; ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
	<?php do_action('wp_footer'); ?>
</div>

</div>