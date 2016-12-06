<?php

//$options = array('location' => 'http://localhost/formationphp/soap/mainServer.php',
//    'uri' => 'http://localhost/test');
//
//$client = new SoapClient(NULL, $options);
//
//echo $client->getMessage(); //Hello,World! 
//echo $client->addNumbers(3, 5); // 8

$wsdl = "http://www.webservicex.net/whois.asmx?WSDL";
$service = new SoapClient($wsdl);

// Obtenir toutes les fonctions disponibles
$taballservices = $service->__getFunctions();

print_r($taballservices);

// je choisis d'obtenir tous les taux de change
$tauxDeChange = $service->GetWhoIS(['HostName' => 'm2iformation.fr']);

file_put_contents("D:/resultats.txt", $tauxDeChange->GetWhoISResult);


