<?php
if(!isset($_SESSION["loggedIn"])) {
    if(!isset($_COOKIE["loggedIn"])) {
        header("Location: index.php");
    } else {
        $_SESSION["displayName"] = $_COOKIE["firstname"] . " " . $_COOKIE["lastname"];
        $_SESSION["loggedIn"] = 1;
    }
} else {
    $_SESSION["displayName"] = $_COOKIE["firstname"] . " " . $_COOKIE["lastname"];
    $_SESSION["loggedIn"] = 1;
}