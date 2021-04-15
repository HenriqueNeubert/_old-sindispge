
jQuery(function ($) {
    function mascara() {
    var masks = ['(00) 00000-0000', '(00) 0000-00009'];
    $(".masked-phone").mask(masks[1], {
        onKeyPress: function (val, e, field, options) {
            field.mask(val.length > 14 ? masks[0] : masks[1], options);
        }
    });
    $(".masked-cep").mask("99999-999");
    $(".masked-cpf").mask("999.999.999-99");
    $(".masked-cnpj").mask("99.999.999/9999-99");
    $(".masked-validity").mask("99/99");
    $(".masked-date").mask("99/99/9999");
    $('.masked-money').mask('000.000.000.000.000,00', {reverse: true});
}
function menu(el){
    if(el.hasClass('display-1024-none')){
        el.removeClass('display-1024-none').addClass('d_flex');
        $('body').addClass('overflow-h');
    }else {
        el.addClass('display-1024-none').removeClass('d_flex');
        $('.main-menu > ul > li').removeClass('open-submenu');
        $('body').removeClass('overflow-h');
    }
}
function scrollHeader(){
    var y = $('.top-fix').offset().top;
	let hBanner = 0;
	if($('.main-banner').length){
		hBanner = parseFloat($('.main-banner').innerHeight() - 140);
	}
    if(y >= hBanner){
        $('header').addClass('fixed');
    }else{
        $('header').removeClass('fixed');
    }
}
$('body').append('<span class="fixed top-0 left-0 top-fix"></span>');
    mascara();
	scrollHeader();
    $(window).resize(function () {
	scrollHeader();
    });
    $(window).scroll(function () {
	scrollHeader();
    });
    $(window).on('load', function () {
    });
	$('.action-menu, .close-menu').click(function(){
		menu($('.main-menu'))
	});
    $('.main-menu > ul > li').click(function(){
        let el = $(this);
        if(el.find('ul').length){
            if(el.hasClass('open-submenu')){
                el.removeClass('open-submenu');
            }else{
                el.addClass('open-submenu');
            }
        }
    });
});