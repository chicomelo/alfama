<?php
    /* Template Name: Contato Enviado */ 
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
            <div class="col-12 offset-md-3 col-md-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="93" height="93" viewBox="0 0 93 93" fill="none">
                    <circle cx="46.5" cy="46.5" r="46.5" fill="#FFF9F1"/>
                    <path d="M60.9525 34.6935L42.4589 53.2536L33.0475 43.8085C32.1261 42.8838 30.6124 42.8838 29.691 43.8085C28.7697 44.7332 28.7697 46.2523 29.691 47.177L40.7477 58.2735C41.2084 58.7358 41.8007 59 42.4589 59C43.117 59 43.7093 58.7358 44.17 58.2735L64.309 38.0621C65.2303 37.1374 65.2303 35.6182 64.309 34.6935C63.3876 33.7688 61.9397 33.7688 60.9525 34.6935Z" fill="#BC204B"/>
                </svg>
                <h2 class="titulo">Formulário enviado <br />com sucesso</h2>
                <p class="paragrafo">Agora é só aguardar. Seu formulário foi enviado e em breve entraremos em contato.</p>
                <a href="/" class="btn" title="Voltar ao início">Voltar ao início</a>
            </div>
        </div>
    </div>

<?php
    get_footer();
?>