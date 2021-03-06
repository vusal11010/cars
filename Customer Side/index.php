<?php

session_start();

date_default_timezone_set('Asia/Baku');

require_once("connect.php");

require_once("header.php");

if (!isset($_GET["page"])) {
    $_GET["page"] = "home";
}

switch ($_GET["page"]) {
    case "home":
        require_once("home.php");
    break;

    case "vehicles":
        require_once("vehicles.php");
    break;

    case "about":
        require_once("about.php");
    break;

    case "contact":
        require_once("contact.php");
    break;

    case "log-in":
        require_once("log-in.php");
    break;

    case "sign-up":
        require_once("sign-up.php");
    break;

    case "payment":
        require_once("payment.php");
    break;

    case "log-out":
        session_destroy();
        unset($_SESSION['loggedin']);
        unset($_SESSION['username']);
        header('Location:index.php?page=log-in');
    break;

    case "review":
        require_once("review.php");
    break;

    case "profile":
        require_once("profile.php");
    break;
}

require_once("footer.php");

?>