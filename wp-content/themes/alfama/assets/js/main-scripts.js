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
        arrows: false,
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
        infinite: false,
        prevArrow: arrow_esquerda,
        nextArrow: arrow_direita,
        fade: true,
        dots: true,
        adaptiveHeight: true,
        asNavFor: '.slider-ano'
    });

    /* fim sobre */


    
    function iniciaSliderProdutos(){

        $('.lista-produtos .produto > .fotos').map(function(index, item){
            if ($('img', item).length > 1) {
                $(item).slick({
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
        })

    }

    // Produtos: FIM

    if($('body').hasClass('page-template-template-produtos')){


        $('body').on('click', '.tab-produtos-mobile .voltar, .btn', function () {
            $('.tab-produtos').removeClass('tab-produtos-mobile');
        });
        $('body').on('click', '.filtro-mobile .btn', function () {
            $('.tab-produtos').addClass('tab-produtos-mobile');
        });


        $('body').on('click', '.tab-produtos-mobile .btn', function () {
            var categoria_selecionada = $('input[name="produto"]:checked').val();
            var nome_categoria = $('input[name="produto"]:checked').parent().text();
            $('.filtro-mobile .titulo-mobile').html(nome_categoria.trim());
            $('.lista-produtos .produto').hide();
            $('.lista-produtos .produto.' + categoria_selecionada).fadeIn();
            $('.limpar-filtro').css('display', 'flex');
            if (categoria_selecionada.indexOf('todos') !== -1) {
                $('.lista-produtos .produto').show();
                $('.limpar-filtro').hide();
            }

        });

        $('body').on('click', '.tab-produtos label', function () {
            var categoria_selecionada = $(this).attr('class');

            if (!categoria_selecionada.indexOf('ativo') !== -1) {
                categoria_selecionada = categoria_selecionada.split(' ')[1]
                $('.tab-produtos label').removeClass('ativo');
                $(this).addClass('ativo');
                $('.lista-produtos .produto').hide();
                $('.lista-produtos .produto.' + categoria_selecionada).show();
            }

            if (categoria_selecionada.indexOf('todos') !== -1) {
                $('.lista-produtos .produto').show();
            }

            $('.lista-produtos .produto > .fotos').slick('unslick');
            iniciaSliderProdutos();

        });

        $('body').on('click', '.filtro-mobile .limpar-filtro', function () {
            $('.lista-produtos .produto').show();
            $('.limpar-filtro').hide();
            $('.filtro-mobile .titulo-mobile').html('Todos os produtos');
            $('input[name="produto"]').prop('checked', false);
            $('input[name="produto"]').filter("[value='todos']").prop("checked",true);
        });


        let params = new URL(document.location).searchParams;
        let categoria_selecionada = params.get("produto");
        if(categoria_selecionada){
            $('.tab-produtos label').removeClass('ativo');
            $('.tab-produtos label.' + categoria_selecionada).addClass('ativo');
            $('.lista-produtos .produto').hide();
            $('.lista-produtos .produto.' + categoria_selecionada).show();
        }

        iniciaSliderProdutos();

        $('body').on('click', '.btn-voltar', function(){
            $('.fancybox-button').click();
        });

    }

    // tabs contato
    $('body').on('click', '.tabs-contato a', function(){
        
        if(!$(this).hasClass('ativo')){
            var formulario_selecionado = $(this).attr('class').split(' ')[0];
            $('.tabs-contato a').removeClass('ativo');
            $(this).addClass('ativo');
            $('.conteudo-tabs-contato > div').hide();
            $('.conteudo-tabs-contato .' + formulario_selecionado).show();
        }
    });



    // redireciona apos enviar e-mail
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '/contato/enviado';
    }, false );


    if($('body').hasClass('page-template-template-contato')){

        $('.btn-enviar .btn').addClass('btn-disabled')
        $('.btn-enviar-trabalhe-conosco .btn').addClass('btn-disabled')

        $('.wpcf7-spinner').html("<div class='spinner'></div>")
        

        var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };
        
        $('.input-telefone').mask(SPMaskBehavior, spOptions);

        $('.input-cnpj').mask('00.000.000/0000-00', {reverse: true});
        
        $('body').on('change', '.input-your-recipient', function(){
            var opcao = $(this).val().toLowerCase();
            $('.segmento, .cnpj, .nome-empresa, .motivo-contato').hide();

            switch(opcao){
                case '':
                    $('.btn-enviar .btn').addClass('btn-disabled')
                break;
                case 'quero comprar os produtos da alfama':
                   $('.segmento, .cnpj').show();
                   $('.btn-enviar .btn').removeClass('btn-disabled')
                break;
                case 'quero ser um distribuidor alfama':
                    $('.nome-empresa, .cnpj').show();
                    $('.btn-enviar .btn').removeClass('btn-disabled')
                break;
                case 'outro':
                    $('.motivo-contato').show();
                    $('.btn-enviar .btn').removeClass('btn-disabled')
                break;
            }

        });

        $('body').on('change', '.input-local', function(){
            var opcao = $(this).val().toLowerCase();
            switch(opcao){
                case '':
                    $('.btn-enviar-trabalhe-conosco .btn').addClass('btn-disabled')
                break;
                default:
                    $('.btn-enviar-trabalhe-conosco .btn').removeClass('btn-disabled')
                break;
            }

        });

        

    }



});