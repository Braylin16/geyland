<?php session_start();

require_once('url/url.php');

// Eliminar la Cookie de email y pass
setcookie("user", "", time() - 31536000);
setcookie("PH_DRgmeTSG", "", time() - 31536000);

session_destroy();
$_SESSION = array();

header("Location: $url");