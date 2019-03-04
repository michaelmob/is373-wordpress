<?php get_header(); ?>

<section class="section">
	<div class="container">
		<?php 
		if (have_posts()) {
			while (have_posts()) {
				the_post(); 
				include('post.php');
			}
		}
		else {
			esc_html_e('Sorry, no posts matched your criteria.');
		}
		?>
	</div>
</section>

<?php get_footer(); ?>
