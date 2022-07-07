<?php
if(!isset($_SESSION["loggedIn"])) {
    if(!isset($_COOKIE["loggedIn"])) {
        header("Location: index.php");
    } else {
        $_SESSION["displayName"] = $_COOKIE["loggedIn"];
        $_SESSION["loggedIn"] = 1;
    }
} else {
    $_SESSION["displayName"] = $_COOKIE["loggedIn"];
    $_SESSION["loggedIn"] = 1;
}