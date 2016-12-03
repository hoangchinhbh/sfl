(function($) {


// The Slider Switcher

$("[name=sliderpick]").click(function(){		
			
	$("#rev_slider_1_1_wrapper").css("top", $(this).attr('rel'));
	

 });


// The Boxed Switcher
$("div.picker.boxed-switcher").click(function () {			
			
	/* $("#section-header").css("background", $(this).attr('bg-rel'));
	$("#section-header .container").css("background", $(this).attr('rel'));		
			
	$("#section-content").css("background", $(this).attr('bg-rel'));
	$("#section-content .container").css("background", $(this).attr('rel'));			
	
	$("#section-pre-footer").css("background", $(this).attr('bg-rel'));	
	$("#section-pre-footer .container").css("background", $(this).attr('rel'));	
	
	$("#section-sub-header").css("background", $(this).attr('bg-rel'));
	$("#section-sub-header .container").css("background", $(this).attr('rel'));	*/
	
	$("img#logotype").attr("src", $(this).attr('img-rel'));
	
	$("p").css("color", $(this).attr('text-rel'));
	$("h1").css("color", $(this).attr('text-rel'));
	$("h2").css("color", $(this).attr('text-rel'));
	$("h3").css("color", $(this).attr('text-rel'));
	$("h4").css("color", $(this).attr('text-rel'));
	$("h5").css("color", $(this).attr('text-rel'));
	$(".supertagline").css("color", $(this).attr('text-rel'));
	
	$(".sf-menu li a strong").css("color", $(this).attr('text-rel'));
	
	$(".hybrid h4 a").css("color", $(this).attr('text-rel'));	
	
	return false;
 });
 
// The Highlight Color Switcher
$("div.picker.highlight").click(function () {		
				 
	// Swap out the main highlight color elements
	$("#portfolio-filter a.current").css("color", $(this).attr('rel'));
	$("#portfolio-filter a:hover").css("color", $(this).attr('rel'));
	$(".widget_categories a").css("color", $(this).attr('rel'));
	$(".widget_categories a:hover").css("color", $(this).attr('rel'));
	$(".widget_categories a:visited").css("color", $(this).attr('rel'));
	$(".widget_archive a").css("color", $(this).attr('rel'));
	$(".widget_archive a:hover").css("color", $(this).attr('rel'));
	$(".widget_archive a:visited").css("color", $(this).attr('rel'));
	$(".sf-menu li li:hover > a").css("color", $(this).attr('rel'));
	$(".sf-menu li li:hover > a:hover").css("color", $(this).attr('rel'));
	$(".sf-menu li li:hover > a:visited").css("color", $(this).attr('rel'));
	$("#portfolio-filter a:hover").css("color", $(this).attr('rel'));
	$(".hybrid:hover h4 a").css("color", $(this).attr('rel'));
	$(".module-container:hover h4 a").css("color", $(this).attr('rel'));
	$(".fp_caption strong").css("color", $(this).attr('rel'));
	//$(".blurb-maker h4 a:hover").css("color", $(this).attr('rel'));
	$("#section-header li a").css("color", $(this).attr('rel'));
	//$(".tp-caption.medium_grey").css("color", $(this).attr('rel'));
	$("a").css("color", $(this).attr('rel'));
	
	// Hover Color (not really used, but listed separate to be clear)
	$("#section-header li a:hover").css("color", $(this).attr('rel'));
	$("a:hover").css("color", $(this).attr('rel'));
	
	// Colored BG Color, White Text		
	$(".read_more_button").css("background-color", $(this).attr('rel')).css("color", "white");
	$(".widget_categories li").css("background-color", $(this).attr('rel')).css("color", "white");
	$(".widget_archive li").css("background-color", $(this).attr('rel')).css("color", "white");
	$(".module-img").css("background-color", $(this).attr('rel')).css("color", "white");
	$(".sf-menu li li:hover").css("background-color", $(this).attr('rel')).css("color", "white");
	$("#section-header .slide:hover .slide-caption").css("background-color", $(this).attr('rel')).css("color", "white");
	$(".tags a").css("background-color", $(this).attr('rel')).css("color", "white");
	$(".action_button a").css("background-color", $(this).attr('rel')).css("color", "white");
	$("#section-slider .tp-button").css("background-color", $(this).attr('rel')).css("color", "white");
	$(".sf-menu > li:hover").css("background-color", $(this).attr('rel')).css("color", "white");
	
	$(".blurb-maker img").addClass("grayscale");
	
	// Hover Color (not really used, but listed separate to be clear)
	$(".widget_categories li:hover").css("background-color", $(this).attr('rel'));
	$(".widget_archive:hover li").css("background-color", $(this).attr('rel'));
	$("#section-header .tp-button:hover").css("background-color", $(this).attr('rel'));	
	
	$(".usquare_block .usquare_square").css("background-color", $(this).attr('rel'));		
	
	$(".action_button a:hover").css("background-color", $(this).attr('rel')).css("color", "white");
	$(".read_more_button:hover").css("background-color", $(this).attr('rel')).css("color", "white");
	$(".tags a:hover").css("background-color", $(this).attr('rel')).css("color", "white");			
	
	// Special Elements (borders, etc.)
	$("#section-footer").css("border-top", $(this).attr('rel'));
	$(".sf-menu li li:hover").css("border-left", $(this).attr('rel'));
	$(".sf-menu li li:hover").css("border-right", $(this).attr('rel'));
	
	return false;
 }); 
 
// The BG Color Switcher
$("div.picker.bg").click(function () {			
		
	$("#section-header").css("background-color", $(this).attr('rel'));			
	$("#section-sub-header").css("background-color", $(this).attr('rel'));		
	$("#section-content").css("background-color", $(this).attr('rel'));	
	
	$("#section-header").css("background-image", "none");			
	$("#section-sub-header").css("background-image", "none");	
	$("#section-content").css("background-image", "none");	
	
	return false;
 }); 

 
// The BG IMAGE Switcher
$("div.picker.bg-image").click(function () {			
		
	$("#section-header").css("background-image", $(this).attr('rel'));
	$("#section-sub-header").css("background-image", $(this).attr('rel'));
	$("#section-content").css("background-image", $(this).attr('rel'));
	//$("#section-content").css("background", $(this).attr('rel'));
	
	return false;
 });
 

//ColorPicker Stuff
//This function is what changes the styles AFTER a new color is selected from the colorpicker.
function updateStyles_bg(color) {
    $("#section-header").css("background-color", color.toHexString());	
    $("#section-sub-header").css("background-color", color.toHexString());	
    $("#section-content").css("background-color", color.toHexString());	
}

//This is what activated the actual colorpicker from the input element.
$("#colorSelector-1").spectrum({
    color: "#ff0000",
    showInput: true,
    className: "full-spectrum",
    showInitial: true,
    showPalette: false,
    showSelectionPalette: false,
    maxPaletteSize: 10,
    preferredFormat: "hex",
    localStorageKey: "spectrum.demo",
    move: function (color) {
        updateStyles_bg(color);
    },
    show: function () {
    
    },
    beforeShow: function () {
    
    },
    hide: function () {
    	updateStyles_bg(color);
    },
    change: function() {
        
    },
    palette: [
        ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
        "rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
        ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
        "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
        ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
        "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
        "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
        "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
        "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
        "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
        "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
        "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
        "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
        "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
    ]
});



//ColorPicker Stuff
//This function is what changes the styles AFTER a new color is selected from the colorpicker.
function updateStyles_text(color) {
   // Swap out the main highlight color elements
	$("#portfolio-filter a.current").css("color", color.toHexString());
	$("#portfolio-filter a:hover").css("color", color.toHexString());
	$(".widget_categories a").css("color", color.toHexString());
	$(".widget_categories a:hover").css("color", color.toHexString());
	$(".widget_categories a:visited").css("color", color.toHexString());
	$(".widget_archive a").css("color", color.toHexString());
	$(".widget_archive a:hover").css("color", color.toHexString());
	$(".widget_archive a:visited").css("color", color.toHexString());
	$(".sf-menu li li:hover > a").css("color", color.toHexString());
	$(".sf-menu li li:hover > a:hover").css("color", color.toHexString());
	$(".sf-menu li li:hover > a:visited").css("color", color.toHexString());
	$("#portfolio-filter a:hover").css("color", color.toHexString());
	$(".hybrid:hover h4 a").css("color", color.toHexString());
	$(".module-container:hover h4 a").css("color", color.toHexString());
	$(".fp_caption strong").css("color", color.toHexString());
	//$(".blurb-maker h4 a:hover").css("color", color.toHexString());
	$("#section-header li a").css("color", color.toHexString());
	//$(".tp-caption.medium_grey").css("color", color.toHexString());
	$("a").css("color", color.toHexString());
	
	// Hover Color (not really used, but listed separate to be clear)
	$("#section-header li a:hover").css("color", color.toHexString());
	$("a:hover").css("color", color.toHexString());
	
	// Colored BG Color, White Text		
	$(".read_more_button").css("background-color", color.toHexString()).css("color", "white");
	$(".widget_categories li").css("background-color", color.toHexString()).css("color", "white");
	$(".widget_archive li").css("background-color", color.toHexString()).css("color", "white");
	$(".sf-menu li li:hover").css("background-color", color.toHexString()).css("color", "white");
	$("#section-header .slide:hover .slide-caption").css("background-color", color.toHexString()).css("color", "white");
	$(".tags a").css("background-color", color.toHexString()).css("color", "white");
	$(".action_button a").css("background-color", color.toHexString()).css("color", "white");
	$("#section-slider .tp-button").css("background-color", color.toHexString()).css("color", "white");
	$(".sf-menu > li:hover").css("background-color", color.toHexString()).css("color", "white");
	
	// Hover Color (not really used, but listed separate to be clear)
	$(".widget_categories li:hover").css("background-color", color.toHexString());
	$(".widget_archive:hover li").css("background-color", color.toHexString());
	$("#section-slider .tp-button:hover").css("background-color", color.toHexString());		
	
	$(".action_button a:hover").css("background-color", color.toHexString()).css("color", "white");
	$(".read_more_button:hover").css("background-color", color.toHexString()).css("color", "white");
	$(".tags a:hover").css("background-color", color.toHexString()).css("color", "white");			
	
	// Special Elements (borders, etc.)
	$("#section-footer").css("border-top", color.toHexString());
	$(".sf-menu li li:hover").css("border-left", color.toHexString());
	$(".sf-menu li li:hover").css("border-right", color.toHexString());
}

//This is what activated the actual colorpicker from the input element.
$("#colorSelector-2").spectrum({
    color: "ff0000",
    showInput: true,
    className: "full-spectrum",
    showInitial: true,
    showPalette: false,
    showSelectionPalette: false,
    maxPaletteSize: 10,
    preferredFormat: "hex",
    localStorageKey: "spectrum.demo",
    move: function (color) {
        updateStyles_text(color);
    },
    show: function () {
    
    },
    beforeShow: function () {
    
    },
    hide: function () {
    	updateStyles_text(color);
    },
    change: function() {
        
    },
    palette: [
        ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
        "rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
        ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
        "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
        ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
        "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
        "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
        "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
        "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
        "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
        "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
        "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
        "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
        "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
    ]
});





// Load the flyout panel
$('#styleswitcher-flyout').pullOut({
  position: 'left',
  top: '25%',
  showOn: 'click',
  slideSpeed: 'normal',
  scrollWithContent: false,
  button: 'preferences',
  color: 'minimal'
});
	
	
})(jQuery);