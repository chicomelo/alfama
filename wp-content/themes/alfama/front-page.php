<?php
/* Template Name: Home page */ 
get_header();
the_content();
?>
<div class="d-none d-md-block">
    <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
</div>
<div class="d-md-none">
    <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
</div>

<section class="food-service">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <picture>
                    <source media="(max-width: 799px)" srcset="<?php echo do_shortcode("[img-url]"); ?>img-food-service-mobile.jpg" />
                    <img class="img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>img-food-service.jpg" alt="Somos especialistas em Food Service" />
                </picture>
            </div>
            <div class="col-12 col-md-6">
                <h1 class="titulo mt-4 mt-md-0">Somos especialistas em <br /><b class="red">Food Service</b></h1>
                <p class="paragrafo mb-5">Identificamos as dificuldades nas rotinas das principais cozinhas profissionais do Brasil e investimos no desenvolvimento de soluções completas em proteína animal: produtos que facilitam a operação, simplificam processos, reduzem custos e garantem qualidade e sabor às suas receitas.</p>
                <a href="#" class="btn btn-outline" title="Saiba mais">Saiba mais</a>
            </div>
        </div>
    </div>
</section>
<section class="solucoes">
    <div class="container">
        <h1 class="titulo">Soluções em <b class="orange">proteína animal</b> pensadas para o seu negócio</h1>

        <div class="lista-solucoes">
            <div class="card">
                <div class="img">
                    <img src="<?=do_shortcode("[img-url]"); ?>img-solucoes-desfiados.jpg" alt="Desfiados" />
                </div>
                <div class="card-content">
                    <h2 class="sub-titulo">Desfiados</h2>
                    <p class="paragrafo-2">Nosso propósito é ajudar o empreendedor do setor.</p>
                    <a href="#" class="link" title="Ver produtos">Ver produtos</a>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="<?=do_shortcode("[img-url]"); ?>img-solucoes-hamburguers.jpg" alt="Hambúrguer" />
                </div>
                <div class="card-content">
                    <h2 class="sub-titulo">Hambúrguer</h2>
                    <p class="paragrafo-2">Nosso propósito é ajudar o empreendedor do setor.</p>
                    <a href="#" class="link" title="Ver produtos">Ver produtos</a>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="<?=do_shortcode("[img-url]"); ?>img-solucoes-moidas.jpg" alt="Moídas" />
                </div>
                <div class="card-content">
                    <h2 class="sub-titulo">Moídas</h2>
                    <p class="paragrafo-2">Nosso propósito é ajudar o empreendedor do setor.</p>
                    <a href="#" class="link" title="Ver produtos">Ver produtos</a>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="<?=do_shortcode("[img-url]"); ?>img-solucoes-formados.jpg" alt="Formados" />
                </div>
                <div class="card-content">
                    <h2 class="sub-titulo">Formados</h2>
                    <p class="paragrafo-2">Nosso propósito é ajudar o empreendedor do setor.</p>
                    <a href="#" class="link" title="Ver produtos">Ver produtos</a>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="<?=do_shortcode("[img-url]"); ?>img-solucoes-defumados.jpg" alt="Defumados" />
                </div>
                <div class="card-content">
                    <h2 class="sub-titulo">Defumados</h2>
                    <p class="paragrafo-2">Nosso propósito é ajudar o empreendedor do setor.</p>
                    <a href="#" class="link" title="Ver produtos">Ver produtos</a>
                </div>
            </div>
        </div>

        <a href="#" class="btn btn-outline" title="Ver todas as solucões">Ver todas as solucões</a>

    </div>

</section>

<section class="melhores-cozinhas">
    <img class="d-md-none img-fluid" src="<?php echo do_shortcode("[img-url]"); ?>img-melhores-cozinhas-mobile.jpg" alt="Presente nas melhores cozinhas" />
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="titulo mt-5 mt-md-0">Presente nas melhores cozinhas</h1>
                <p class="paragrafo mb-5">Nos tornamos o principal parceiro do Brasil no fornecimento de carnes pré-prontas para pizzarias, bares, restaurantes, padarias e cozinhas profissionais em geral. Nos orgulhamos em estar presente em mais de 25.000 cozinhas todos os meses, contribuindo diretamente com o sucesso desses empreendedores.</p>
                <a href="#" class="btn btn-outline" title="Saiba mais">Saiba mais</a>
            </div>
            <div class="col-12 col-md-6">
                <img class="d-none d-md-block" src="<?php echo do_shortcode("[img-url]"); ?>img-melhores-cozinhas.jpg" alt="Presente nas melhores cozinhas" />
            </div>
        </div>
    </div>
</section>

<section class="contato">
    <div class="container">
        <div class="contato__wrapper">
            <div class="titulo__wrapper">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 51" xml:space="preserve"><path d="M10.2 14.7h20.6c.7 0 1.3-.6 1.3-1.3 0-.7-.6-1.3-1.3-1.3H10.2c-.7 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3zM10.2 22.8h20.6c.7 0 1.3-.6 1.3-1.3s-.6-1.3-1.3-1.3H10.2c-.7 0-1.3.6-1.3 1.3s.6 1.3 1.3 1.3zM10.2 30.8h20.6c.7 0 1.3-.6 1.3-1.3s-.6-1.3-1.3-1.3H10.2c-.7 0-1.3.6-1.3 1.3s.6 1.3 1.3 1.3zM17.6 36.3h-7.4c-.7 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3h7.4c.7 0 1.3-.6 1.3-1.3 0-.7-.6-1.3-1.3-1.3z"/><path d="m52.6 21.4-3.9-3.9c-.5-.5-1.4-.5-1.9 0L41 23.3v-18C41 2.4 38.6 0 35.7 0H5.3C2.4 0 0 2.4 0 5.3v40.4C0 48.6 2.4 51 5.3 51h30.4c2.9 0 5.3-2.4 5.3-5.3V34.8l11.6-11.5c.5-.5.5-1.3 0-1.9zM38.9 33.2c-.1 0-.1.1-.2.2l-9.5 9.4h-2v-2l17.7-17.6 2 2-8 8zm-.5 12.5c0 1.5-1.2 2.6-2.7 2.6H5.3c-1.5 0-2.7-1.2-2.7-2.6V5.3c0-1.5 1.2-2.6 2.7-2.6h30.4c1.5 0 2.7 1.2 2.7 2.6V26L24.9 39.3c-.1.1-.1.1-.1.2-.1.1-.1.1-.1.2v.2c0 .1-.1.2-.1.3v3.9c0 .7.6 1.3 1.3 1.3h3.9c.2 0 .3 0 .5-.1.1 0 .1-.1.1-.1.1-.1.2-.1.3-.2l7.7-7.6v8.3zm10.4-22.3-2-2 1-1 2 2-1 1z"/></svg>
                </div>
                <p>Entre em contato conosco e conheça mais sobre <br />nossas soluções e como podemos ajudar seu negócio.</p>
            </div>
            <a href="#" class="btn btn-white" title="Quero falar com a Alfama">Quero falar com a Alfama</a>
        </div>
    </div>
</section>

<section class="nossas-unidades">
    <div class="container">

        <h1 class="titulo">Nossas unidades</h1>

        <div class="lista-unidades">

            <div class="unidade">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 43" xml:space="preserve"><path d="m43.2 9.3-21-8.2c-.2-.1-.5-.1-.8 0L.8 9.3c-.5.2-.8.7-.8 1.1v30.4c0 .7.5 1.2 1.2 1.2h41.6c.7 0 1.2-.5 1.2-1.2V10.4c0-.4-.3-.9-.8-1.1zM15.7 39.6v-8.4h12.5v8.4H15.7zm25.9 0h-11V30c0-.7-.5-1.2-1.2-1.2H14.5c-.7 0-1.2.5-1.2 1.2v9.6h-11V11.2l19.5-7.8 19.8 7.8v28.4z"/><path d="M7.1 15.6c-.7 0-1.2.5-1.2 1.2v6.8c0 .7.5 1.2 1.2 1.2h29.8c.7 0 1.2-.5 1.2-1.2v-6.8c0-.7-.5-1.2-1.2-1.2H7.1zm13.7 6.8h-5.1V18h5.1v4.4zm2.4-4.4h5.1v4.4h-5.1V18zM8.3 18h5.1v4.4H8.3V18zm27.4 4.4h-5.1V18h5.1v4.4z"/></svg>
                </div>
                <p class="sub-titulo">Cascavel</p>
                <p class="tipo">Unidade Industrial</p>
                <p class="paragrafo">
                    Av. Renato Festugato, 633 <br />
                    Cascavel Velho, Cascavel - PR <br />
                    CEP 85818-118
                </p>
                <a href="#" class="link">Ver no mapa</a>
            </div>
            <div class="unidade">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 43" xml:space="preserve"><path d="M40 11h-9.4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4v37.9c0 .7.5 1.1 1.1 1.1h41.8c.6 0 1.1-.5 1.1-1.1V15c0-2.2-1.8-4-4-4zM2.2 4C2.2 3 3 2.2 4 2.2h22.4c1 0 1.8.8 1.8 1.8v36.8h-26V4zm39.6 36.8H30.5V13.2H40c1 0 1.8.8 1.8 1.8v25.8z"/><path d="M12.6 6.7H6.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1V7.8c0-.6-.5-1.1-1.1-1.1zm-1.1 5.8H7.9V8.9h3.6v3.6zM23.7 6.7h-5.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1V7.8c0-.6-.5-1.1-1.1-1.1zm-1.1 5.8H19V8.9h3.6v3.6zM12.6 17.5H6.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1v-5.8c0-.6-.5-1.1-1.1-1.1zm-1.1 5.8H7.9v-3.6h3.6v3.6zM23.7 17.5h-5.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1v-5.8c0-.6-.5-1.1-1.1-1.1zm-1.1 5.8H19v-3.6h3.6v3.6zM12.6 28.3H6.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1v-5.8c0-.6-.5-1.1-1.1-1.1zM11.5 34H7.9v-3.6h3.6V34zM23.7 28.3h-5.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1v-5.8c0-.6-.5-1.1-1.1-1.1zM22.6 34H19v-3.6h3.6V34zM38.9 17.5h-5.6c-.6 0-1.1.5-1.1 1.1 0 .6.5 1.1 1.1 1.1h5.6c.6 0 1.1-.5 1.1-1.1 0-.6-.4-1.1-1.1-1.1zM38.9 23h-5.6c-.6 0-1.1.5-1.1 1.1 0 .6.5 1.1 1.1 1.1h5.6c.6 0 1.1-.5 1.1-1.1 0-.6-.4-1.1-1.1-1.1zM38.9 28.5h-5.6c-.6 0-1.1.5-1.1 1.1 0 .6.5 1.1 1.1 1.1h5.6c.6 0 1.1-.5 1.1-1.1 0-.6-.4-1.1-1.1-1.1zM38.9 34h-5.6c-.6 0-1.1.5-1.1 1.1 0 .6.5 1.1 1.1 1.1h5.6c.6 0 1.1-.5 1.1-1.1 0-.6-.4-1.1-1.1-1.1z"/></svg>
                </div>
                <p class="sub-titulo">São Paulo</p>
                <p class="tipo">Unidade Corporativa</p>
                <p class="paragrafo">
                    Av. Renato Festugato, 633 <br />
                    Cascavel Velho, Cascavel - PR <br />
                    CEP 85818-118
                </p>
                <a href="#" class="link">Ver no mapa</a>
            </div>
            <div class="unidade">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 43" xml:space="preserve"><path d="M40 11h-9.4V4c0-2.2-1.8-4-4-4H4C1.8 0 0 1.8 0 4v37.9c0 .7.5 1.1 1.1 1.1h41.8c.6 0 1.1-.5 1.1-1.1V15c0-2.2-1.8-4-4-4zM2.2 4C2.2 3 3 2.2 4 2.2h22.4c1 0 1.8.8 1.8 1.8v36.8h-26V4zm39.6 36.8H30.5V13.2H40c1 0 1.8.8 1.8 1.8v25.8z"/><path d="M12.6 6.7H6.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1V7.8c0-.6-.5-1.1-1.1-1.1zm-1.1 5.8H7.9V8.9h3.6v3.6zM23.7 6.7h-5.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1V7.8c0-.6-.5-1.1-1.1-1.1zm-1.1 5.8H19V8.9h3.6v3.6zM12.6 17.5H6.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1v-5.8c0-.6-.5-1.1-1.1-1.1zm-1.1 5.8H7.9v-3.6h3.6v3.6zM23.7 17.5h-5.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1v-5.8c0-.6-.5-1.1-1.1-1.1zm-1.1 5.8H19v-3.6h3.6v3.6zM12.6 28.3H6.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1v-5.8c0-.6-.5-1.1-1.1-1.1zM11.5 34H7.9v-3.6h3.6V34zM23.7 28.3h-5.8c-.6 0-1.1.5-1.1 1.1v5.8c0 .6.5 1.1 1.1 1.1h5.8c.6 0 1.1-.5 1.1-1.1v-5.8c0-.6-.5-1.1-1.1-1.1zM22.6 34H19v-3.6h3.6V34zM38.9 17.5h-5.6c-.6 0-1.1.5-1.1 1.1 0 .6.5 1.1 1.1 1.1h5.6c.6 0 1.1-.5 1.1-1.1 0-.6-.4-1.1-1.1-1.1zM38.9 23h-5.6c-.6 0-1.1.5-1.1 1.1 0 .6.5 1.1 1.1 1.1h5.6c.6 0 1.1-.5 1.1-1.1 0-.6-.4-1.1-1.1-1.1zM38.9 28.5h-5.6c-.6 0-1.1.5-1.1 1.1 0 .6.5 1.1 1.1 1.1h5.6c.6 0 1.1-.5 1.1-1.1 0-.6-.4-1.1-1.1-1.1zM38.9 34h-5.6c-.6 0-1.1.5-1.1 1.1 0 .6.5 1.1 1.1 1.1h5.6c.6 0 1.1-.5 1.1-1.1 0-.6-.4-1.1-1.1-1.1z"/></svg>
                </div>
                <p class="sub-titulo">Lisboa</p>
                <p class="tipo">Unidade Corporativa</p>
                <p class="paragrafo">
                    Av. Renato Festugato, 633 <br />
                    Cascavel Velho, Cascavel - PR <br />
                    CEP 85818-118
                </p>
                <a href="#" class="link">Ver no mapa</a>
            </div>
            <div class="unidade">
                <div class="icone">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 43" xml:space="preserve"><path d="m43.2 9.3-21-8.2c-.2-.1-.5-.1-.8 0L.8 9.3c-.5.2-.8.7-.8 1.1v30.4c0 .7.5 1.2 1.2 1.2h41.6c.7 0 1.2-.5 1.2-1.2V10.4c0-.4-.3-.9-.8-1.1zM15.7 39.6v-8.4h12.5v8.4H15.7zm25.9 0h-11V30c0-.7-.5-1.2-1.2-1.2H14.5c-.7 0-1.2.5-1.2 1.2v9.6h-11V11.2l19.5-7.8 19.8 7.8v28.4z"/><path d="M7.1 15.6c-.7 0-1.2.5-1.2 1.2v6.8c0 .7.5 1.2 1.2 1.2h29.8c.7 0 1.2-.5 1.2-1.2v-6.8c0-.7-.5-1.2-1.2-1.2H7.1zm13.7 6.8h-5.1V18h5.1v4.4zm2.4-4.4h5.1v4.4h-5.1V18zM8.3 18h5.1v4.4H8.3V18zm27.4 4.4h-5.1V18h5.1v4.4z"/></svg>
                </div>
                <p class="sub-titulo">Curitiba</p>
                <p class="tipo">Unidade Industrial</p>
                <p class="paragrafo">
                    Av. Renato Festugato, 633 <br />
                    Cascavel Velho, Cascavel - PR <br />
                    CEP 85818-118
                </p>
                <a href="#" class="link">Ver no mapa</a>
            </div>
            

            
        </div>
    </div>
</section>

<?php

get_footer();
?>