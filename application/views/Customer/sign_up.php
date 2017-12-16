
<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 9/12/2017
 * Time: 8:29 PM
 */?>
<div style="margin-top: 100px;"></div>
<?php echo validation_errors();?>

<div class="container">
    <legend>
        <?= $title; ?>
    </legend>
    <div class="col-md-6 col-md-offset-2" style="background-image: <?php echo base_url('assets/images/with_drive.jpg')?>;">
    <form data-toggle="validator" role="form" method="post"action="<?php echo base_url()?>/users/sing_up">
        <div class="form-group">
            <label for="inputEmail" class="control-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="customer_email" data-error="Bruh, that email address is invalid" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label">Password</label>
            <div class="form-inline row">
                <div class="form-group col-sm-6">
                    <input type="password" data-minlength="6" class="form-control" id="inputPassword" name="customer_password" placeholder="Password" required>
                    <div class="help-block">Minimum of 6 characters</div>
                </div>
                <div class="form-group col-sm-6">
                    <input type="password" class="form-control" name="customer_password2" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a type="button" class="btn btn-warning  pull-right" href="<?php echo base_url()?>/pages/view">Close</a>
            <a href="<?php echo base_url()?>/">login with your google account</a>

        </div>
    </form>

</div>
</div>
