<ul class="previous_next">
	
	<!-- PREVIOUS BUTTON -->
	<?php if(isset($previous->id)): ?>
		<li class=""><a href="<?= URL::to('media') . '/' . $previous->slug ?>" class="previous"><i class="fa fa-angle-left"></i></a></li>
	<?php endif; ?>
	
	<!-- NEXT BUTTON -->
	<?php if(isset($next->id)): ?>
		<li class=""><a href="<?= URL::to('media') . '/' . $next->slug ?>" class="next"><i class="fa fa-angle-right"></i></a></li>
	<?php endif; ?>

</ul>