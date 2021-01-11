<div class="container">
    <div class="form-cent" style="background-color: black;">
        <!-- <div class="content"> -->
        <h1 style="color: white;">Edit Profile</h1>
        <hr />
        <form role="form" action="<?= base_url('index.php/welcome/changeprofile'); ?>" method="post">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad" type="email" name="email" id="email" placeholder="Email" required
                        value="<?= $profile[0]->email; ?>" disabled>
                    <?= form_error('email', '<br><small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad" type="text" name="username" id="username" placeholder="Username" readonly
                        value="<?php echo $profile[0]->username; ?>" disabled>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad" type="password" name="password" id="password" placeholder="New Password"
                        required value="">
                    <?= form_error('password', '<br><small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad" type="password" name="repassword" id="repassword"
                        placeholder="Re-Type New Password" required value="">
                    <?= form_error('repassword', '<br><small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad submit-but" type="submit" value="Apply Changes">
                </div>
            </div>
        </form>
    </div>
    <!-- </div> -->
</div>

</div>


</body>

</html>