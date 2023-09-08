
jQuery(document).ready(function ($) {

    $('body').on('click', '.menu-hamburger__wrapper', function () {
        $(this).toggleClass('active');
        $('.menu-principal__wrapper').toggleClass('active');
    });


    $('.lista-solucoes').slick({
        centerMode: true,
        lazyLoad: 'ondemand',
        centerPadding: '0',
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 4000,
                settings: "unslick"
            },
            {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                    centerMode: true,
                    dots: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 960,
                settings: {
                    arrows: false,
                    centerMode: true,
                    dots: true,
                    centerPadding: '0px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    dots: true,
                    centerPadding: '90px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    dots: true,
                    centerMode: true,
                    centerPadding: '45px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.lista-unidades').slick({
        centerMode: false,
        lazyLoad: 'ondemand',
        centerPadding: '0',
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 4000,
                settings: "unslick"
            },
            {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                    dots: true,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    dots: true,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    dots: true,
                    centerMode: false,
                    centerPadding: '20px',
                    slidesToShow: 1
                }
            }
        ]
    });

});