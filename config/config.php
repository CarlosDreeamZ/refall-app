<?php

define("SITE_URL", "http://localhost/MOTOPASION");
define("KEY_TOKEN", "ABC.sdad-35");
define("MONEDA", "$");

session_start();

$num_cart = 0;
if (isset($_SESSION['CARRITO']['productos'])) {
    $num_cart = count($_SESSION['CARRITO']['productos']);
}


?>