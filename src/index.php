<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../vendor/autoload.php';
$address = "";
$ripple = new \IEXBase\RippleAPI\Ripple($address);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ripple Bot</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
    <div>
        <p>Teste connection (a randon number expected): $ripple->getRandom()</p>
        <p><?php dump($ripple->getPing()); ?></p>
        <p><?php dump($ripple->getServerInfo()); ?></p>
        <p><?php dump($ripple->getRandom()); ?></p>
    </div>    
</body>
</html>