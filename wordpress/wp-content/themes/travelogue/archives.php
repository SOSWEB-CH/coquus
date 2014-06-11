<?php
/*
Template Name: Live Archives
*/
?>

<?php get_header(); ?>

<div id="mainContainer">

<?php get_sidebar(); ?>

	<div id="content">
	
		<h1 class="pagetitle"><?php _e('Browse the Archives', 'travelogue'); ?></h1>

		<?php include (TEMPLATEPATH . '/right_column.php'); ?>
		<!--<?php if ( !function_exists('dynamic_sidebar')
        	|| !dynamic_sidebar('Mini Sidebar (Right)') ) : ?>No Sidebar Defined<?php endif; ?>-->
		
		<h2><?php _e('Archives by Month:', 'travelogue'); ?></h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		
		<h2><?php _e('Archives by Subject:', 'travelogue'); ?></h2>
			<ul>
				 <?php wp_list_categories(); ?>
			</ul>
			
	</div>
		
<?php get_footer(); ?>

</div>

</body>
</html>