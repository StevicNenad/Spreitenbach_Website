<?php
session_start();

if (isset($_POST["submit"])) {
            $displayName = $_POST["firstname"] . " " . $_POST["lastname"];
            setcookie("loggedIn", $displayName, time() + (60 * 60));
            $_SESSION["displayName"] = $displayName;
            $_SESSION["loggedIn"] = 1;
            header("Location: home.php");
            die();
        }
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

    <link rel="stylesheet" media="screen and (min-width: 1024px)" href="css/desktop/login_register_style.css">
    <link rel="stylesheet" media="screen and (min-width: 600px) and (max-width: 1023px)" href="css/tablet/login_register_style_tablet.css">
    <link rel="stylesheet" media="screen and (max-width: 599px)" href="css/phone/login_register_style_phone.css">
    <meta name="description" content="Loginseite für die Gemeinde Spreitenbach">
    <meta name="keywords" content="Login, Einloggen, Anmelden">
    <title>Spreitenbach - Login, by Nenad Stevic</title>
</head>

<body>
    <main>
        <div id="header">
            <div id="login_form_div">
                <h1>Login</h1>
                    <form method="POST">
                        <table id="form_table">
                            <tr>
                                <td>
                                    <label for="firstname">Vorname: </label>
                                </td>
                                <td>
                                    <input type="text" name="firstname" id="firstname">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="lastname">Nachname: </label>
                                </td>
                                <td>
                                    <input type="text" name="lastname" id="lastname">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input id="submit_button" type="submit" name="submit" value="Anmelden">
                                </td>
                            </tr>
                        </table>
                    </form>
            </div>
            <div id="slideshow">
                <img class="mySlides anim" src="images/bg_slideshow/umweltarena_promomaterial_aussenaussicht.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/pathe_kino_logo.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/shoppi_innen_mall.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/spreitenbach-luftbild-gewerbegebiet.jpg">
                <img class="mySlides anim" src="images/bg_slideshow/ikea.jpg">
            </div>
        </div>
    </main>
</body>
<script type="module" src="javascript/loginRegister_script.js"></script>

</html>