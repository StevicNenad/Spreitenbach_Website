<?php
session_start();
require "includes/check_login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/icons/Logo_red.ico">

    <link rel="stylesheet" href="includes/css/header/header_style.css">
    <link rel="stylesheet" href="includes/css/footer/footer_style.css">
    <link rel="stylesheet" href="includes/css/cookie_banner/banner_style.css">

    <link rel="stylesheet" media="screen and (min-width: 1024px)" href="css/desktop/video_style.css">
    <link rel="stylesheet" media="screen and (min-width: 600px) and (max-width: 1023px)" href="css/tablet/video_style_tablet.css">
    <link rel="stylesheet" media="screen and (max-width: 599px)" href="css/phone/video_style_phone.css">
    <meta name="description" content="Spreitenbach Video Seite, wo man Einblicke in einen gewöhnlichen Tag in Spreitenbach erhält">
    <meta name="keywords" content="Video, Film, Präsentation">
    <title>Spreitenbach - Video, by Nenad Stevic</title>
</head>
<body>
    <main>

        <?php require "includes/header.php"; ?>

        <div id="header">
            <div id="title">
                <h1>Video</h1>
            </div>
            <div id="slideshow">
                <img class="mySlides anim" src="images/bg_slideshow/pathe_kino_logo.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/spreitenbach-luftbild-gewerbegebiet.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/umweltarena_promomaterial_aussenaussicht.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/shoppi_innen_mall.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/ikea.jpg">
            </div>
        </div>

        <div id="video_content">
            <div id="video_embed">
                <video id="vid" controls src="video/Spreiti_final_2160p.mp4" type="video/mp4" width="75%" height="auto">
            </div>
        </div>

        <?php require 'includes/footer.php'; ?>

    </main>
</body>
<script type="module" src="javascript/impressum_script.js"></script> 
</html>