<!DOCTYPE html>
<html lang="en">

<head>
    <title>Savor Game</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/stoverlay.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/overlayjs.js"></script>
    <style>
        .jumbotron {
            margin-bottom: 0;
            padding-bottom: 0;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <ul class="sidebar-top">
            <li>
                <img src="<?php echo base_url(); ?>images/logo.png" class="img-circle logo" draggable="false">
            </li>
            <?php if(!$this->session->has_userdata('username')) { ?>
            <li>
                <a onclick="openNav()">Log In</a>
            </li>
            <li>
                <a onclick="openNav2()">Sign Up</a>
            </li>
            <?php } else { ?>
            <li>
                <p style="color: white;">Welcome,
                    <?php echo $user['username']; ?>
                </p>
            </li>
            <?php } ?>

        </ul>
        <ul>
            <?php foreach($games as $game) { ?>
            <li href="#" class="zoom">
                <img src="<?php echo base_url(); ?>images/<?php echo $game->game_id; ?>_game.png" class="img-circle"
                    draggable="false">
                <p>
                    <?php echo $game->game_name; ?>
                </p>
            </li>
            <?php } ?>
        </ul>
    </div>

    <div id="loginNav" class="overlay">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div class="container">
            <div class="overlay-content">
                <form method="post" action="<?= base_url('index.php/welcome/login')?>">
                    <h1 style="text-align: center;color: white;font-size: 72px;">Log In</h1>
                    <br>
                    <hr>
                    <ul>
                        <li>
                            <input type="text" name="usernamelogin" placeholder="Username">
                        </li>
                        <li>
                            <input type="password" name="passwordlogin" placeholder="Password">
                        </li>
                        <li>
                            <input type="submit" value="LOG IN">
                        </li>
                        <li onclick="closeNav();openNav2()">
                            Don't have account?
                            <br>Sign Up
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <div id="signupNav" class="overlay">

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>

        <div class="container">

            <div class="overlay-content">
                <form method="post" action="<?= base_url('index.php/welcome/register')?>">
                    <h1 style="text-align: center;color: white;font-size: 72px;">Sign Up</h1>
                    <br>
                    <hr>
                    <ul>
                        <li>
                            <input type="email" name="emailsignup" placeholder="Email">
                        </li>
                        <li>
                            <input type="text" name="usernamesignup" placeholder="Username">
                        </li>
                        <li>
                            <input type="password" name="passwordsignup" placeholder="Password">
                        </li>
                        <li>
                            <input type="password" name="repasswordsignup" placeholder="Re-Type Password">
                        </li>
                        <li>
                            <input type="submit" value="SIGN UP">
                        </li>
                        <li onclick="closeNav2();openNav()">
                            Already have account?
                            <br>Log In
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

</body>

</html>