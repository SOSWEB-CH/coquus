<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<h3><?php _e('Search ', 'travelogue'); ?> <?php bloginfo('name'); ?>:</h3>
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="<?php _e('Search', 'travelogue'); ?>" />
</form>