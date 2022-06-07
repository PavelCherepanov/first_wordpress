<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour and Travel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg">
    
    <?php wp_head();?>
</head>
<body>

<!--Header-->
<header>
    <div class="container">
        <nav>
            <div class="nav-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
            </div>
            <div class="nav-right">
                <div class="nav-close-icon"></div>
                <ul class="nav-menu">
                    <li class="nav-item ">
                        <a href="<?= get_home_url();?>" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a href="./about.php" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Partner</a>
                    </li>
                </ul>
                <div class="nav-form">
                    <a href="http://vk.com" class="btn btn-login">Login</a>
                    <a href="#" class="btn btn-register">Register</a>
                </div>
            </div>
            <div class="hamburger-menu-wrap">
                <div class="hamburger-menu">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--End Header-->
