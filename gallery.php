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

    <link rel="stylesheet" media="screen and (min-width: 1024px)" href="css/desktop/gallery_style.css">
    <link rel="stylesheet" media="screen and (min-width: 600px) and (max-width: 1023px)" href="css/tablet/gallery_style_tablet.css">
    <link rel="stylesheet" media="screen and (max-width: 599px)" href="css/phone/gallery_style_phone.css">
    <meta name="description" content="Spreitenbach Bildergalerie mit verschiedenen Impressionen, in einer schönen Ansicht">
    <meta name="keywords" content="Bilder, Galerie, Impressionen">
    <title>Spreitenbach - Galerie, by Nenad Stevic</title>
</head>
<body>
    <main>

        <?php require "includes/header.php"; ?>
        
        <div id="header">
            <div id="title">
                <h1>Bildergalerie</h1>
            </div>
            <div id="slideshow">
                <img class="mySlides anim" src="images/bg_slideshow/pathe_kino_logo.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/spreitenbach-luftbild-gewerbegebiet.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/umweltarena_promomaterial_aussenaussicht.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/shoppi_innen_mall.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/ikea.jpg">
            </div>
        </div>

        <div id="filter_bar">
            <button class="filter_button" id="btn_all">Alle</button>
            <button class="filter_button" id="btn_shop">Shopping</button>
            <button class="filter_button" id="btn_leisure">Freizeit</button>
            <button class="filter_button" id="btn_other">Sonstiges</button>
        </div>

        <div id="gallery_content">
            <div class="gallery_div js_scroll shop">
                <a class="gallery_images disabled" href="images/impressionen/burgerkingHQ.JPEG" target="_blank">
                    <img src="images/impressionen/burgerking.jpg" alt="Burger King an der Müslistrasse 44">
                </a>
            </div>
            <div class="gallery_div js_scroll leisure" >
                <a class="gallery_images disabled" href="images/impressionen/fc_spreitenbach_beizHQ.JPEG" target="_blank">
                    <img src="images/impressionen/fc_spreitenbach_beiz.jpg" alt="Die Beiz an der Sportanlage des FC Spreitenbach">
                </a>
            </div>
            <div class="gallery_div js_scroll grow leisure" >
                <a class="gallery_images disabled" href="images/impressionen/kartbahn_innenHQ.jpg" target="_blank">
                    <img src="images/impressionen/kartbahn_innen.jpg" alt="Innenansicht der Kartbahn Spreitenbach">
                </a>
            </div>
            <div class="gallery_div js_scroll leisure" >
                <a class="gallery_images disabled" href="images/impressionen/fc_spreitenbach_hauptplatzHQ.JPEG" target="_blank">
                    <img src="images/impressionen/fc_spreitenbach_hauptplatz.jpg" alt="Hauptspielfeld der Sportanlage des FC Spreitenbach">
                </a>
            </div>
            <div class="gallery_div js_scroll leisure" >
                <a class="gallery_images disabled" href="images/impressionen/umweltarena_promomaterial_aussenaussichtHQ.jpg" target="_blank">
                    <img src="images/impressionen/umweltarena_promomaterial_aussenaussicht.jpg" alt="Umweltarena Luftbild">
                </a>
            </div>
            <div class="gallery_div js_scroll leisure" >
                <a class="gallery_images disabled" href="images/impressionen/fc_spreitenbach_matchHQ.jpg" target="_blank">
                    <img src="images/impressionen/fc_spreitenbach_match.jpg" alt="Matchday in Spreitenbach">
                </a>
            </div>
            <div class="gallery_div js_scroll grow leisure" >
                <a class="gallery_images disabled" href="images/impressionen/fc_spreitenbach_sportanlageHQ.JPEG" target="_blank">
                    <img src="images/impressionen/fc_spreitenbach_sportanlage.jpg" alt="Sportanlage FC Spreitenbach">
                </a>
            </div>
            <div class="gallery_div js_scroll leisure" >
                <a class="gallery_images disabled" href="images/impressionen/umweltarena_innenHQ.jpg" target="_blank">
                    <img src="images/impressionen/umweltarena_innen.jpg" alt="Umweltarena innenaussicht Ausstellung">
                </a>
            </div>
            <div class="gallery_div js_scroll grow shop" >
                <a class="gallery_images disabled" href="images/impressionen/ikeaHQ.JPEG" target="_blank">
                    <img src="images/impressionen/ikea.jpg" alt="IKEA Spreitenbach an der Müslistrasse 16">
                </a>
            </div>
            <div class="gallery_div js_scroll leisure" >
                <a class="gallery_images disabled" href="images/impressionen/kartbahn_aussenHQ.JPEG" target="_blank">
                    <img src="images/impressionen/kartbahn_aussen.jpg" alt="Eingang Kartbahn Spreitenbach">
                </a>
            </div>
            <div class="gallery_div js_scroll other" >
                <a class="gallery_images disabled" href="images/impressionen/kirche_st_kosmasHQ.JPEG" target="_blank">
                    <img src="images/impressionen/kirche_st_kosmas.jpg" alt="Die Kirche St. Kosmas">
                </a>
            </div>
            <div class="gallery_div js_scroll shop" >
                <a class="gallery_images disabled" href="images/impressionen/shoppi_innen_firstHQ.jpg" target="_blank">
                    <img src="images/impressionen/shoppi_innen_first.jpg" alt="Shoppi Innenaufnahme vom &quotFirst&quo">
                </a>
            </div>
            <div class="gallery_div js_scroll grow shop" >
                <a class="gallery_images disabled" href="images/impressionen/limmatspotHQ.JPEG" target="_blank">
                    <img src="images/impressionen/limmatspot.jpg" alt="Aufnahme vom Limmatspot, gelegen neben der Shopping-Mall">
                </a>
            </div>
            <div class="gallery_div js_scroll other" >
                <a class="gallery_images disabled" href="images/impressionen/spreitenbach-luftbild-gewerbegebietHQ.jpg" target="_blank">
                    <img src="images/impressionen/spreitenbach-luftbild-gewerbegebiet.jpg" alt="Luftbild von Spreitenbach">
                </a>
            </div>
            <div class="gallery_div js_scroll shop" >
                <a class="gallery_images disabled" href="images/impressionen/mcdonalds_spreitenbachHQ.JPEG" target="_blank">
                    <img src="images/impressionen/mcdonalds_spreitenbach.jpg" alt="McDonald's in Spreitenbach">
                </a>
            </div>
            <div class="gallery_div js_scroll leisure" >
                <a class="gallery_images disabled" href="images/impressionen/pathe_kino_eingangHQ.JPEG" target="_blank">
                    <img src="images/impressionen/pathe_kino_eingang.jpg" alt="Pathé Kino Haupteingang">
                </a>
            </div>
            <div class="gallery_div js_scroll grow leisure" >
                <a class="gallery_images disabled" href="images/impressionen/pathe_kino_logoHQ.JPEG" target="_blank">
                    <img src="images/impressionen/pathe_kino_logo.jpg" alt="Pathé Logo">
                </a>
            </div>
            <div class="gallery_div js_scroll leisure" >
                <a class="gallery_images disabled" href="images/impressionen/tennisplatz_spreitenbachHQ.JPEG" target="_blank">
                    <img src="images/impressionen/tennisplatz_spreitenbach.jpg" alt="Tennisplatz in der SPortanlage Spreitenbach">
                </a>
            </div>
            <div class="gallery_div js_scroll grow shop" >
                <a class="gallery_images disabled" href="images/impressionen/shoppi_aussen_parkplatzarealHQ.JPEG" target="_blank">
                    <img src="images/impressionen/shoppi_aussen_parkplatzareal.jpg" alt="Tivoli Parkareal">
                </a>
            </div>
            <div class="gallery_div js_scroll shop" >
                <a class="gallery_images disabled" href="images/impressionen/shoppi_aussen_suedHQ.JPEG" target="_blank">
                    <img src="images/impressionen/shoppi_aussen_sued.jpg" alt="Shoppi Aussenansicht Süd">
                </a>
            </div>
            <div class="gallery_div js_scroll shop" >
                <a class="gallery_images disabled" href="images/impressionen/shoppi_innen_mallHQ.jpg" target="_blank">
                    <img src="images/impressionen/shoppi_innen_mall.jpg" alt="Shoppi Innenansicht &quotMall&quot">
                </a>
            </div>
            <div class="gallery_div js_scroll grow leisure" >
                <a class="gallery_images disabled" href="images/impressionen/umweltarena_aussenHQ.JPEG" target="_blank">
                    <img src="images/impressionen/umweltarena_aussen.jpg" alt="Umweltarena aussenansicht">
                </a>
            </div>
            <div class="gallery_div js_scroll other" >
                <a class="gallery_images disabled" href="images/impressionen/feuerwehr_spreitenbachHQ.JPEG" target="_blank">
                    <img src="images/impressionen/feuerwehr_spreitenbach.jpg" alt="Feuerwehr Spreitenbach">
                </a>
            </div>
            <div class="gallery_div js_scroll leisure" >
                <a class="gallery_images disabled" href="images/impressionen/umweltarena_eingangHQ.JPEG" target="_blank">
                    <img src="images/impressionen/umweltarena_eingang.jpg" alt="Umweltarena Haupteingang">
                </a>
            </div>
            <div class="gallery_div js_scroll shop" >
                <a class="gallery_images disabled" href="images/impressionen/shoppi_aussen_nordHQ.JPEG" target="_blank">
                    <img src="images/impressionen/shoppi_aussen_nord.jpg" alt="Shoppi Aussenansicht norden">
                </a>
            </div>
            <div class="gallery_div js_scroll other" >
                <a class="gallery_images disabled" href="images/impressionen/zingackerweg_parkHQ.JPEG" target="_blank">
                    <img src="images/impressionen/zingackerweg_park.jpg" alt="Zingackerweg Park Skulpturen">
                </a>
            </div>
            <div class="gallery_div js_scroll leisure" >
                <a class="gallery_images disabled" href="images/impressionen/umweltarena_passarelleHQ.JPEG" target="_blank">
                    <img src="images/impressionen/umweltarena_passarelle.jpg" alt="Umweltarena Passarelle verbunden mit dem Shoppi Tivoli">
                </a>
            </div>
        </div>

        <?php require 'includes/footer.php'; ?>

        <div class="modal" id="HQimage_container">
            <div id="modal_inside_container"></div>
            <img class="modal_image" id="HQimage" src="">
            <div id="caption"></div>
        </div>

    </main>
</body>
<script type="module" src="javascript/gallery_script.js"></script> 
</html>