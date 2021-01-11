<!DOCTYPE html>
<html lang="en">

<head>
    <title>Savor Game</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url(); ?>images/logo.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/stoverlay.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/overlayjs.js"></script>
</head>

<body class="bg-full"
    style="background-color: rgb(14, 13, 15);background-image: url('<?php echo base_url();?>/images/bg_full.png');;">
    <div class="sidebar">
        <ul class="sidebar-top">
            <li>
                <img src="<?php echo base_url(); ?>images/logo.png" class="img-circle logo" draggable="false">
            </li>
            <?php if(!$this->session->has_userdata('status')) { ?>
            <li>
                <a draggable="false" href="<?= base_url('index.php/welcome/login') ?>">Log In</a>
            </li>
            <li>
                <a draggable="false" href="<?= base_url('index.php/welcome/register') ?>">Sign Up</a>
            </li>
            <?php } else { ?>
            <li>
                <p style="color: white;">
                    <a href="<?= base_url('index.php/welcome/profile'); ?>">
                        <?php echo $this->session->userdata("username"); ?>
                    </a>
                </p>
                <a href="<?= base_url('index.php/account/do_logout'); ?>">Logout</a>
            </li>
            <?php } ?>

        </ul>
        <ul id="games">
            <?php
            foreach($games as $game) { ?>
            <a href="<?php echo base_url('index.php/welcome/download/'.$game->game_id.`'`); ?>">
                <li class="zoom">
                    <img src="<?php echo base_url(); ?>images/<?php echo $game->game_id; ?>_game.png"
                        class="img-circle active" draggable="false">
                    <p>
                        <?php echo $game->game_name; ?>
                    </p>
                </li>
            </a>
            <?php } ?>
        </ul>
    </div>
    <div style="margin-left:125px;">