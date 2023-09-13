<?php
/* Template Name: Produtos */ 
get_header();
the_content();
?>
<div class="banner-produtos">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <h2 class="titulo"><span class="orange">Produtos</span> que <br />facilitam a operação</h2>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <div class="filtro-mobile d-md-none">

        <a href="javascript: void(0);" class="btn btn-outline btn-icon">
            Filtrar produtos
            <svg version="1.1"  width="21" height="22" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 21 22" xml:space="preserve"><style>.st0{fill-rule:evenodd;clip-rule:evenodd}</style><path class="st0" d="M20.1 2.3h-1.9C17.9 1 16.7 0 15.3 0s-2.6 1-2.9 2.3H.9c-.5 0-.9.4-.9.9s.4.9.9.9h11.5c.4 1.3 1.5 2.3 2.9 2.3s2.6-1 2.9-2.3h1.9c.5 0 .9-.4.9-.9s-.4-.9-.9-.9zm-4.8 2.3c-.7 0-1.3-.6-1.3-1.4 0-.8.6-1.4 1.3-1.4s1.3.6 1.3 1.4c0 .8-.6 1.4-1.3 1.4zM20.1 17.9h-1.9c-.4-1.3-1.5-2.3-2.9-2.3s-2.6 1-2.9 2.3H.9c-.5 0-.9.4-.9.9s.4.9.9.9h11.5c.4 1.3 1.5 2.3 2.9 2.3s2.6-1 2.9-2.3h1.9c.5 0 .9-.4.9-.9s-.4-.9-.9-.9zm-4.8 2.3c-.7 0-1.3-.6-1.3-1.4 0-.8.6-1.4 1.3-1.4s1.3.6 1.3 1.4c0 .8-.6 1.4-1.3 1.4zM20.1 10.1H8.6c-.4-1.3-1.5-2.3-2.9-2.3s-2.6 1-2.9 2.3H.9c-.5 0-.9.4-.9.9s.4.9.9.9h1.9c.4 1.3 1.5 2.3 2.9 2.3s2.6-1 2.9-2.3h11.5c.5 0 .9-.4.9-.9s-.4-.9-.9-.9zM5.7 12.4c-.7 0-1.3-.6-1.3-1.4S5 9.6 5.7 9.6 7 10.2 7 11s-.6 1.4-1.3 1.4z"/></svg>
        </a>

        <p class="titulo-mobile">Todos os produtos</p>

    </div>


    <div class="tab-produtos tab-produtos-mobile">
        <a href="#" class="link voltar">Filtros</a>

        <a href="#">
            <label class="tab ativo" class="todos">
                Todos os produtos
                <input type="radio" name="produto" value="todos" />
                <span></span>
            </label>
        </a>
        <a href="#">
            <label class="tab" class="desfiados">
                Desfiados
                <input type="radio" name="produto" value="desfiados" />
                <span></span>
            </label>
        </a>
        <a href="#">
            <label class="tab" class="hamburguer">
                Hambúrguer
                <input type="radio" name="produto" value="hamburguer" />
                <span></span>
            </label>
        </a>
        <a href="#">
            <label class="tab" class="moidas">
                Moídas
                <input type="radio" name="produto" value="moidas" />
                <span></span>
            </label>
        </a>
        <a href="#">
            <label class="tab" class="formados">
                Formados
                <input type="radio" name="produto" value="formados" />
                <span></span>
            </label>
        </a>
        <a href="#">
            <label class="tab" class="defumados">
                Defumados
                <input type="radio" name="produto" value="defumados" />
                <span></span>
            </label>
        </a>
        <a href="#" class="btn">Ver produtos</a>
    </div>

    <div class="lista-produtos">
        <div class="row">
            <div class="col-12 col-md-3 produto desfiados">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-desfiada-carne-seca.jpg" alt="Carne Seca Desfiado" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-desfiada-carne-seca.jpg" alt="Carne Seca Desfiado" />
                </div>
                <h2 class="nome">Carne Desfiada Bovina Carne Seca</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto desfiados">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-desfiada-costela.jpg" alt="Costela Desfiado" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-desfiada-costela.jpg" alt="Costela Desfiado" />
                </div>
                <h2 class="nome">Carne Desfiada Bovina Costela</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto desfiados">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-desfiada-cupim.jpg" alt="Cupim Desfiado" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-desfiada-cupim.jpg" alt="Cupim Desfiado" />
                </div>
                <h2 class="nome">Carne Desfiada Bovina Cupim</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto desfiados">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-desfiada-frango.jpg" alt="Frango Desfiado" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-desfiada-frango.jpg" alt="Frango Desfiado" />
                </div>
                <h2 class="nome">Peito de Frango Desfiado</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto desfiados">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-desfiada-suino.jpg" alt="Suíno Desfiado" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-desfiada-suino.jpg" alt="Suíno Desfiado" />
                </div>
                <h2 class="nome">Pernil Suíno Desfiado</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-12 col-md-3 produto moidas">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-carne-moida-acem.jpg" alt="Carne Moída Acém" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-carne-moida-acem.jpg" alt="Carne Moída Acém" />
                </div>
                <h2 class="nome">Carne Moída Acém</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto moidas">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-carne-moida-patinho.jpg" alt="Carne Moída Patinho" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-carne-moida-patinho.jpg" alt="Carne Moída Patinho" />
                </div>
                <h2 class="nome">Carne Moída Patinho</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto moidas">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-carne-moida-cortes.jpg" alt="Carne Moída Cortes" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-carne-moida-cortes.jpg" alt="Carne Moída Cortes" />
                </div>
                <h2 class="nome">Carne Moída Cortes</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto hamburguer">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-burguer-costela.jpg" alt="Hambúrguer Gourmet Costela" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-burguer-costela.jpg" alt="Hambúrguer Gourmet Costela" />
                </div>
                <h2 class="nome">Hambúrguer Gourmet Costela</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto hamburguer">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-burguer-picanha.jpg" alt="Hambúrguer Gourmet Picanha" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-burguer-picanha.jpg" alt="Hambúrguer Gourmet Picanha" />
                </div>
                <h2 class="nome">Hambúrguer Gourmet Picanha</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-12 col-md-3 produto hamburguer">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-burguer-gourmet.jpg" alt="Hambúrguer Gourmet" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-burguer-gourmet.jpg" alt="Hambúrguer Gourmet" />
                </div>
                <h2 class="nome">Hambúrguer Gourmet</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto hamburguer">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-burguer-tradicional.jpg" alt="Hambúrguer Tradicional" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-burguer-tradicional.jpg" alt="Hambúrguer Tradicional" />
                </div>
                <h2 class="nome">Hambúrguer Tradicional</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto formados">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-almondega-bovina.jpg" alt="Almôndega Bovina" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-almondega-bovina.jpg" alt="Almôndega Bovina" />
                </div>
                <h2 class="nome">Almôndega Bovina</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto formados">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-steak-churrasco.jpg" alt="Beef Steak Churrasco" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-steak-churrasco.jpg" alt="Beef Steak Churrasco" />
                </div>
                <h2 class="nome">Beef Steak Churrasco</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
            <div class="col-6 col-md-3 produto defumados">
                <div class="fotos">
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-bacon-cubos.jpg" alt="Bacon em Cubos" />
                    <img class="img-fluid" loading="lazy" src="<?php echo do_shortcode("[img-url]"); ?>foto-produto-bacon-cubos.jpg" alt="Bacon em Cubos" />
                </div>
                <h2 class="nome">Bacon em Cubos</h2>
                <div class="locais">
                    <div>
                        <div class="icone panela">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 18.7" xml:space="preserve"><path d="M5.5 3.4h12.2c1 0 1.8.8 1.8 1.8H21c0-1.8-1.5-3.3-3.3-3.3h-3.6C13.8.8 12.8 0 11.6 0S9.5.8 9.1 1.9H5.5c-1.8 0-3.3 1.5-3.3 3.3h1.5c.1-1 .9-1.8 1.8-1.8zm6.1-1.9c.3 0 .6.2.8.4h-1.7c.3-.2.6-.4.9-.4zM22.5 5.6H.8c-.5 0-.8.3-.8.8s.3.8.8.8h1.5v7.3c0 2.4 1.9 4.3 4.3 4.3h10c2.4 0 4.4-2 4.4-4.4V7.1h1.5c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-3 8.7c0 1.6-1.3 2.9-2.9 2.9h-10c-1.5 0-2.8-1.3-2.8-2.8V7.1h15.7v7.2z"/></svg>
                        </div>
                        Panela
                    </div>
                    <div>
                        <div class="icone forno">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.5 18.3" xml:space="preserve"><path d="M17.5 2.6c0-1.4-1.2-2.6-2.6-2.6H2.6C1.2 0 0 1.2 0 2.6V15.7c0 1.4 1.2 2.6 2.6 2.6h12.3c1.4 0 2.6-1.2 2.6-2.6V2.6zm-16 0c0-.6.5-1.1 1.1-1.1h12.3c.6 0 1.1.5 1.1 1.1v2.5H1.5V2.6zm13.4 14.2H2.6c-.6 0-1.1-.5-1.1-1.1V6.6H16v9.1c0 .6-.5 1.1-1.1 1.1z"/><path d="M5.8 2.6c-.4 0-.7.3-.7.7s.4.7.7.7c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zM8.8 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM11.7 2.6c-.4 0-.7.3-.7.7s.3.7.7.7c.4 0 .7-.3.7-.7s-.4-.7-.7-.7zM14 7.5H3.5c-.4 0-.8.3-.8.8s.4.7.8.7H14c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zM14 9.8H3.5c-.4 0-.8.3-.8.8v4.2c0 .4.3.8.8.8H14c.4 0 .8-.3.8-.8v-4.2c-.1-.5-.4-.8-.8-.8zm-.8 4.2H4.3v-2.7h8.9V14z"/></svg>
                        </div>
                        Forno
                    </div>
                    <div>
                        <div class="icone frigideira">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25.1 13.5" xml:space="preserve"><path d="M24.4 7.6H.8c-.5 0-.8.3-.8.7v1.2c0 2.2 1.8 4 4 4h11c2.2 0 4-1.8 4-4v-.4h5.4c.4 0 .8-.3.8-.8s-.4-.7-.8-.7zm-6.9 1.9c0 1.4-1.1 2.5-2.5 2.5H4c-1.4 0-2.5-1.1-2.5-2.5v-.4h15.9v.4zM5.4 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6C5.8.3 5.4 0 5 0s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM9.3 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.6 0-.5-.4-.8-.8-.8s-.7.3-.7.8c0 1.2.4 1.9.7 2.4.2.4.4.8.4 1.6zM13.2 4.8c0 .4.3.8.8.8s.8-.3.8-.8c0-1.2-.4-1.9-.7-2.4-.3-.5-.5-.8-.5-1.7 0-.4-.3-.8-.8-.8s-.8.4-.8.9c0 1.2.4 1.9.7 2.4.3.4.5.8.5 1.6z"/></svg>
                        </div>
                        Frigideira
                    </div>
                </div>
                <p class="paragrafo">1kg(Food service) e 400g(Varejo) cozido, dessalgado e desfiado sem nervos ou gorduras</p>
                <a href="#" class="link link-arrow" title="Mais informacões">Mais informacões</a>
            </div>
        </div>
    </div>
</div>


<?php
    get_footer();
?>