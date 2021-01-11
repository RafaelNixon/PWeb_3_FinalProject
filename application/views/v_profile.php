<div class="container">
    <div class="form-cent" style="background-color: black;padding: 10px;">
        <!-- <div class=" content"> -->
        <h1 style="color: white;">My Profile</h1>
        <hr />
        <div class="row" style="color: white;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php 
                if(isset($error))
                echo $error;
                ?>
                <br>
                <?php echo form_open_multipart('welcome/profilepicture');?>
                <div class="form-group">
                    <div style="">
                        <img draggable="false"
                            style="border-radius: 50%;width: 120px;height: 120px;border-width: 2px;border-style: solid;background-image:url(../../images/profile/default.png);background-size:120px 120px;background-repeat:no-repeat;"
                            src="<?php 
                        $fl = 'http://savorgame.ribralian.com/images/profile/profile_' . $profile[0]->player_id . '.png';
                        echo $fl;
                        //if(file_exists($fl)) {
                        //    echo '../../images/profile/profile_' . $profile[0]->player_id . '.png';
                        //} else {
                        //    echo '../../images/profile/default.png';
                        //}
                        ?>">
                    </div>
                    <div class="file-upload-wrapper">
                        <input type="file" name="newimg"
                            style="width: fit-content;margin-left: auto;margin-right: auto;margin-top: 5px;border-color:white;border-style: solid;border-width: 1px;">
                    </div>
                </div>
                <div class="form-group" style="color:black;">
                    <input type="submit" class="btnSubmit" value="Apply Profile Picture" />
                </div>
                <?php echo form_close(); ?>
            </div>
            <div class=" col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
                Username
            </div>
            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text-left">
                <?php echo $profile[0]->username;?>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
                Email
            </div>
            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text-left">
                <?php echo $profile[0]->email; ?>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
                Joined
            </div>
            <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text-left">
                <?php echo str_replace(" ", " | ", $profile[0]->joined); ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <a href="<?php echo base_url('index.php/welcome/changeprofile'); ?>">
                    Change Password
                </a>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>

</div>


</body>

</html>