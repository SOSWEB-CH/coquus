<?php get_header(); ?>

<div id="mainContainer">

<?php get_sidebar(); ?>

	<div id="content">
		
	<?php include (TEMPLATEPATH . '/right_column.php'); ?>
	<!--<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('Mini Sidebar (Right)') ) : ?>No Sidebar Defined<?php endif; ?>-->

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post">
				<div class="post_head">
					<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'travelogue'), get_the_title())?>"><?php the_title(); ?></a></h2>
					<p class="postmetadata"><?php edit_post_link(__('Edit', 'travelogue'),'<strong>(',')</strong>'); ?></p> 
				</div>
				
				<div class="entry">
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</div>
				
				<div class="comments">
					<p style="font-weight:bold;text-align:right;"><?php comments_popup_link(__('Start discussion &#187;', 'travelogue'),
																							  __('1 Comment &#187;', 'travelogue'),
																							  __ngettext ('% comment &#187;', '% comments &#187;', get_comments_number (), 'travelogue')); ?></p>
					<?php comments_template(); ?>
				</div>
				<!--
				<?php trackback_rdf(); ?>
				-->
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php posts_nav_link('','',__('&laquo; Earlier Entries', 'travelogue')) ?></div>
			<div class="alignright"><?php posts_nav_link('',__('Newer Entries &raquo;', 'travelogue'),'') ?></div>
		</div>
		
	<?php else : ?>

		<h2 class="center"><?php _e('Not Found.', 'travelogue'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn\'t here.', 'travelogue'); ?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
	
	</div>
		
<?php get_footer(); ?>

</div>

</body>
</html>