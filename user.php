<?php include('includes/header.php'); ?>

<div class="user-profile-outer">
	<div class="user-profile">

			<img src="<?= Config::get('site.uploads_dir') ?>/avatars/<?= $user->avatar ?>" alt="<?= $user->username ?>">
			
			<h2><?= $user->username ?> <?php if($is_user_profile): ?> <i class="fa fa-edit edit-user-profile" data-toggle="modal" data-target="#edit-modal" style="cursor:pointer;"></i><?php endif; ?></h2>
			<p>Member Since: <?= date("F j, Y", strtotime($user->created_at)) ?></p>
			<p><i class="fa fa-star"></i> <a href="<?= URL::to('user/' . $user->username . '/points' ) ?>""><?= $user_points ?> <?= Lang::get('lang.points') ?></a></p>
			
			<ul>
				<li <?php if(Request::is('user/' . $user->username)): ?>class="active"<?php endif; ?>><a href="<?= URL::to('user') . '/' . $user->username ?>"><i class="fa fa-cloud-upload"></i> <?= $user->username ?>'s uploads</a></li>
				<li <?php if(Request::is('user/' . $user->username .'/likes')): ?>class="active"<?php endif; ?>><a href="<?= URL::to('user') . '/' . $user->username ?>/likes"><i class="fa <?= $settings->like_icon ?>"></i> <?= $user->username ?>'s likes</a></li>
			</ul>

	</div><!-- .user-profile -->
</div>


<div id="wrap" class="user">

<?php if($is_user_profile): ?>
	<?php include('partials/edit-user-profile.php'); ?>
<?php endif; ?>

<?php if(isset($points)): ?>

	<?php include('partials/user-points.php'); ?>
	<?php include('partials/leaderboard.php'); ?>

<?php else: ?>

	<div id="media" class="col-md-8 col-lg-8" style="display:block; clear:both; margin:0px auto; padding:0px; padding-bottom:70px;">

		<?php if(count($media) == 0): ?>
			<h2 style="padding:10px 0px;"><i class="fa-meh-o fa"></i> <?php if(isset($likes)): ?>No Likes Yet <?php else: ?> No Uploads Yet <?php endif; ?></h2>
		<?php endif; ?>

		<?php foreach($media as $item): ?>

			<?php
			if(isset($likes)){
			 	$item = $item->media();
			} 
			?>

			  
			<div class="col-sm-12 item animated single-left" data-href="<?= URL::to('media') . '/' . $item->id ?>">

				<?php include('partials/media-item.php'); ?>

			</div>
			  

		<?php endforeach; ?>
		
		<div style="clear:both"></div>
		
		<?php echo $media->links(); ?>	

	</div><!-- #media -->


<?php endif; ?>

</div>

<?php include('includes/footer.php'); ?>