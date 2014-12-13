<?php if(strpos($item->pic_url, '.gif') > 0): ?>
	<div class="animated-gif">
		<img class="animation" alt="..." src="<?= Config::get('site.uploads_dir') . '/images/' . $item->pic_url ?>" data-animation="<?= Config::get('site.uploads_dir') . '/images/' . str_replace('.gif', '-animation.gif', $item->pic_url) ?>" data-original="<?= Config::get('site.uploads_dir') . '/images/' . $item->pic_url ?>" style="width:100%;" data-state="0" />
		<img style="display:none" class="animation-play" src="<?= Config::get('site.uploads_dir') . '/images/' . str_replace('.gif', '-animation.gif', $item->pic_url) ?>" />
		<p class="gif-play"><i class="fa fa-play-circle-o"></i></p>
	</div>
<?php else: ?>
	<a href="<?= URL::to('media') . '/' . $item->slug; ?>" alt="<?= $item->title ?>"><img class="single-media" alt="..." src="<?= Config::get('site.uploads_dir') . '/images/' . $item->pic_url ?>" /></a>
<?php endif; ?>