
$( function() {
	$( '.slider' ).slick({
		arrrows: true,
		dots: true, // スライダー下部に表示される、ドット状のページネーション
		autoplay: true, //自動再生あり
		autoplaySpeed: 5000, //自動再生でのスライダー切替スピード5000ms(5秒)
		fade: true, //切り替えをフェードで行うかどうか
		infinite: true, //最後のスライドの次に最初のスライドを表示し、無限にスライドできるようにするか否か
		speed: 2500, //フェードのスピード2500ms(2,5秒)
		cssEase: 'cubic-bezier(.645, .045, .355, 1)'
	});
});
