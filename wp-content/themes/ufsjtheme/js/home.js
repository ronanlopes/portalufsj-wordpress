//Script das Abas do Box principal//

$(function() {
	
	$('#home-box').tabs({ fx: {  opacity: 'toggle',
duration: 'fast' } });

	$('#home-subtab').tabs({ fx: {  opacity: 'toggle',
duration: 'normal' } });

	var $tabs = $('#home-box').tabs(); // first tab selected

	$('.tab-close-buttom').click(function() { // bind click event to link
    $tabs.tabs('select', 0); // switch to third tab
    return false;
    });
	// Trecho responsável pela movimentaçao das imagens da notícia da pagina principal
	/*$(document).ready(function(){	
		$('#box-gallery-slides').easySlider({
					auto: false, 
					continuous: true,
					speed: 400,
					pause: 5000,
					prevId: 'box-image-prev',
					prevText:'<span class="tip">Imagem anterior</span>',
					nextId: 'box-image-next',
					nextText:'<span class="tip">Pr&oacute;xima imagem</span>'
		});
	});*/
});
