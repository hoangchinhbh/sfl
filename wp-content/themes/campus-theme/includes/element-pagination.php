<!-- Previous / More Entries -->		
<div class="mdnw_pagination">
	
	<?php if(function_exists('wp_paginate')) :
		wp_paginate();
	; else : ?>
	<div class="p button"><?php next_posts_link(__('Previous Posts', 'skeleton')); ?></div>
	<div class="m button"><?php previous_posts_link(__('Next Posts', 'skeleton')); ?></div>
	<?php endif; ?>
	
	<hr />

</div>
<!-- </Previous / More Entries -->