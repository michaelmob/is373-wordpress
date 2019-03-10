<div class="box">
	<div class="content">
		<div class="title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</div>

		<?php the_content(); ?>

		<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
	</div>
</div>
