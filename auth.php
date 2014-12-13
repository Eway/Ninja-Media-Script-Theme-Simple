<?php include('includes/header.php'); ?>

<div id="wrap" class="auth">

	<?php if (Session::has('notification')): ?>
	    <span class="notification"><?= Session::get('notification'); ?></span>
	<?php endif; ?>

	<!-- SHOW SIGNUP FORM -->
	<?php if($type == 'signup'): ?>

		<?php include('partials/form-signup.php'); ?>

	<!-- SHOW SIGN IN FORM -->
	<?php elseif($type == 'login'): ?>

		<?php include('partials/form-login.php'); ?>

	<!-- SHOW FORGOT PASSWORD FORM -->
	<?php elseif($type == 'forgot_password'): ?>

		<?php include('partials/form-forgot-password.php'); ?>

	<!-- SHOW RESET PASSWORD FORM -->
	<?php elseif($type == 'reset_password'): ?>

		<?php include('partials/form-reset-password.php'); ?>

	<?php endif; ?>

</div>

<?php include('includes/footer.php'); ?>