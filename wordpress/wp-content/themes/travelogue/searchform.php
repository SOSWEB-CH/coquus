<?php /* This file looks weird because it is kind of hacked out to display correctly,
         otherwise WordPress doesn't spit out the right tags, kind of a pain. */ ?>
	<div class="boxhead">
		<h3><?php _e('Search Site:', 'travelogue'); ?></h3>
	</div>
</div>
<div class="boxbody_cont">
	<div class="boxbody">
		<form method="get" id="s-searchform" action="<?php bloginfo('url'); ?>/">
			<input type="text" value="<?php the_search_query(); ?>" name="s" id="s-s" />
			<input type="submit" id="s-searchsubmit" value="<?php _e('Search', 'travelogue'); ?>" />
		</form>
<?php /* Right here is where we would normally close two div tags that were opened. However, those tags
		are somehow automatically getting inserted later, probably by WordPress itself. Leaving them out fixes it. */ ?>
