jQuery(document).ready(function($) {



	/* var notice = '<h2>Work In Progress</h2><br/>
	If you are seeing this, then we\'re working on <strong>updates and feature requests</strong>! Woohoo! <br/>
	If anything looks out of place, it should be back to normal in a few minutes. <br/>
	If you have any questions or issues, feel free to let me know in the comments section. ';
	alert(notice); */


/* Stagger Load Category Carousel */
$('#category-rows-container .module-container').hide();
$(window).load(function() {
    $("#category-rows-container .module-container").each(function(i) {
       $(this).delay((i + 1) * 100).fadeIn();
    });
});

$(".sf-menu > li > a").wrapInner("<strong>")
$("h1.page-caption").wrapInner("<span>")
$("h1.page-caption br").before("<div class='spacer'>").after("<div class='spacer'>");

/*-----------------------------------------------------------------------------------*/
/*	Mobile Menu - Duplicate any parent items with children inside the child div.
/*-----------------------------------------------------------------------------------*/
	  
/*$(".dl-back").each(function(){
	var parent = $(this).parents('li');   
	var copy = parent.clone();
	$(copy).find(".dl-submenu").remove().end(); 	
	$(this).after(copy);
});*/

/* - Doesn't work anymore - */

				
/*-----------------------------------------------------------------------------------*/
/*	Isotope - http://isotope.metafizzy.co/
/*-----------------------------------------------------------------------------------*/
   
		// cache container
		var $container = $('#skeleton-container');
		var $isotope_mode = $("#skeleton-container").attr("data-isotope");
		
		if ($isotope_mode == 'masonry'){
			// initialize isotope
			$container.isotope({		
			  	itemSelector : '.module-container',
			  	layoutMode : 'masonry',
			  	animationOptions: {
				     duration: 200,
				     queue: false
				   }
			});
		} else {
			// initialize isotope
			$container.isotope({		
			  	itemSelector : '.module-container',
			  	layoutMode : 'fitRows',
			  	animationOptions: {
				     duration: 200,
				     queue: false
				   }
			});
		}			
			
		// filter items when filter link is clicked
		$('#grid-filter a').click(function(){
		  var selector = $(this).attr('data-filter');
		  $container.isotope({ filter: selector });
		  return false;
		});		
	
		// re-rack items after the entire page loads
	    $(window).load(function(){
	        setTimeout(function() {
				    $container.isotope('reLayout');
				}, 0);
	    });	    
	    
	    
	    // Set an IE8 safe fallback for the blurbmaker (which doesn't technically use isotope)
	    $(".blurb-maker.one-third .one-third.column:nth-child(3n+4)").addClass("clear-left");
	    $(".blurb-maker.four .four.columns:nth-child(4n+5)").addClass("clear-left");
	    $(".blurb-maker.eight .eight.columns:nth-child(2n+3)").addClass("clear-left");
	    

/*-----------------------------------------------------------------------------------*/
/*	Set .module-overlay size
/*-----------------------------------------------------------------------------------*/

		/* $(window).load(function(){
		  var originalWidth = 1000; 		
		  function resize() {
		    this._originalHeight = this._originalHeight || $(this).height();
		    var newHeight = this._originalHeight; 
		    $(this).css("height", newHeight); 		    
		    this._originalWidth = this._originalWidth || $(this).width();
		    var newWidth = this._originalWidth; 
		    $(this).css("width", newWidth); 		
		  }		
		  $(".zoom-overlay").each(resize);
		  $(window).load(function(){
		      $(".zoom-overlay").each(resize);
		  });
		  $(document).resize(function(){
		      $(".zoom-overlay").each(resize);
		  });
		  
		}); */


/*-----------------------------------------------------------------------------------*/
/*	Prepend an HR before the WP-Paginate list
/*-----------------------------------------------------------------------------------*/

		$('.wp-paginate').prepend('<hr />');


/*-----------------------------------------------------------------------------------*/
/* SUPER SCROLLORAMA2 2 */
/*-----------------------------------------------------------------------------------*/

		/* var controller = $.superscrollorama();
		var scrollDuration = 200; 
		
		$(window).load(function () {
			controller.triggerCheckAnim();
		});
		
		// staggering template
		$(".animate_me").each(function(i){
		 	var $item = $(this); 
			controller.addTween($item, TweenMax.fromTo( $($item), .9, {
				css:{opacity:0, transform:"scale(0.1)"}, immediateRender:true, ease:Quad.easeInOut}, {
				css:{opacity:1, transform:"scale(1.0)"}, ease:Quad.easeInOut}), scrollDuration);
		 }); */
		
		// individual element tween examples
		//controller.addTween('#fade-it', TweenMax.from( $('#fade-it'), .5, {css:{opacity: 0}}), scrollDuration);
		//controller.addTween('#fly-it', TweenMax.from( $('#fly-it'), .25, {css:{right:'1000px'}, ease:Quad.easeInOut}), scrollDuration);
		//controller.addTween('#spin-it', TweenMax.from( $('#spin-it'), .25, {css:{opacity:0, rotation: 720}, ease:Quad.easeOut}), scrollDuration);
		//controller.addTween('#scale-it', TweenMax.fromTo( $('#scale-it'), .25, {css:{opacity:0, fontSize:'1px !important'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'80px'}, ease:Quad.easeInOut}), scrollDuration);
		//controller.addTween('#smush-it', TweenMax.fromTo( $('#smush-it'), .25, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'-10px'}, ease:Quad.easeInOut}), 		scrollDuration); // 100 px offset for better timing
	
  		 
/*-----------------------------------------------------------------------------------*/
/*	DropDown Menu - http://users.tpg.com.au/j_birch/plugins/superfish/
/*-----------------------------------------------------------------------------------*/
 	
 	/* - Updated Parameters and Options- */
	$(".sf-menu").supersubs({
	 	minWidth:    14,   // minimum width of sub-menus in em units 
        maxWidth:    30   // maximum width of sub-menus in em units 
	 }).superfish({
	 		delay:         300,                // the delay in milliseconds that the mouse can remain outside a submenu without it closing
		 	animation:     {height:'show'},   // an object equivalent to first parameter of jQuery’s .animate() method. Used to animate the submenu open
		  	animationOut:  {height:'hide'},   // an object equivalent to first parameter of jQuery’s .animate() method Used to animate the submenu closed
		  	speed:         'fast',           // speed of the opening animation. Equivalent to second parameter of jQuery’s .animate() method
		  	speedOut:      'fast',
	 		autoArrows: false,
	 		disableHI: true
	 }); 

	 /* - Original Parameters and Options - */
		 /*$("ul.sf-menu").supersubs({
		 	minWidth:    14,   // minimum width of sub-menus in em units 
            maxWidth:    29,   // maximum width of sub-menus in em units 
            extraWidth:  0    // extra width can ensure lines don't sometimes turn over 
                               // due to slight rounding differences and font-family 
		 }).superfish({
		 	delay: 0,
		 	Speed: 100,
		 	animation:   {opacity:'show',height:'show'},
		 	autoArrows: true
		 }); */

		 $("#responsive-nav select").change(function() {
  			window.location = $(this).find("option:selected").val();
		 });

    /* RESPONSIVE MENU SCROLL PATCH */
    $(window).load(function () {
        var winheight = $(this).height() - 60;
        var navheight = $("responsive-nav ul").height();

        // if($navheight > $winheight) {
        $('#section-navigation #responsive-nav ul.dl-menu').css({
            'max-height': winheight + "px",
            'position': "absolute",
            'overflow-x': "scroll",
        });
        // }
    });
		
/*-----------------------------------------------------------------------------------*/
/*	Flag DropDown
/*-----------------------------------------------------------------------------------*/
//$(document).ready(function(){

   $(".slidingDiv").hide();
   $(".show_hide").show();

   $('.show_hide').toggle(function(){
       $(".slidingDiv").slideDown(
         function(){
           $("#plus").text("-")
           $(this).addClass("display_block");
         }
       );
   },function(){
       $(".slidingDiv").slideUp(
       function(){
           $("#plus").text("+")
           $(this).removeClass("display_block");
       }
       );
   });
//});

/*-----------------------------------------------------------------------------------*/
/*  Footer Dynamic Classes
/*-----------------------------------------------------------------------------------*/
$("#footer-row > div:first-child").hasClass("alpha");
$("#footer-row > div:last-child").addClass("omega");


// Create the dropdown base
$("<select data-native-menu='false' />").prependTo(".wpb_tabs ul.wpb_tabs_nav");

// Create default option "Go to..."
$("<option />", {
   "selected": "selected",
   "value"   : "",
   "text"    : "Go to..."
}).appendTo(".wpb_tabs ul.wpb_tabs_nav select");

// Populate dropdown with menu items
$(".wpb_tabs ul.wpb_tabs_nav li a").each(function() {
 var el = $(this);
 $("<option />", {
     "value"   : el.attr("href"),
     "text"    : el.text()
 }).appendTo("ul.wpb_tabs_nav select");
});

$(".wpb_tabs ul.wpb_tabs_nav select").change(function() {
  var target_tab_selector = $(this).find("option:selected").val();
  console.log(target_tab_selector);
  //show target tab content
  	// var target_tab_selector = $(this).attr('href');
	$(target_tab_selector).css("display", "block");
	$('.wpb_tabs .wpb_tour_tabs_wrapper > div.wpb_tab').not($(target_tab_selector)).css("display", "none");
	// $(target_tab_selector).addClass('active');

  // $(".wpb_tabs .wpb_tour_tabs_wrapper > div.wpb_tab").find(target_tab_selector);
});

/* $(".wpb_tabs ul.wpb_tabs_nav select").change(function() {
	var current_id = $(this).find("option:selected").val();
	console.log(current_id);
	    alert( "Handler for .change() called." );
	// $('.wpb_tabs .wpb_tour_tabs_wrapper > div.wpb_tab[id="'+current_id+'"]').css({'display':'block'});
	}, function(){

}); */
/* $( ".wpb_tabs ul.wpb_tabs_nav select" ).change(function () {
    var str = "";
    $( ".wpb_tabs ul.wpb_tabs_nav select option:selected" ).each(function() {
      str += $( this ).text() + " ";
    });
    $( "div" ).text( str );
  })
  .change(); */


});