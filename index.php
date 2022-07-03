<?php
session_start();
if (!isset($_SESSION["tries"])) {
    $_SESSION["tries"] = 0;
}

if (isset($_COOKIE["cooldown"])) {
    echo $_COOKIE["cooldown"];
    exit();
}

if (isset($_POST["submit"])) {
    if (isset($_COOKIE["registered"])) {
        if (strcmp($_COOKIE["username"], $_POST["username"]) === 0 && strcmp($_COOKIE["password"], $_POST["password"]) === 0) {
            setcookie("loggedIn", "1", time() + (60*60));
            $_SESSION["displayName"] = $_COOKIE["firstname"] . " " . $_COOKIE["lastname"];
            $_SESSION["loggedIn"] = 1;
            header("Location: home.php");
            die();
        }
    } else {
        $_SESSION["tries"] = $_SESSION["tries"] + 1;
        if ($_SESSION["tries"] >= 3) {
            setcookie("cooldown", "Zu viele Loginversuche. Versuchen Sie es in 5 Minuten nochmal.", time() + (60 * 5));
            session_destroy();
            header("Refresh:0");
        }
    }
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
        <div id="login_form_div">
        <h1>Login</h1>
            <?php if ($_SESSION["tries"] < 3) : ?>
                <?php if($_SESSION["tries"] > 0): ?>
                    <div>Falsche Angaben. Noch <?= 3 - $_SESSION["tries"]?>Versuche übrig.</div>
                <?php endif; ?>
                <form method="POST">
                    <table id="form_table">
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
                                <input id="submit_button" type="submit" name="submit" value="Anmelden">
                            </td>
                        </tr>
                    </table>
                </form>
                <div id="register_link">
                    <a href="register.php">Registrieren</a>
                </div>
            <?php elseif ($_SESSION["tries"] == 3) : ?>
                <div><?= $_COOKIE["cooldown"] ?></div>
            <?php endif; ?>
        </div>
    </main>
</body>
<script type="module" src="javascript/script.js"></script>

</html>