<?php get_header(); ?>

<div id="contents">
<div id="main">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post">
<?php the_title(); ?>

<?php the_content(); ?>
</div><!-- /.post -->
<?php endwhile; ?>
<?php else : ?>

<?php endif; ?>
					
</div><!-- /#main -->
				
<?php get_sidebar(); ?>
<?php get_footer(); ?>