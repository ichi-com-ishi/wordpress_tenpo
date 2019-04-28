<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="format-detection" content="telephone=no" />
		<title><?php bloginfo( 'name' ); ?></title>
		<meta
			name="description"
			content="ホームセンタームサシのホームページ。わくわくするほど新しい発見がある。なんでも揃う「ホームセンタームサシ」「スーパーセンタームサシ」、アート＆クラフト専門店「アークオアシスデザイン」、高級食材をリーズナブルな価格で提供する大型食品スーパー「ムサシ食品館」など、個性豊かな事業・店舗を当社開発の大型ショッピングゾーンで展開しています。"
		/>
		<meta
			name="keywords"
			content="ホームセンター,スーパーセンター,ムサシ,アークランドサカモト,アークランド,アークオアシス,ムサシ食品館,アークスタイル,アークドラッグ,営業時間,DIY,日用品,金物,建材,新潟県,山形県,富山県,石川県,宮城県,京都府,大阪府,兵庫県,チラシ,長野県,福井県,ムサシプロ"
		/>
		<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common/reset.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common/common.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common/sp.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common/slick.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common/slick-theme.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common/zdo_drawer_menu.css" />
	</head>

	<body>
		<div class="wrapper">
			<header id="header">
				<div class="header_top">
					<h1 class="logo">
						<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logp.png" alt="ムサシロゴ"/></a>
					</h1>
					<!-- ▼drawer▼ -->
					<div class="zdo_drawer_menu">
						<div class="zdo_drawer_bg"></div>
						<button type="button" class="zdo_drawer_button">
							<span class="zdo_drawer_bar zdo_drawer_bar1"></span>
							<span class="zdo_drawer_bar zdo_drawer_bar2"></span>
							<span class="zdo_drawer_bar zdo_drawer_bar3"></span>
						</button>
						<nav class="zdo_drawer_nav_wrapper">
							<ul class="zdo_drawer_nav">
								<li>
									<a href="<?php echo home_url(); ?>">
										ホーム
									</a>
								</li>
								<li>
									<a href="news/index.html">
										お知らせ
									</a>
								</li>
								<li>
									<a href="flyer/index.html">
										最新チラシ
									</a>
								</li>
								<li>
									<a href="shop/index.html">
										店舗情報
									</a>
								</li>
								<li>
									<a href="guide/index.html">
										売場案内
									</a>
								</li>
								<li>
									<a href="http://www.arcland.co.jp/">
										企業情報
									</a>
								</li>
							</ul>
						</nav>
					</div>
					<!-- ▲drawer▲ -->
				</div>
				<h2 class="bold">毎日のくらしを彩り豊かに</h2>
				<!-- ▼slider▼ -->
				<div class="keyvisual slider">
					<div><img src="<?php echo get_template_directory_uri(); ?>/images/top/top-keyvisual.jpg" alt="トップキービジュアル" /></div>
				</div>
				<!-- ▲slider▲ -->
			</header>
			<!-- header -->
			<div class="container">
				<div class="nav_wrapper">
					<nav>
						<ul class="flex">
							<li><a href="<?php echo home_url(); ?>">ホーム</a></li>
							<li><a href="news/index.html">お知らせ</a></li>
							<li><a href="flyer/index.html">最新チラシ</a></li>
							<li><a href="shop/index.html">店舗情報</a></li>
							<li><a href="guide/index.html">売場案内</a></li>
							<li><a href="http://www.arcland.co.jp/">企業情報</a></li>
						</ul>
					</nav>
				</div>

				<section id="news">
					<div class="center">
						<h2 class="heading_h2">NEWS</h2>
					</div>
					<div class="flex-col3">
						<div class="item flex-child linkbox">
							<div class="item-image trimming"><img class="photo" src="<?php echo get_template_directory_uri(); ?>/images/common/news-6.jpg" /></div>
							<div class="item-text">
								<p class="bold">ダイニチファンヒーターキャンペ ーンは11月5日まで！</p>
								<a href="#"></a>
							</div>
						</div>
						<div class="item flex-child linkbox">
							<div class="item-image trimming"><img class="photo" src="<?php echo get_template_directory_uri(); ?>/images/common/news-5.jpg" /></div>
							<div class="item-text">
								<p class="bold">バラ苗予約開始しました！カタロ グ配布は店頭にて。</p>
								<a href="news/article/index.html"></a>
							</div>
						</div>
						<div class="item flex-child linkbox">
							<div class="item-image trimming"><img class="photo" src="<?php echo get_template_directory_uri(); ?>/images/common/news-4.png" /></div>
							<div class="item-text">
								<p class="bold">花王の超得フェア開催中。</p>
								<a href="#"></a>
							</div>
						</div>
						<div class="item flex-child linkbox">
							<div class="item-image trimming"><img class="photo" src="<?php echo get_template_directory_uri(); ?>/images/common/news-3.jpg" /></div>
							<div class="item-text">
								<p class="bold">収納ボックス『カバコ』シリーズは インテリアにも馴染みます。</p>
								<a href="#"></a>
							</div>
						</div>
						<div class="item flex-child linkbox">
							<div class="item-image trimming">
								<img class="photo" src="<?php echo get_template_directory_uri(); ?>/images/common/news-2.jpg" />
							</div>
							<div class="item-text">
								<p class="bold">そろそろ冬準備。タイヤ交換はお 済みですか？</p>
								<a href="#"></a>
							</div>
						</div>
						<div class="item flex-child linkbox">
							<div class="item-image trimming"><img class="photo" src="<?php echo get_template_directory_uri(); ?>/images/common/news-1.jpg" /></div>
							<div class="item-text">
								<p class="bold">ペットのあったかグッズ。おすす め商品を紹介します。</p>
								<a href="#"></a>
							</div>
						</div>
					</div>
				</section>
				<!--news-->

				<div class="next">
					<p>
						<a href="#"> &gt;&gt;続きをもっと見る</a>
					</p>
				</div>

				<section id="contens">
					<div class="center">
						<h2 class="heading_h2">CONTENS</h2>
					</div>
					<div class="flex-col4">
						<div class="flex-child contens_box">
							<a href="flyer/index.html">
								<div class="bgDark">
									<img src="<?php echo get_template_directory_uri(); ?>/images/top/contens_flyer.jpg" alt="" />
								</div>
								<h3 class="contens_box_heading">FLYER</h3>
								<p class="contens_box_text">最新チラシ</p>
							</a>
						</div>

						<div class="flex-child contens_box">
							<a href="shop/index.html">
								<div class="bgDark">
									<img src="<?php echo get_template_directory_uri(); ?>/images/top/contens_shop.jpg" alt="" />
								</div>
								<h3 class="contens_box_heading">SHOP</h3>
								<p class="contens_box_text">店舗情報</p>
							</a>
						</div>
						<div class="flex-child contens_box">
							<a href="guide/index.html">
								<div class="bgDark">
									<img src="<?php echo get_template_directory_uri(); ?>/images/top/contens_guide.jpg" alt="" />
								</div>
								<h3 class="contens_box_heading">GUIDE</h3>
								<p class="contens_box_text">売場案内</p>
							</a>
						</div>
						<div class="flex-child contens_box">
							<a href="https://www.arcland.shop/">
								<div class="bgDark">
									<img src="<?php echo get_template_directory_uri(); ?>/images/top/contens_online-shop.jpg" alt="" />
								</div>
								<h3 class="contens_box_heading">ONLINE SHOP</h3>
								<p class="contens_box_text">オンラインショップ</p>
							</a>
						</div>
					</div>
				</section>
				<!--contens-->

				<section id="holdings">
					<div class="center">
						<h2 class="heading_h2">HOLDINGS</h2>
					</div>
					<div class="flex-col3">
						<div class="flex-child holdings_box">
							<a href="http://nicopet.jp/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-pet.jpg" alt="" />
								<div class="holdings_box_text">
									<h3>ペット専門店</h3>
									<p>ニコペット</p>
								</div>
							</a>
						</div>
						<div class="flex-child holdings_box">
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-pro.jpg" alt="" />
								<div class="holdings_box_text">
									<h3 class="">TOOL&リフォーム</h3>
									<p>ムサシプロ・住DEPOT</p>
								</div>
							</a>
						</div>
						<div class="flex-child holdings_box">
							<a href="http://arc-style.jp/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-style.jpg" alt="" />
								<div class="holdings_box_text">
									<h3 class="">リフォーム&エクステリア</h3>
									<p>アークスタイル</p>
								</div>
							</a>
						</div>
						<div class="flex-child holdings_box">
							<a href="http://arc-oasis.com/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-oasis.jpg" alt="" />
								<div class="holdings_box_text">
									<h3 class="">アート&クラフト専門店</h3>
									<p>アークオアシス</p>
								</div>
							</a>
						</div>
						<div class="flex-child holdings_box">
							<a href="http://www.arcdrug.co.jp/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-drag.jpg" alt="" />
								<div class="holdings_box_text">
									<h3 class="">ドラッグストア・ヘルスケア</h3>
									<p>アークドラッグ</p>
								</div>
							</a>
						</div>
						<div class="flex-child holdings_box">
							<a href="http://www.arcland.co.jp/">
								<img src="<?php echo get_template_directory_uri(); ?>/images/top/holdings-sakamoto.jpg" alt="" />
								<div class="holdings_box_text">
									<p>アークランドサカモト</p>
								</div>
							</a>
						</div>
					</div>
				</section>
				<!--holdings-->
			</div>
			<!-- container -->

			<footer id="footer">
				<div class="flex">
					<div>
						<dl>
							<dt class="bold"><a href="shop/">SHOP</a></dt>
							<dd><a href="shop/#miyagi">宮城県</a></dd>
							<dd><a href="shop/#yamagata">山形県</a></dd>
							<dd><a href="shop/#nigata">新潟県</a></dd>
							<dd><a href="shop/#toyama">富山県</a></dd>
							<dd><a href="shop/#ishikawa">石川県</a></dd>
							<dd><a href="shop/#fukui">福井県</a></dd>
							<dd><a href="shop/#nagano">長野県</a></dd>
							<dd><a href="shop/#kyoto">京都府</a></dd>
							<dd><a href="shop/#osaka">大阪府</a></dd>
							<dd><a href="shop/#hyogo">兵庫県</a></dd>
						</dl>
					</div>
					<div>
						<dl>
							<dt class="bold"><a href="guide/">GUIDE</a></dt>
							<dd><a href="#">ホームセンター</a></dd>
							<dd><a href="guide/shizai/">建築資材</a></dd>
							<dd><a href="#">工具・金物</a></dd>
							<dd><a href="#">塗料・塗料用品</a></dd>
							<dd><a href="#">インテリア・収納</a></dd>
							<dd><a href="#">家庭用品・日用品</a></dd>
							<dd><a href="#">家電・照明</a></dd>
							<dd><a href="#">ガーデンセンター</a></dd>
							<dd><a href="#">ペットセンター</a></dd>
							<dd><a href="#">ムサシプロ</a></dd>
							<dd><a href="#">ムサシ食品館</a></dd>
						</dl>
					</div>
					<div>
						<dl>
							<dt class="bold"><a href="http://www.arcland.co.jp/">HOLDINGS</a></dt>
							<dd><a href="http://nicopet.jp/">ニコペット</a></dd>
							<dd><a href="#">ムサシプロ／住DEPOT</a></dd>
							<dd><a href="http://arc-oasis.com/">ARC OASIS</a></dd>
							<dd><a href="http://arc-style.jp/">アークスタイル</a></dd>
							<dd><a href="http://www.arcdrug.co.jp/">アークドラッグ</a></dd>
							<dd><a href="https://www.arcland.shop/">オンラインショップ</a></dd>
						</dl>
					</div>
					<div>
						<dl>
							<dt class="bold"><a href="http://www.arcland.co.jp/">COMPANY</a></dt>
							<dd><a href="http://www.arcland.co.jp/">アークランドサカモト</a></dd>
							<dd><a href="#">プライバシーポリシー</a></dd>
						</dl>
					</div>
				</div>
				<p>
					<small>Copyright © 2018 ARCLAND SAKAMOTO CO.,LTD. ALL RIGHTS RESERVED.</small>
				</p>
			</footer>
			<!--footer-->
		</div>
		<!-- wrapper -->
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/zdo_drawer_menu.js"></script>
		<!-- <script src="js/func_slick.js"></script> -->
	</body>
</html>
