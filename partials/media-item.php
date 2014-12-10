<div class="item">

	<h3><a href="<?= URL::to('media') . '/' . $item->slug; ?>" alt="<?= $item->title ?>"><?= $item->title; ?></a></h3>
	<h4><?= strtolower(Lang::get('lang.posted_by')) ?>: 
		<a href="<?= URL::to('user') . '/' . $item->user()->username; ?>"><?= $item->user()->username; ?></a> <span class="time"><?= date("F j, Y", strtotime($item->created_at)) ?></span>
		<i class="fa <?= $settings->like_icon ?>"></i> <span class="like-count"><?= count($item->media_likes) ?></span>
		<i class="fa fa-comments"></i> <span><?= count($item->comments) ?></span>
		<i class="fa fa-eye"></i> <span><?php if(isset($view_increment) && $view_increment == true ): ?><?= $item->views + 1 ?><?php else: ?><?= $item->views ?><?php endif; ?></span>
	</h4>
	
	<!-- Media Like Button -->
	<?php if(!Auth::guest()):
			$liked = MediaLike::where('user_id', '=', Auth::user()->id)->where('media_id', '=', $item->id)->first();
	endif; ?>

	<div class="media-like <?php if(isset($liked->id)): ?><?= 'active'; ?><?php endif; ?>" data-authenticated="<?php if(Auth::guest()): ?><?= 'false' ?><?php else: ?><?= 'true' ?><?php endif; ?>" data-id="<?= $item->id ?>"><i class="fa <?= $settings->like_icon ?>"></i></div>

	<?php if($item->vid != 1): ?>
		<?php include('image.php'); ?>
	<?php else: ?>
		<?php include('video.php'); ?>
	<?php endif; ?>

</div>