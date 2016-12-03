(function($){
$(document).ready(function() {

	// ===========================    
    // Meta-Boxes Switcher 
    // Set the page-template [select] field to toggle which meta-box shows up
    // ===========================	
	$('div#layout_options, div#skeleton_grid_template_options, div#blog_template_options').hide();
    $('#page_template').change(function() {
        $('#layout_options').toggle($(this).val() == 'default');    
        $('#skeleton_grid_template_options').toggle($(this).val() == 'template-post-grid.php');
        $('#blog_template_options').toggle($(this).val() == 'template-blog.php');
        $('#faculty_template_options').toggle($(this).val() == 'template-faculty-grid.php');
    }).change();
        
    
    /* CSS Font Select Switcher */
    function font_switch() {    	
	    $(this).attr({
			style: $(this).val()
			});
    }	
	$(document).ready(function(){
		$("#default_fontstack option").each(font_switch);
	});
		  
    // ===========================    
    // OptionTree Accordion Script
    // ===========================
    
    // Hide all descriptions for OptionTree (setting)
    $('.format-setting .description').hide();
    
    // Show the main heading descriptions ONLY
    $('.appearance_page_ot-theme-options .type-textblock.titled .description').show();
    $('.toplevel_page_ot-settings .description').show();
    
    // Now set the accordion script - when you click the option-module's heading, the description opens.
    $('.format-setting-label').each(function(){
	  var $content = $(this).closest('.format-settings').find('.format-setting .description');
	  $(this).click(function(e){
	    e.preventDefault();
	    $content.not(':animated').slideToggle();
	  });
	});
  
});
})(jQuery);