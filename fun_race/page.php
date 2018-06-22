<?php get_header(); ?>
<body>
	<header>
		<?php get_template_part("template/menu"); ?>
	</header>
	<!-- BREADCRUMBS -->
	<?php get_template_part('template/breadcrumbs'); ?>
	<div id='page'>
		<div class='grid'>
			<div class='content'>
				<?php echo apply_filters( 'the_content', get_post()->post_content ); ?>
			</div>
		</div>
	</div>
	<?php get_template_part("template/partners-full"); ?>
<?php get_footer(); ?>