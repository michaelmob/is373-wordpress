<?php get_header(); ?>

<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-four-fifths">
				<?php 
				if (have_posts()) {
					while (have_posts()) {
						the_post(); 
						get_template_part('post', get_post_format());
					}
				}
				else {
					esc_html_e('Sorry, no posts matched your criteria.');
				}
				?>
			</div>
			<div class="column">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
