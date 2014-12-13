<!DOCTYPE html>
<html>
<head>

	<?php if(isset($media->title)): ?>
      <title>{{ stripslashes($media->title) }}</title>
    <?php else: ?>
      <title><?= $settings->website_name ?> - <?= $settings->website_description ?></title>
    <?php endif; ?>
    <link rel="stylesheet" href="<?= URL::to('/') ?>/content/themes/simple/assets/css/style.css" />
    <link rel="stylesheet" href="<?= URL::to('/') ?>/content/themes/simple/assets/css/font-awesome.min.css" />
    <?= dynamic_styles($settings); ?>
    <script type="text/javascript" src="<?= URL::to('/') ?>/content/themes/simple/assets/js/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=640, initial-scale=1">

</head>
<body>
<header>
	<a class="navbar-brand logo" href="<?= URL::to('/') ?>"><img src="<?= Config::get('site.uploads_dir') . '/settings/' . $settings->logo ?>" style="height:35px; width:auto; margin-left:6px; margin-top:3px;" /></a>

	<ul id="auth">

		<?php if($settings->user_registration || !Auth::guest()): ?>
			<li><a href="<?= URL::to('upload') ?>" class="primary_color_background"><i class="fa fa-cloud-upload"></i> <?= Lang::get('lang.upload') ?></a></li>
		<?php endif; ?>

		<?php if(Auth::guest()): ?>
			<li><a href="<?= URL::to('signup') ?>"><?= Lang::get('lang.sign_up') ?></a></li>
			<li><a href="<?= URL::to('login') ?>"><?= Lang::get('lang.sign_in') ?></a></li>
		<?php endif; ?>

		<?php if(!Auth::guest()): ?>
				
	        <?php if(Auth::user()->admin): ?>
	          <li><a href="<?= URL::to('admin') ?>" class="admin_link_mobile"><i class="fa fa-coffee"></i> <?= Lang::get('lang.admin') ?></a></li>
	        <?php endif; ?>
	        <li><a href="<?= URL::to('user') . '/' . Auth::user()->username; ?>"><i class="fa fa-user"></i> <?= Lang::get('lang.profile') ?></a></li>
	        <li><a href="<?= URL::to('logout') ?>" id="user_logout_mobile"><i class="fa fa-power-off"></i> <?= Lang::get('lang.logout') ?></a></li>
		
		<?php endif; ?>
	</ul>
</header>

<div class="clear"></div>

<subheader style="background-color:<?= $settings->primary_color; ?>">
	<h2><?= $settings->website_description; ?></h2>
</subheader>