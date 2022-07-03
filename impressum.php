<?php
session_start();
require "includes/check_login.php";
?>
!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="images/icons/Logo_red.ico">

    <link rel="stylesheet" href="includes/css/header/header_style.css">
    <link rel="stylesheet" href="includes/css/footer/footer_style.css">
    <link rel="stylesheet" href="includes/css/cookie_banner/banner_style.css">

    <link rel="stylesheet" media="screen and (min-width: 1024px)" href="css/desktop/impressum_style.css">
    <link rel="stylesheet" media="screen and (min-width: 600px) and (max-width: 1023px)" href="css/tablet/impressum_style_tablet.css">
    <link rel="stylesheet" media="screen and (max-width: 599px)" href="css/phone/impressum_style_phone.css">
    <meta name="description" content="Spreitenbach Impressum mit Kontaktdaten der Benedict Schule Zürich">
    <meta name="keywords" content="Impressum, Adresse, Kontakt">
    <title>Spreitenbach - Impressum, by Nenad Stevic</title>
</head>

<body>
    <main>

        <?php require "includes/header.php"; ?>

        <div id="header">
            <div id="title">
                <h1>Impressum</h1>
            </div>
            <div id="slideshow">
                <img class="mySlides anim" src="images/bg_slideshow/pathe_kino_logo.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/spreitenbach-luftbild-gewerbegebiet.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/umweltarena_promomaterial_aussenaussicht.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/shoppi_innen_mall.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/ikea.jpg">
            </div>
        </div>

        <div id="impressum_content">
            <div id="contact_information">
                <p class="address">
                    Nenad Stevic</br>
                    Bénédict-Schule Zürich</br>
                    Militärstrasse 106</br>
                    8004 Zürich
                </p>
                <p class="address">
                    Telefon: +41 44 242 12 60</br>
                    Mail:
                    <a id="mailto" href="mailto:Nenad.Stevic@bene-edu.ch">
                        Nenad.Stevic@bene-edu.ch
                    </a>
                </p>
            </div>

            <div id="google_maps_container">
                <iframe id="google_maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d675.1427455013943!
                                              2d8.528232659054403!3d47.379292824785814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!
                                              4f13.1!3m3!1m2!1s0x47900a10f759066f%3A0xbcc292220d160abf!2zQsOpbsOpZGljdC1T
                                              Y2h1bGUgWsO8cmljaA!5e0!3m2!1sen!2sch!4v1641820559279!5m2!1sen!2sch" 
                                              width="600px" height="450px" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>

        </div>

        <?php require 'includes/footer.php'; ?>

    </main>
</body>
<script type="module" src="javascript/impressum_script.js"></script>

</html>