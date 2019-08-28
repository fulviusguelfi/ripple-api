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
            <h2>Teste connection</h2>
            <p>Ping: <?php dump($ripple->getPing()); ?></p>
            <p>Server Info: <?php dump($ripple->getServerInfo()); ?></p>
            <p>Random: <?php dump($ripple->getRandom()); ?></p>
        </div>
        <div>
            <div>
                <h1>Gateways</h1>
                <pre>
                    <?php
                    $btc_gateways = $ripple->getGateways()['BTC'];
                    $btc_featured_gateways = array();

                    foreach ($btc_gateways as $value) {
                        if ($value['featured'] == 1) {
                            $btc_featured_gateways[] = $value;
                        }
                    }
                    print_r($btc_featured_gateways);
                    ?>
                </pre>
            </div>
        </div>
    </body>
</html>