
jQuery(document).ready(function ($) {

    $('body').on('click', '.menu-hamburger__wrapper', function () {
        $(this).toggleClass('active');
        $('.menu-principal__wrapper').toggleClass('active');
    });

    if ($('.lista-solucoes').length) {
        $('.lista-solucoes').slick({
            centerMode: true,
            lazyLoad: 'ondemand',
            centerPadding: '0',
            infinite: false,
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
    }

    if ($('.lista-unidades')) {
        $('.lista-unidades').slick({
            centerMode: false,
            lazyLoad: 'ondemand',
            centerPadding: '0',
            infinite: false,
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
    }

    $('[data-fancybox]').fancybox({
        'onComplete': function () {

        }
    });


    $('.slider-ano').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: false,
        asNavFor: '.slider-conteudo',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        adaptiveHeight: true,
        centerPadding: '150px',
        responsive: [
            {
                breakpoint: 1370,
                settings: {
                    centerPadding: '00px',
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    centerPadding: '100px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerPadding: '60px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerPadding: '0px',
                    slidesToShow: 3
                }
            }
        ]
    });

    $('.slider-conteudo').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        dots: true,
        adaptiveHeight: true,
        asNavFor: '.slider-ano'
    });
});