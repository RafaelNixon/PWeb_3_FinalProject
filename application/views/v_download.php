<!-- <div class="container"> -->
<?php 
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        $url = "https://";
    else  
        $url = "http://";   
    // Append the host(domain name, ip) to the URL.
    $url.= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    $url.= $_SERVER['REQUEST_URI'];
?>
<!-- <div class="div-center"> -->
<div class="row align-items-center justify-content-center" style="margin:0 0;">
    <div class="col">
        <img class="bg-game" src="<?php echo base_url('images/').$game_id;?>_game_bg.jpg"
            style="position: absolute;margin-left: -125px;" draggable="false">
        <img class="col-lg-10 col-xs-9 blackboard" style="position: absolute;"
            src="<?php echo base_url('images/bg_black.jpg');?>" draggable="false"
            style="margin-top:5%;margin-left: 5%;">
        <img class="col-lg-7 col-xs-9 img-title" src="<?php echo base_url('images/').$game_id;?>_game_text.png"
            draggable="false">
        <div class="col-lg-12 col-xs-9 row dmdl" style="margin: 15% auto auto auto;">
            <div class="col-lg-4 col-xs-12" style="position: sticky;" style="margin: auto;">
                <img class="col-lg-12 col-xs-12 motion" style="position: sticky;"
                    src="<?php echo base_url('images/').$game_id;?>_game_motion_1.png" draggable="false">
            </div>
            <div class="col-lg-8 col-xs-12 text-game row" style="margin-left: 0;position: sticky;">
                <div class="col-lg-9 col-xs-12" style="margin-left: 0;">
                    <a draggable="false" href="<?php echo base_url('files/').$game_name; ?>_Setup.bat" download><input
                            type="submit" value="Play <?php echo $game_name; ?> Now" style="width: 100%;"
                            draggable="false" /></a>
                    <hr>
                </div>
                <div class="col-lg-12 col-xs-12 desc" style="margin-left: 0;">
                    <?php
                        // $game_description = str_replace("\n","", $game_description);
                        echo $game_description;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
<!-- </div> -->