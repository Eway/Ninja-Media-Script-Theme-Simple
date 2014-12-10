<h3><?= Lang::get('lang.reset_password_email') ?></h3>

<form method="POST" action="<?= URL::to('password_reset') ?>" accept-charset="UTF-8" class="form-signin" style="top: 34px; display: block;">
    
    <?php if (Session::has('error')): ?>
      <span class="error"><?= Lang::get('lang.password_reset_email_error'); ?></span>
    <?php elseif (Session::has('success')): ?>
      <span class="success"><?= Lang::get('lang.check_email_reset'); ?></span>
    <?php endif; ?>
      
    <input name="email" type="text" id="email" class="form-control" placeholder="<?= Lang::get('lang.email_address'); ?>">
    <input class="primary_color_background" type="submit" value="<?= Lang::get('lang.send_password_reset') ?>">
 
</form>