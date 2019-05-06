<?php
/* Template Name: BLOGPage */
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
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
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
				</section>
				<!--news-->

				<div class="pagenav">
					<ul>
						<li>
							<span><a href="">1</a></span>
						</li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</div>
			</div>
			<!-- container -->
<?php get_footer(); ?>

<?php get_footer(); ?>
