$(document).ready(function () {

    $(window).scroll(function () {
        var scrollfixed = $(this).scrollTop()
        if (scrollfixed > 0) {
            $(".main-header").addClass("fixed")
        } else {
            $(".main-header").removeClass("fixed")
        }
    });

    $(".banner-slider").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 10000,
        dots: false,
        arrows: true,
    });

    $(".about-slider").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        fade: true
    });

    $(".product_slider").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
    });

    $(".footer-slider").slick({
        slidesToShow: 2,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
    });

    $(".products_speci_slider").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
    });

    $(".c1_slider").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
    });

    // $('input,textarea').val("");
    // $('.contact-us_index input, .contact-us_index textarea').focusin(function () {
    //     $(this).addClass('has-value');
    // });
    
    // $('.contact-us_index input, .contact-us_index textarea').focusout(function () {
    //     var text_val = $(this).val();
    //     if (text_val === "") {
    //         $(this).removeClass('has-value');
    //     } else {
    //         $(this).addClass('has-value');
    //     }
    // });

});


