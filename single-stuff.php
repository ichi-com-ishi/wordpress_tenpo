<?php get_header(); ?>
<div class="container">

<?php custom_breadcrumb(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<article id="article">


  <h2><?php the_title(); ?></h2>
  <p><?php echo get_post_meta($post->ID, 'stuff_type', true); ?></p>
  <p><?php echo get_post_meta($post->ID, 'stuff_time', true); ?></p>
  <p><?php echo get_post_meta($post->ID, 'stuff_price', true); ?></p>
  <p><?php echo get_post_meta($post->ID, 'stuff_info', true); ?></p>


</article><!-- /#article -->

<?php endwhile; ?>
<?php else : ?>

<?php endif; ?>

</div><!-- container -->

<?php get_footer(); ?>
