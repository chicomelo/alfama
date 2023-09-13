var arrow_direita = '<div class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.7" xml:space="preserve"><path d="M19.7 6.7 13.3.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l4.7 4.7H0v2h16.6L11.9 13c-.4.4-.4 1 0 1.4.4.4 1 .4 1.4 0L19.7 8c.4-.3.4-1 0-1.3z"/></svg></div>';
var arrow_esquerda = '<div class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 14.7" xml:space="preserve"><path d="M20 6.4H3.4l4.7-4.7c.4-.4.4-1 0-1.4-.4-.4-1-.4-1.4 0L.3 6.7c-.4.4-.4 1 0 1.4l6.4 6.4c.4.4 1 .4 1.4 0 .4-.4.4-1 0-1.4L3.4 8.4H20v-2z"/></svg></div>';

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

    /* sobre */

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

    /* fim sobre */

    /* produto */
    if ($('.lista-produtos .fotos')) {
        $('.lista-produtos .fotos').slick({
            centerMode: false,
            lazyLoad: 'ondemand',
            centerPadding: '0',
            infinite: false,
            dots: true,
            prevArrow: arrow_esquerda,
            nextArrow: arrow_direita,
            arrows: true,
            slidesToShow: 1
        });
    }
    /* fim produto */


    $('body').on('click', '.tab-produtos-mobile .voltar, .btn',function(){
        $('.tab-produtos').removeClass('tab-produtos-mobile');
    });
    $('body').on('click', '.filtro-mobile',function(){
        $('.tab-produtos').addClass('tab-produtos-mobile');
    });

});