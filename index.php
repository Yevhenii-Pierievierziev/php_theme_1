<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo(' charset '); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> 

	<div class="site-header">
		<h1><?php bloginfo( 'title' ); ?></h1>
		<?php wp_nav_menu( array(
			'them_location' => 'main',
			'menu_class' => 'nav',
			'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'deepth' => 1,
		));?>
	</div>

	<div class="site-content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>

	<div class="site-footer">
		<p>&copy; Все права защищены.</p>
	</div>
	<?php wp_footer(); ?>
</body>

</html>