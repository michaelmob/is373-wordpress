
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section class="hero is-info">
	<div class="hero-body">
		<div class="container">
			<!-- Title -->
			<?php $blog_info = get_bloginfo('name'); ?>
			<?php if (!empty($blog_info)): ?>
				<h1 class="title is-1">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?php bloginfo('name'); ?>
					</a>
				</h1>
			<?php endif; ?>

			<!-- Description -->
			<?php $description = get_bloginfo('description', 'display'); ?>
			<?php if ($description || is_customize_preview()): ?>
				<p class="subtitle">
					<?php echo $description; ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
</section>


<!-- Menu -->
<?php if (has_nav_menu('menu-1')): ?>
	<nav id="site-navigation" class="main-navigation">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_class'     => 'main-menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			)
		);
		?>
	</nav>
<?php endif; ?>

<!-- Social Navigation -->
<?php if (has_nav_menu('social')): ?>
	<nav class="social-navigation">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'social',
				'menu_class'     => 'social-links-menu',
				'link_before'    => '<span class="screen-reader-text">',
				'depth'          => 1,
			)
		);
		?>
	</nav>
<?php endif; ?>
