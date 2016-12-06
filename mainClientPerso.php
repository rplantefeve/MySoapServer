<?php

$options = array('location' => 'http://localhost/formationphp/soap/mainServer.php',
    'uri' => 'http://localhost/test');
$wsdl = 'http://localhost/formationphp/soap/mainServer.php?WSDL';
//$client = new SoapClient(NULL, $options);
// dans le cas d'une WSDL, pas d'options
$client = new SoapClient($wsdl);

// Obtenir toutes les fonctions disponibles
$taballservices = $client->__getFunctions();
print_r($taballservices);

echo $client->direBonjour('Romain');
// echo $client->ajouter(10, 45); 
