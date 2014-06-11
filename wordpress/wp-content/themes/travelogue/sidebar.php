<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('Main Sidebar (Left)') ) : ?>

	<div class="boxhead_cont">
		<div class="boxhead"><h3><?php _e('Author', 'travelogue'); ?></h3></div>
	</div>
	<div class="boxbody_cont">
		<div class="boxbody"><ul><li>Hello! My name is --- and I love <a href="http://www.wordpress.org/">WordPress</a>!</li></ul></div>
	</div>
	
	<div class="boxhead_cont">
		<div class="boxhead"><h3><?php _e('Pages', 'travelogue'); ?></h3></div>
	</div>
	<div class="boxbody_cont">
		<div class="boxbody">
		<ul>
			<?php wp_list_pages('title_li='); ?>
		</ul>
		</div>
	</div>

	<div class="boxhead_cont">
		<div class="boxhead"><h3><?php _e('Archives', 'travelogue'); ?></h3></div>
	</div>
	<div class="boxbody_cont">
		<div class="boxbody">
		<form name="archiveform" action="" style="margin:0;padding:5px;">
		<select name="archive_chrono" onchange="window.location = (document.forms.archiveform.archive_chrono[document.forms.archiveform.archive_chrono.selectedIndex].value);">
		<option value=''><?php _e('By Month', 'travelogue'); ?></option>
		<option value='<?php bloginfo('url'); ?>/archives/'>- <?php _e('Browse Entire Archive -', 'travelogue'); ?></option>
		<?php wp_get_archives('format=option'); ?>
		</select>
		</form>
		</div>
	</div>
	
	<div class="boxhead_cont">
		<div class="boxhead"><h3><?php _e('Calendar', 'travelogue'); ?></h3></div>
	</div>
	<div class="boxbody_cont">
		<div class="boxbody"><?php get_calendar(2); ?></div>
	</div>

	<div class="boxhead_cont">
		<div class="boxhead"><h3><?php _e('Links', 'travelogue'); ?></h3></div>
	</div>
	<div class="boxbody_cont">
		<div class="boxbody">
		<ul>
			<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
		</ul>
		</div>
	</div>
	
	<div class="boxhead_cont">
		<div class="boxhead"><h3><?php _e('Meta', 'travelogue'); ?></h3></div>
	</div>
	<div class="boxbody_cont">
		<div class="boxbody">
		<ul>
			<?php wp_register(); ?>
			<li><?php wp_loginout(); ?></li>
			<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
			<li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.', 'travelogue'); ?>">WordPress</a></li>
			<?php wp_meta(); ?>
		</ul>
		</div>
	</div>
	
	<?php if (function_exists('wp_theme_switcher')) { ?>
		<div class="boxhead_cont">
			<div class="boxhead"><h3><?php _e('Themes', 'travelogue'); ?></h3></div>
		</div>
		<div class="boxbody_cont">
			<div class="boxbody"><?php wp_theme_switcher(); ?></div>
		</div>
	<?php } ?>
	
	<?php endif; ?>
</div>