<div class="container">
    <div class="form-cent" style="background-color: black;">
        <!-- <div class="content"> -->
        <h1 style="color: white;">Forgot Password</h1>
        <hr />
        <form role="form" action="<?php echo base_url('index.php/account/request_forgot'); ?>" method="post">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad" type="email" name="email" placeholder="Email">
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input class="input-rad submit-but" type="submit" value="Send Request">
                </div>
            </div>
        </form>
    </div>
    <!-- </div> -->
</div>

</div>


</body>

</html>