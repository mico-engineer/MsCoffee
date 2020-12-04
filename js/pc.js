$(function() {
	$(window).on('load scroll', function() {
		var scrollPos = $(this).scrollTop();
		if ( scrollPos > 100 ) {
			$('header').addClass('is-animation');
		} else {
			$('header').removeClass('is-animation');
        }
        var scrollPos = $(this).scrollTop();
		if ( scrollPos > 100 ) {
            $('#logo').addClass('mini');
        }else{
           $('#logo').removeClass('mini');
        }
    

        $('.fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 200){
                $(this).css('opacity','1');
                $(this).css('transform','translateY(0)');
            }
        });
        $('.fadein2').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 200){
                $(this).css('opacity','1');
                $(this).css('transform','translateY(0)');
                $(this).delay(500 * i).fadeIn(1500);
            }
        });
    });
});

$(document).ready(function(){
    //topimageスライドショー
        $('.tes-right').slick({
            autoplay: true, //自動再生
            dots: false, //ドットのナビゲーションを表示
            infinite: true, //スライドのループ有効化
            speed: 4000, //切り替えのスピード（小さくすると速くなる）
            fade: true, //フェードの有効化
            arrows:false
        });
});
    
