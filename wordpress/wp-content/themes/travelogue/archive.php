<?php get_header(); ?>

<div id="mainContainer">

<?php get_sidebar(); ?>

	<div id="content">
	
	<?php if (have_posts()) : ?>
	
	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle"><?php printf(__('Archive for the &#8216;%s&#8217; Category', 'travelogue'), single_cat_title('', false));?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle"><?php printf(__('Posts Tagged &#8216;%s&#8217;', 'travelogue'), single_tag_title('', false)); ?></h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for ', 'travelogue'); ?> <?php the_time(__('F jS, Y', 'travelogue')); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for ', 'travelogue'); ?> <?php the_time(__('F, Y', 'travelogue')); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for ', 'travelogue'); ?> <?php the_time(__('Y', 'travelogue')); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle"><?php _e('Author Archive', 'travelogue'); ?></h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle"><?php _e('Blog Archives', 'travelogue'); ?></h2>
 	  <?php } ?>
		
		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post">
				<div class="post_cal">
					<?php 
						$postraw = the_date('D, j, M, y', '', '', FALSE);
						if ($postraw != '') {
							$postdate = explode(', ', $postraw);
						} ?>
					<div class="dayname"><?php echo $postdate[0]; ?></div>
					<div class="daynum"><?php echo $postdate[1]; ?></div>
						<div class="month"><?php echo $postdate[2]; ?> '<?php echo $postdate[3]; ?></div>
						<?php /* You can make the full "2005" date go here by uncommenting 
								 this and the php code, and changing the_date function on line 13
								 to this:
									the_date('D, j, M, y', '', '', FALSE) */
								 //echo '<div class="year">'.$postdate[3].'</div>'; ?>
				</div>
				<div class="post_head">
					<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'travelogue'), get_the_title())?>"><?php the_title(); ?></a></h2>
					<p class="postmetadata"><?php printf(__("Part of %s's adventure in ", 'travelogue'), get_the_author()); ?> - (<a href="<?php comments_link(); ?>"><?php comments_number('0', '1', '%'); ?></a>) <?php the_tags(' | '.__('Tags:', 'travelogue').' ', ', ', ''); ?> <?php edit_post_link(__('Edit', 'travelogue'),'<strong> | (',')</strong>'); ?></p> 
				</div>
				
				<div class="entry">
					<?php the_excerpt(); ?>
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