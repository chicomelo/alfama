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
    });

    $('body').on('click', '.filtro-mobile .limpar-filtro', function () {
        $('.lista-produtos .produto').show();
        $('.limpar-filtro').hide();
        $('.filtro-mobile .titulo-mobile').html('Todos os produtos');
        $('input[name="produto"]').prop('checked', false);
        $('input[name="produto"]').filter("[value='todos']").prop("checked",true);
    });



    // img_url


    // Produtos: INÍCIO
    var ProdutosAlfama = {

        'produtos': [
            {
                "destaque": true,
                "categoria": "desfiados",
                "fotos": [
                    "foto-produto-desfiada-carne-seca.jpg",
                    "foto-produto-desfiada-carne-seca.jpg"
                ],
                "nome": "Carne Desfiada Bovina Carne Seca",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras",
                "diferenciais": "Desfiamento padronizado, fibras longas que melhoram a utilização proporcionando maior rentabilidade nas receitas. O produto encontra-se já cozido, dessalgado e desfiado. Sendo extremamente prático, saboroso. \n\nAlta qualidade; sem nervos e gorduras, o que gera uma considerável otimização pela redução de perdas quando comparada ao processo da carne seca in natura. Um dos maiores benefícios finais é a redução de processos nas cozinhas. Produto qualificado e pronto para consumo.",
                "receitas": "Pizza; Escondidinho; Coxinhas; Empadas; Pastel; Sopa; Arroz carreteiro; Croquete; Recheio de batata frita ou rosti; Tapioca etc.",
                "validade": "Validade do produto congelado: 1 ano"
            },
            {
                "destaque": false,
                "categoria": "desfiados",
                "fotos": [
                    "foto-produto-desfiada-costela.jpg",
                    "foto-produto-desfiada-costela.jpg"
                ],
                "nome": "Carne Desfiada Bovina Costela",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "",
                "diferenciais": "",
                "receitas": "",
                "validade": ""
            },
            {
                "destaque": false,
                "categoria": "desfiados",
                "fotos": [
                    "foto-produto-desfiada-cupim.jpg",
                    "foto-produto-desfiada-cupim.jpg"
                ],
                "nome": "Carne Desfiada Bovina Cupim",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "",
                "diferenciais": "",
                "receitas": "",
                "validade": ""
            },
            {
                "destaque": false,
                "categoria": "desfiados",
                "fotos": [
                    "foto-produto-desfiada-frango.jpg",
                    "foto-produto-desfiada-frango.jpg"
                ],
                "nome": "Peito de Frango Desfiado",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "",
                "diferenciais": "",
                "receitas": "",
                "validade": ""
            },
            {
                "destaque": false,
                "categoria": "desfiados",
                "fotos": [
                    "foto-produto-desfiada-suino.jpg",
                    "foto-produto-desfiada-suino.jpg"
                ],
                "nome": "Pernil Suíno Desfiado",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "",
                "diferenciais": "",
                "receitas": "",
                "validade": ""
            },
            {
                "destaque": false,
                "categoria": "moidas",
                "fotos": [
                    "foto-produto-carne-moida-acem.jpg",
                    "foto-produto-carne-moida-acem.jpg"
                ],
                "nome": "Carne Moída Acém",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "",
                "diferenciais": "",
                "receitas": "",
                "validade": ""
            },
            {
                "destaque": false,
                "categoria": "moidas",
                "fotos": [
                    "foto-produto-carne-moida-patinho.jpg",
                    "foto-produto-carne-moida-patinho.jpg"
                ],
                "nome": "Carne Moída Patinho",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "",
                "diferenciais": "",
                "receitas": "",
                "validade": ""
            },
            {
                "destaque": false,
                "categoria": "moidas",
                "fotos": [
                    "foto-produto-carne-moida-cortes.jpg",
                    "foto-produto-carne-moida-cortes.jpg"
                ],
                "nome": "Carne Moída Cortes",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "",
                "diferenciais": "",
                "receitas": "",
                "validade": ""
            },
            {
                "destaque": false,
                "categoria": "hamburguer",
                "fotos": [
                    "foto-produto-burguer-costela.jpg",
                    "foto-produto-burguer-costela.jpg"
                ],
                "nome": "Hambúrguer Gourmet Costela",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "",
                "diferenciais": "",
                "receitas": "",
                "validade": ""
            },
            {
                "destaque": false,
                "categoria": "hamburguer",
                "fotos": [
                    "foto-produto-burguer-picanha.jpg",
                    "foto-produto-burguer-picanha.jpg"
                ],
                "nome": "Hambúrguer Gourmet Picanha",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "",
                "diferenciais": "",
                "receitas": "",
                "validade": ""
            },
            {
                "destaque": false,
                "categoria": "hamburguer",
                "fotos": [
                    "foto-produto-burguer-gourmet.jpg",
                    "foto-produto-burguer-gourmet.jpg"
                ],
                "nome": "Hambúrguer Gourmet",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "",
                "diferenciais": "",
                "receitas": "",
                "validade": ""
            },
            {
                "destaque": false,
                "categoria": "hamburguer",
                "fotos": [
                    "foto-produto-burguer-tradicional.jpg",
                    "foto-produto-burguer-tradicional.jpg"
                ],
                "nome": "Hambúrguer Gourmet",
                "locais": [
                    "panela",
                    "forno",
                    "frigideira"
                ],
                "descricao_curta": "",
                "diferenciais": "",
                "receitas": "",
                "validade": ""
            }
        ],

        load: function () {
            ProdutosAlfama.gerarProdutos();
            ProdutosAlfama.montaSlider();
        },

        gerarProdutos: function () {
            var html_produtos = ''
            ProdutosAlfama.produtos.map(function (produto, index) {

                if(produto.destaque){
                    html_produtos += '<div class="col-12 col-md-3 produto ' + produto.categoria + '">';
                } else{
                    html_produtos += '<div class="col-6 col-md-3 produto ' + produto.categoria + '">';
                }
                html_produtos += '<div class="fotos">';
                produto.fotos.map(function (foto) {
                    html_produtos += '<img class="img-fluid" loading="lazy" src="' + img_url + foto + '" alt="" />';
                });
                html_produtos += '</div>';
                html_produtos += '<h2 class="nome">' + produto.nome + '</h2>';
                html_produtos += '<div class="locais">';

                produto.locais.map(function (local) {
                    if (local == 'panela') {
                        html_produtos += '<div>\
                                <div class="icone panela">\
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>\
                                </div>\
                                Panela\
                            </div>';
                    }
                    if (local == 'forno') {
                        html_produtos += '<div>\
                                <div class="icone forno">\
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>\
                                </div>\
                                Forno\
                            </div>';
                    }
                    if (local == 'frigideira') {
                        html_produtos += '<div>\
                                <div class="icone frigideira">\
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>\
                                </div>\
                                Frigideira\
                            </div>';
                    }
                });

                html_produtos += '</div>';
                html_produtos += '<p class="paragrafo">' + produto.descricao_curta + '</p>';
                html_produtos += '<a href="javascript: void(0);" data-id-produto=' + index + ' data-options="{"touch" : false}" data-fancybox data-src="#modal-produto" class="link link-arrow" title="Mais informacões">Mais informacões</a>';
                html_produtos += '</div>';
            });

            $('.lista-produtos .row').append(html_produtos);
        },

        montaSlider: function () {

        }

    }

    //ProdutosAlfama.load();
    // Produtos: FIM
    if ($('.lista-produtos .produto > .fotos')) {
        $('.lista-produtos .produto > .fotos').slick({
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

});