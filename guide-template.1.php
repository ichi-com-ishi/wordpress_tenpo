<?php
/*
Template Name: 売場案内下層ページテンプレート1
*/
?>
<?php get_header(); ?>
			<div class="container">
			<?php custom_breadcrumb(); ?>
				<article id="guide_article">
				<div class="center">
					<h2 class="heading"><?php the_title(); ?></h2>
				</div>
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						?>

						<?php the_content(); ?>
							
							<?php
						endwhile;
					endif;
				?>
						
					<section>
						<div class="shizai_table">
							<table>
								<tbody>
									<tr>
										<td><a href="<?php echo home_url(); ?>/shizai/">建築資材</a></td>
										<td><a href="<?php echo home_url(); ?>/wood/">木材</a></td>
										<td><a href="<?php echo home_url(); ?>/agriculture/">農業資材</a></td>
									</tr>
									<tr>
										<td><a href="<?php echo home_url(); ?>/tool/">工具・金物</a></td>
										<td><a href="<?php echo home_url(); ?>/paint/">塗料・塗装用品</a></td>
										<td><a href="<?php echo home_url(); ?>/interior/">インテリア・収納</a></td>
									</tr>
									<tr>
										<td><a href="<?php echo home_url(); ?>/yohin/">家庭用品・日用品</a></td>
										<td><a href="<?php echo home_url(); ?>/kaden/">家電・照明</a></td>
										<td><a href="<?php echo home_url(); ?>/garden/">ガーデンセンター</a></td>
									</tr>
									<tr>
										<td><a href="<?php echo home_url(); ?>/pet/">ペットセンター</a></td>
										<td><a href="<?php echo home_url(); ?>/sm/">ムサシ食品館</a></td>
										<td><a href="<?php echo home_url(); ?>/pro/">ムサシプロ／住DEPOT</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
				</article>
				<!-- guide_article -->
			</div>
			<!-- container -->
<?php get_header(); ?>
