<?php
session_start();

if (isset($_POST["submit"])) {
    setcookie("registered", "1", time() + (60 * 60 * 24 * 365 * 5));
    setcookie("username", $_POST["username"], time() + (60 * 60 * 24 * 365 * 5));
    setcookie("password", $_POST["password"], time() + (60 * 60 * 24 * 365 * 5));
    setcookie("firstname", $_POST["firstname"], time() + (60 * 60 * 24 * 365 * 5));
    setcookie("lastname", $_POST["lastname"], time() + (60 * 60 * 24 * 365 * 5));

    header("Location: index.php");
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
    <meta name="description" content="Auf dieser Seite wird die Gemiende Spreitenbach präsentiert, mit aktuellen news und interessanten Freizeitaktivitäten">
    <meta name="keywords" content="News, Freizeit, Spreitenbach.">
    <title>Spreitenbach - Registrieren, by Nenad Stevic</title>
</head>

<body>
    <main>
        
        <div id="login_form_div">
        <h1>Register</h1>
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
                        <td>
                            <label for="username">Benutzername: </label>
                        </td>
                        <td>
                            <input type="text" name="username" id="username">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="username">Passwort: </label>
                        </td>
                        <td>
                            <input type="password" name="password" id="password">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input id="submit_button" type="submit" name="submit" value="Registrieren" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
</body>
<script type="module" src="javascript/script.js"></script>

</html>