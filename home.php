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

    <link rel="stylesheet" media="screen and (min-width: 1024px)" href="css/desktop/style.css">
    <link rel="stylesheet" media="screen and (min-width: 600px) and (max-width: 1023px)" href="css/tablet/style_tablet.css">
    <link rel="stylesheet" media="screen and (max-width: 599px)" href="css/phone/style_phone.css">
    <meta name="description" content="Auf dieser Seite wird die Gemiende Spreitenbach präsentiert, mit aktuellen news und interessanten Freizeitaktivitäten">
    <meta name="keywords" content="News, Freizeit, Spreitenbach.">
    <title>Spreitenbach, by Nenad Stevic</title>
</head>
<body>
    <main>

    <?php require "includes/header.php"; ?>

        <div id="header">
            <div id="title">
                <h1>Spreitenbach<label class="red_dot">.</label></h1>
                <p>Divers und lebendig</p>
            </div>
            <div id="slideshow">
                <img class="mySlides anim" src="images/bg_slideshow/umweltarena_promomaterial_aussenaussicht.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/pathe_kino_logo.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/shoppi_innen_mall.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/spreitenbach-luftbild-gewerbegebiet.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/ikea.jpg">
            </div>
        </div>
        
        <div id="content">

            <div class="js_scroll3" id="intro">
                <h2>Willkommen auf Spreitenbach<label class="red_dot">.</label>ch</h2>
                <p>
                    Auf dieser Webseite können Sie die Gemeinde Spreitenbach ein bisschen näher kennenlernen. Sie finden aktuelle Events, Sehenswürdigkeiten, Impressionen
                    und sonstigen Inhalt rund um die Grenzgemeinde des Kanton Aargaus. Es gibt sicherlich etwas, was Ihre neugierde weckt. Wir freuen uns 
                    schon auf Ihren besuch!
                </p>
            </div>

            <div id="border_hack">
                <div class="border_div_whitespace"></div>
                <div class="js_scroll3" id="border_div"></div>
                <div class="border_div_whitespace"></div>
            </div>

            <div id="news_quicklinks_div">

                <div id="news">
                    <h3 class="js_scroll">Aktuelle Nachrichten</h3>

                    <article class="news_box js_scroll">
                        <img src="https://img.chmedia.ch/2021/12/30/7cb240c2-aae9-4129-aea2-ac8c37efe691.jpeg" height="110px" width="150px">

                        <a href="https://www.aargauerzeitung.ch/aargau/gemeinden/so-viele-abstimmungen-hat-spreitenbach-in-diesem-jahr-gewonnen-ld.2232784">
                            <h4>So viele Abstimmungen hat Spreitenbach in diesem Jahr gewonnen</h4>
                        </a>
                        <label class="news_date">30. Dezember 2021, 01:20 Uhr</label>

                        <p>
                            War 2021 für die Gemeinde Spreitenbach aus direktdemokratischer Sicht ein erfolgreiches Jahr?
                        </p>

                    </article>

                    <article class="news_box js_scroll">
                        <img src="https://img.chmedia.ch/2021/12/14/a8389c26-8957-4682-9cac-644087eaab46.jpeg" height="110px" width="150px">

                        <a href="https://www.aargauerzeitung.ch/aargau/baden/vorfaelle-beim-jugendtreff-spreitenbach-hat-genug-sicherheitsdienst-soll-neu-fuer-ruhe-und-ordnung-sorgen-ld.2227718">
                            <h4>Spreitenbach hat genug: Sicherheitsdienst soll neu für Ruhe und Ordnung sorgen</h4>
                        </a>
                        <label class="news_date">15. Dezember 2021, 16:14 Uhr</label>

                        <p>
                            Weil das Nachbardorf Würenlos gute Erfahrungen damit gemacht hat, setzt nun auch Spreitenbach auf einen externen Sicherheitsdienst. 
                            Das Fass zum Überlaufen brachten Vorfälle beim Jugendtreff Peli.                        
                        </p>

                    </article>

                    <article class="news_box js_scroll">
                        <img src="https://img.chmedia.ch/2021/12/07/e8b575e9-0244-4385-b105-70d5cece3962.jpeg?width=1360&height=1462&fit=crop&quality=75&auto=webp" height="110px" width="150px">
                        
                        <a href="https://www.aargauerzeitung.ch/aargau/baden/spreitenbach-tivoli-garten-mit-445-neuen-wohnungen-und-limmattalbahn-hier-treffen-zwei-grossbauprojekte-aufeinander-ld.2225297">
                            <h4>«Tivoli Garten» mit 445 neuen Wohnungen und Limmattalbahn: Hier treffen zwei Grossbauprojekte aufeinander</h4>
                        </a>
                        
                        <label class="news_date">08. Dezember 2021, 05:00 Uhr</label>

                        <p>
                            Im «Tivoli Garten» in Spreitenbach entstehen 445 Wohnungen – und aktuell auch eine Haltestelle der Limmattalbahn. 
                            Während Letztere im nächsten Jahr einsatzbereit ist, ...
                        </p>

                    </article>

                    <article class="news_box js_scroll">
                        <img src="https://img.chmedia.ch/2021/11/30/fe0be265-78ce-4038-ab05-4d3528ca7658.jpeg?width=1360&height=906&fit=crop&quality=75&auto=webp" height="110px" width="150px">

                        <a href="https://www.aargauerzeitung.ch/aargau/baden/repol-wettingen-limmattal-nicht-viel-los-spreitenbacher-polizeiposten-auf-der-kippe-ld.2221992">
                            <h4>«Nicht viel los»: Spreitenbacher Polizeiposten steht auf der Kippe</h4>
                        </a>
                        
                        <label class="news_date">01. Dezember 2021, 05:00 Uhr</label>
                        
                        <p>
                            Ab Dezember ist der Posten der Regionalpolizei Wettingen-Limmattal im Spreitenbacher Gemeindehaus nicht mehr besetzt – 
                            weil er laut Polizeichef Roland Jenni zu wenig frequentiert wurde. Bis im Juni 2022 entscheidet die Gemeinde, ob er überhaupt ...
                        </p>

                    </article>

                    <article class="news_box js_scroll">
                        <img src="https://img.chmedia.ch/2021/11/23/37ee9a72-9993-4a0c-b6ea-728b797e8e40.jpeg?width=1360&height=1022&fit=crop&quality=75&auto=webp" height="100px" width="150px">

                        <a href="https://www.aargauerzeitung.ch/aargau/baden/wintergmeind-spreitenbach-stimmt-tieferem-steuerfuss-zu-die-gute-finanzielle-lage-der-gemeinde-weckt-begehrlichkeiten-ld.2218544">
                            <h4>Spreitenbach stimmt tieferem Steuerfuss zu - die gute finanzielle Lage der Gemeinde weckt Begehrlichkeiten</h4>
                        </a>
                        
                        <label class="news_date">24. November 2021, 00:03 Uhr</label>

                        <p>
                            Die Gemeindeversammlung im 12'000-Einwohnerdorf war mit 13 Traktanden vollgepackt. Die FDP rief die Bevölkerung dazu auf, 
                            sich mit speziellen ...
                        </p>

                    </article>

                </div>

                    <div id="quicklinks">
                        <h3 class="js_scroll2">Quicklinks</h3>

                        <div class="link_box js_scroll2">
                            <a href="https://www.shoppitivoli.ch/">
                                <div><h5>Shoppi Tivoli</h5></div>
                                <img src="images/impressionen/shoppi_aussen_sued.jpg" width="100%" height="150">
                            </a>
                        </div>

                        <div class="link_box js_scroll2">
                            <a href="https://www.umweltarena.ch/">
                                <div><h5>Umweltarena</h5></div>
                                <img src="images/impressionen/umweltarena_eingang.jpg" width="100%" height="150">
                            </a>
                        </div>

                        <div class="link_box js_scroll2">
                            <a href="https://kart.ch/spreitenbach/">
                                <div><h5>Kartbahn</h5></div>
                                <img src="images/impressionen/kartbahn_aussen.jpg" width="100%" height="150">
                            </a>
                        </div>

                        <div class="link_box js_scroll2">
                            <a href="https://www.pathe.ch/de/kinos/cinema-pathe-spreitenbach">
                                <div><h5>Pathé Kino</h5></div>
                                <img src="images/impressionen/pathe_kino_eingang.jpg" width="100%" height="150">
                            </a>
                        </div>

                        <div class="link_box js_scroll2">
                            <a href="https://fcspreitenbach.ch/">
                                <div><h5>FC Spreitenb.</h5></div>
                                <img src="images/impressionen/fc_spreitenbach_match_quicklinks.jpg" width="100%" height="150">
                            </a>
                        </div>
                    </div>
            </div>

        </div>

        <div id="video_embed">
            <button id="mute">
                <img src="images/icons/mute.png" height="256px" width="256px">
            </button>
            <video id="vid" src="video/Spreiti_final_2160p.mp4" type="video/mp4" width="100%" height="100%">
        </div> 

        <?php
            require 'includes/cookie_banner.php';
            require 'includes/footer.php'; 
        ?>

    </main>
</body>
<script type="module" src="javascript/script.js"></script> 
</html>