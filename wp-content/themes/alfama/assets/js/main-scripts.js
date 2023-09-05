
jQuery(document).ready(function($) {
    
    $('body').on('click', '.menu-hamburger__wrapper', function(){
        $(this).toggleClass('active');
        $('.menu-principal__wrapper').toggleClass('active');
    });

});