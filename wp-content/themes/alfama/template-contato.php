<?php
/* Template Name: Contato */ 
get_header();
the_content();
?>

    <div class="banner-contato">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <h2 class="titulo">Contato</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container contato__wrapper">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="conteudo-contato__wrapper">
                    <h2 class="titulo">Estamos aqui para atendê-lo</h2>
                    <p class="paragrafo">
                        Que bom que você está interessado em falar conosco. Saiba que nossos formulários são divididos por temas e áreas para facilitar ainda mais o seu contato conosco.
                    </p>
                    <p class="paragrafo">
                        Escolha no formulário ao lado qual a área que deseja falar e o assunto de seu interesse e em breve alguém da área relativa entrará em contato com você!
                    </p>
                </div>
            </div>
            <div class="col-12 offset-lg-1 col-lg-6">
                <div class="tabs-contato">
                    <a href="javascript: void(0);" class="fale ativo" title="Fale conosco">Fale conosco</a>
                    <a href="javascript: void(0);" class="trabalhe" title="Trabalhe conosco">Trabalhe conosco</a>
                </div>
                <div class="conteudo-tabs-contato">
                    <div class="fale ativo"><?php echo apply_shortcodes('[contact-form-7 id="6bea044" title="Fale conosco"]'); ?></div>
                    <div class="trabalhe"><?php echo apply_shortcodes('[contact-form-7 id="bb3f502" title="Trabalhe conosco"]'); ?></div>
                </div>
            </div>
        </div>

    </div>

<?php
    get_footer();
?>