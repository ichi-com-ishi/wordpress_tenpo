<?php get_header(); ?>
			<div class="container">
			<?php custom_breadcrumb(); ?>
			<?php if ( have_posts() ) : ?>
				<?php
				while ( have_posts() ) :
					the_post();
					?>
				<article id="article">
					<div class="left">
						<?php the_content(); ?>
					</div>
				</article>
				<!--article-->
					<?php endwhile; ?>
				<?php else : ?>
			<?php endif; ?>
			</div>
			<!-- container -->
			<section id="area">
				<h3 class="area_heading center">開催店舗</h3>
				<div class="flex-col4">
					<div class="flex-child">
						<dl>
							<dt><a href="/shop/#miyagi/">宮城県</a></dt>
							<dd><a href="/shop/">仙台泉店</a></dd>
							<dd><a href="/shop/">名取店</a></dd>
						</dl>
						<dl>
							<dt><a href="/shop/#yamagata">山形県</a></dt>
							<dd><a href="#">遊佐店</a></dd>
							<dd><a href="#">酒田店</a></dd>
							<dd><a href="#">鶴岡店</a></dd>
							<dd><a href="#">天童店</a></dd>
							<dd><a href="#">南陽店</a></dd>
							<dd><a href="#">米沢店</a></dd>
						</dl>
					</div>
					<div class="flex-child">
						<dl>
							<dt><a href="#">新潟県</a></dt>
							<dd><a href="#">村上店</a></dd>
							<dd><a href="#">新発田コモ店</a></dd>
							<dd><a href="#">新潟店</a></dd>
							<dd><a href="#">新津店</a></dd>
							<dd><a href="#">新潟西店</a></dd>
							<dd><a href="#">三条店</a></dd>
							<dd><a href="#">見附店</a></dd>
							<dd><a href="#">長岡店</a></dd>
							<dd><a href="#">柏崎店</a></dd>
							<dd><a href="#">上越店</a></dd>
							<dd><a href="#">新井店</a></dd>
						</dl>
					</div>
					<div class="flex-child">
						<dl>
							<dt><a href="#">富山県</a></dt>
							<dd><a href="#">富山店</a></dd>
							<dd><a href="#">氷見店</a></dd>
							<dd><a href="#">高岡中曽根店</a></dd>
							<dd><a href="#">高岡駅南店</a></dd>
							<dd><a href="#">砺波店</a></dd>
						</dl>
						<dl>
							<dt><a href="#">石川県</a></dt>
							<dd><a href="#">金沢店</a></dd>
							<dd><a href="#">金沢南店</a></dd>
						</dl>
						<dl>
							<dt><a href="#">福井県</a></dt>
							<dd><a href="#">丸岡店</a></dd>
						</dl>
					</div>
					<div class="flex-child">
						<dl>
							<dt><a href="#">長野県</a></dt>
							<dd><a href="#">長野南店</a></dd>
							<dd><a href="#">上田店</a></dd>
						</dl>
						<dl>
							<dt><a href="#">京都府</a></dt>
							<dd><a href="#">京都八幡店</a></dd>
						</dl>
						<dl>
							<dt><a href="#">大阪府</a></dt>
							<dd><a href="#">貝塚店</a></dd>
							<dd><a href="#">美原店</a></dd>
						</dl>
						<dl>
							<dt><a href="#">兵庫県</a></dt>
							<dd><a href="#">姫路店</a></dd>
						</dl>
					</div>
				</div>
			</section>
<?php get_footer(); ?>
