/*
	Admin Settings Page Scripts
*/
(function($) {
	$('.floatton_colorpicker').wpColorPicker();
	$( document ).on( 'change', '.floatton-content-select', function(){
		if( this.value == 'custom' ){
			$('.floatton-content-default').fadeOut( 150,function(){
				$('.floatton-custom-content').addClass('floatton-show');
			} );
		}else{
			$('.floatton-custom-content').removeClass('floatton-show');
			$('.floatton-content-default').fadeIn( 150 );
		}
	} );
	$( document ).on( 'change', '.floatton-content-open', function(){
		if( this.value == 'onScroll' ){
			$('.floatton-content-open-opts').addClass('floatton-show');
		}else{
			$('.floatton-content-open-opts').removeClass('floatton-show');
		}
	} );

})(jQuery);
