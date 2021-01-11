<div class="container">
    <div class="form-cent" style="background-color: black;">
        <!-- <div class="content"> -->
        <h1 style="color: white;">Sign In</h1>
        <hr />
        <form role="form" action="<?php echo base_url('index.php/welcome/login'); ?>" method="post">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad" type="text" name="lusername" placeholder="Username" required>
                    <?= form_error('lusername', '<br><small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad" type="password" name="lpassword" placeholder="Password" required>
                    <?= form_error('lpassword', '<br><small class="text-danger">', '</small>'); ?>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <a href="<?= base_url('index.php/welcome/forgotpass'); ?>">Forgot Password</a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad submit-but" type="submit" value="Log In">
                </div>
            </div>
        </form>
    </div>
    <!-- </div> -->
</div>

</div>


</body>

</html>