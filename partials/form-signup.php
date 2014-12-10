<form method="post" action="<?= URL::to('signup') ?>">

    <h2><?= Lang::get('lang.sign_up_with') ?></h2>
    <div class="social">
        <a class="facebook" href="<?= $facebook ?>"><i class="fa fa-facebook"></i> facebook</a>
        <span>or</span>
        <a class="google" href="<?= URL::to('auth/google') ?>"><i class="fa fa-google"></i> Google</a>
    </div>
    <!-- check for notifications -->

    <h2><?= Lang::get('lang.or_signup_with') ?></h2>
    
    <input type="text" id="username" name="username" placeholder="<?= Lang::get('lang.username') ?>">
    <input type="text" class="form-control" id="email" name="email" placeholder="<?= Lang::get('lang.email_address') ?>">
    <input type="password" class="form-control" id="password" name="password" placeholder="<?= Lang::get('lang.password') ?>">
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="<?= Lang::get('lang.confirm_password') ?>">
    <input type="hidden" class="form-control" id="redirect" name="redirect" value="<?= Input::get('redirect') ?>" />
    
    <?php if($settings->captcha): ?>
        <?= Recaptcha::recaptcha_get_html($settings->captcha_public_key); ?>
    <?php endif; ?>


    <input class="primary_color_background" type="submit" value="<?= Lang::get('lang.sign_up') ?>">
    

</form>