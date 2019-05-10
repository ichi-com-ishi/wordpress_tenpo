<?php
/*
 Template Name: ムサシ店舗テンプレート
 */
?>
<?php get_header(); ?>

<!-- <div id="contents">
<div id="main"> -->
<div class="container">

<?php custom_breadcrumb(); ?>

<?php if ( have_posts() ) : ?>
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<!-- <div id="main"> -->
					<!-- </div> -->
		<?php the_content(); ?>
		<!-- </div> -->
			<div class="flex-col3">
	
</div>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

</div><!-- container -->
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
