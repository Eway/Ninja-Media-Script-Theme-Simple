<form method="post" action="<?= URL::to('login') ?>">

    <h2 class="form-login-heading"><?= Lang::get('lang.sign_in_with') ?></h2>
    <div class="social">
        <a class="facebook" href="<?= $facebook ?>"><i class="fa fa-facebook"></i> facebook</a>
        <span>or</span>
        <a class="google" href="<?= URL::to('auth/google') ?>"><i class="fa fa-google"></i> Google</a>
    </div>

    <h2><?= Lang::get('lang.or_sign_in_with') ?></h2>

    <input type="text" class="form-control" placeholder="<?= Lang::get('lang.username_or_email') ?>" id="email" name="email" autofocus>
    <input type="password" class="form-control" placeholder="<?= Lang::get('lang.password') ?>" id="password" name="password">
    <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?= Input::get('redirect') ?>" />
    
    <input class="primary_color_background" type="submit" value="<?= Lang::get('lang.sign_in') ?>">

    <a href="<?= URL::to('password_reset') ?>" class="forgot_password"><?= Lang::get('lang.forgot_password') ?></a>
</form>