<!-- Blurb Generator -->
<?php 

$blurbs = get_custom_field('page_blurbs');
$blurb_columns = get_custom_field( 'blurb_columns' );
  
echo '<div class="container" ><div class="blurb-maker" column-rel="'. $blurb_columns .'">';  
  foreach( $blurbs as $blurb ) {
  	
  	if($blurb['link']) : 	
	  	$blurblink = '<a title="'.$blurb['title'].'" target="_'.$blurb['target'].'" href="'.$blurb['link'].'" >'; 
	  	$blurbspotlink = '<a class="zoom-image-wrapper" title="'.$blurb['title'].'" target="_'.$blurb['target'].'" href="'.$blurb['link'].'" >'; 
		$blurbendlink = '</a>';
	else :
		$blurblink = ''; 
	  	$blurbspotlink = ''; 
		$blurbendlink = '';
	endif;	
					
	
    echo ' 
    <div class="'. $blurb_columns .' column columns">
	    <div class="module-container blurb">
	    	<div class="module">
	    		'.$blurbspotlink.'
			   		<img class="blurb-image zoom-image" src="'.$blurb['image'].'" alt="'.$blurb['title'].'" />
			   		<div class="zoom-overlay"><div></div></div>
			    '.$blurbendlink.'
			</div>
			<div class="module-meta">
			    <h3 class="module-headline">'.$blurblink.''.$blurb['title'].''.$blurbendlink.'</h3>
			    <p>'.$blurb['description'].'</p>
			</div>	
		</div>
		
		
    </div>	
    	    
    ';	
    		
  }
echo '</div> <hr class="sixteen columns" /> </div> ';

?>