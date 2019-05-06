<?php
/*
 Template Name: blogテンプレート
 */
?>
<?php get_header(); ?>
<div class="container">
<?php custom_breadcrumb(); ?>
<section id="news">
<div class="center">
<h2 class="heading"><?php the_title(); ?></h2>
</div>
<div class="flex-col3">
<?php
$paged     = (int) get_query_var( 'paged' );
$args      = array(
	'posts_per_page' => 6,
	'paged'          => $paged,
	'orderby'        => 'post_date',
	'order'          => 'DESC',
	'post_type'      => 'post',
	'post_status'    => 'publish',
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		?>
	<div id="post-<?php the_ID(); ?>" <?php post_class( 'item flex-child linkbox' ); ?>>
	<div class="item-image trimming">
		<?php the_post_thumbnail( 'thumbnail', array( 'class' => 'photo' ) ); ?>
	</div>
<div class="item-text bold">
		<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>"></a>
</div>
</div>
		<?php
		endwhile;
	endif;
?>
</div>
</section><!--news-->
<div class="pagenav">
<?php
if ( $the_query->max_num_pages > 1 ) {
	echo paginate_links(
		array(
			'base'    => get_pagenum_link( 1 ) . '%_%',
			'format'  => 'page/%#%/',
			'current' => max( 1, $paged ),
			'total'   => $the_query->max_num_pages,
		)
	);
}
?>
</div><!-- pagenav -->
</div><!-- container -->
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>
