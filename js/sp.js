$(function(){
    //メニューバー

    $('#nav-toggle,#global-navi').on('click',function() {
        $('#global-navi').toggleClass('open');
    });

    $(window).on('load scroll', function() {
        var scrollPos = $(this).scrollTop();
        if ( scrollPos > 100 ) {
            $('header').addClass('is-animation');
        } else {
            $('header').removeClass('is-animation');
        }
        var scrollPos = $(this).scrollTop();
        if ( scrollPos > 100 ) {
            $('#sp-logo').addClass('mini');
        }else{
           $('#sp-logo').removeClass('mini');
        }
    });

    $('#global-navi a[href]').on('click', function(event) {
        $('#nav-toggle').trigger('click');
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