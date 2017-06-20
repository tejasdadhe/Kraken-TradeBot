<?php

require_once 'KrakenAPIClient.php';
$kraken = new KrakenAPI('your public key', 'your private key');

$res = $kraken->QueryPrivate('OpenOrders', array('trades' => true));
$res =json_encode($res);
print_r($res);
?>