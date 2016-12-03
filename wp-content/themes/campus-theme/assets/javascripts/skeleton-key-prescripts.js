jQuery(document).ready(function($) {
  
	
/* This script is here to load any attributes, classes, or any other DOM level content that our other scripts will be requiring. */

/*-----------------------------------------------------------------------------------*/
/*  Revolution Slider Adjustment for Module
/*-----------------------------------------------------------------------------------*/

vrowparent = $(".vc_row");
vrowcontainer = $(".vc_row > .vc_column_container");

if ($(".vc_row").find(".rev_slider")) {
   // vrowparent.css( "margin" , "-15px" );
   $(".rev_slider").find(".vc_column_container").css( "padding" , "0px" );
}

/*-----------------------------------------------------------------------------------*/
/*	Skeleton Post-Grid Module Scripts
/*-----------------------------------------------------------------------------------*/

/* Fix module videos by removing the H/W attributes and allowing CSS to size them */
$('.module iframe').removeAttr('width');
$('.module iframe').removeAttr('height');

/* Hook JackBox into the Portfolio if the Jackbox-Container class exists */
$('<div class="jackbox-hover jackbox-hover-black jackbox-hover-magnify" style="opacity: 0;"></div>').insertBefore($('.module.jackbox-container a img'));

$('.module.jackbox-container a').addClass('jackbox jackbox-link');
$('.module.jackbox-container a').attr('data-jbgroup', 'my-category');


$('<div class="jackbox-hover jackbox-hover-black jackbox-hover-magnify" style="opacity: 0;"></div>').insertBefore($('a[rel="lightbox"] img'));
$('a[rel="lightbox"]').addClass('jackbox jackbox-link');
$('a[rel="lightbox"]').attr('data-jbgroup', 'my-category');
//$('.module.jackbox-container a').attr('data-jbtitle', 'mdnw_title');
//$('.module.jackbox-container a').attr('data-jbdescription', 'mdnw_description');



/* Section Header - Sticky Header */
var header = $('#section-header .container');
var header_height = ($("#section-header .container").height() + 70);
//$("#section-page-caption").css("padding-top", header_height); // Sets the #section-slider or #section-page-caption top spacing //
//$("#section-page-caption").css("padding-bottom", 200); // Sets the #section-slider or #section-page-caption top spacing //

$(window).scroll(function () {
    if ($(this).scrollTop() > header_height) {
        header.css("padding", "0px 0 0px");
    } else {
        header.css("padding", "0px 0 0px");
    }
});


});