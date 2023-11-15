$(document).ready(function () {

    $(window).scroll(function () {
        var scrollfixed = $(this).scrollTop()
        if (scrollfixed > 0) {
            $(".main-header").addClass("fixed")
        } else {
            $(".main-header").removeClass("fixed")
        }
    });

    $(".pull_mob_nav").click(function () {
        $(".nav-last").slideToggle("slow");
    });
    $(window).resize(function () {
        if ($(this).width() > 992) {
            $(".nav-last").removeAttr("style")
        }
    });

    $('.menu-dropdown > a').click(function(e) {
        e.preventDefault()
        var winwidth = $(window).width();
        if(winwidth < 992){
            if($(this).parent("li").hasClass("sub-active")){
                $(this).parent("li").find("ul").slideUp(0)
                $(this).parent("li").removeClass("sub-active")
            }else{
                $(".menu-dropdown").removeClass("sub-active")
                $(".menu-dropdown").find("ul").slideUp(0)         
                $(this).parent("li").find("ul").slideDown(0)
                $(this).parent("li").addClass("sub-active")
            }
            
        }
    });
    
    $(window).resize(function () {
        if ($(this).width() > 992) {
            $('.sub-menu').removeAttr("style")
        }
    })

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
        autoplaySpeed: 8000,
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
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    $(".footer-slider").slick({
        slidesToShow: 2,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 586,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    $(".products_speci_slider").slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 586,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    $(".c1_slider").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: false,
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


