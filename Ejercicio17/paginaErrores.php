<?php
$error_vacio = ($_POST['romano'] == '');
$permitidos = '@ivxlcdmIVXLCDM';
$errorLetras = false;
$numeroRomano = $_POST['romano'];
for ($i = 0; $i < strlen($_POST['romano']); $i++) {
    // echo '<p>'.$numeroRomano[$i].'</p>';
    if (!strpos($permitidos, $numeroRomano[$i], 0)) {
        $errorLetras = true;
    }
}
$errorTotal = $error_vacio || $errorLetras;
