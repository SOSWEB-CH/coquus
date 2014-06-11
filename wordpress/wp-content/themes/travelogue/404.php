<?php get_header(); ?>

<div id="mainContainer">

<?php get_sidebar(); ?>

	<div id="content">
	
		<h3><?php __('Page Not Found', 'travelogue'); ?></h3>
		<p>You've stumbled upon what we call a 404 error, meaning that the specific page you requested (or thought you requested) simply doesn't exist. It's ethereal. Actually, it's not even that. It plain isn't here.</p>
		<p>Normally, if you clicked on a link from inside <?php bloginfo('name'); ?> then it is most likely my mistake, and I'd really appreciate it if you'd <a href="mailto:<?php bloginfo('admin_email'); ?>">let me know</a>. If you came from elsewhere, they most likely haven't updated their links in a while. Best of luck!</p>
		<hr />
		<p>Why don't you try searching for what you were looking for instead?</p>
		<div id="search"><?php include (TEMPLATEPATH . '/topsearchform.php'); ?></div>
	
	</div>
		
<?php get_footer(); ?>

</div>

</body>
</html>