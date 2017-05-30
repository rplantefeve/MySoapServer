<?php

$wsdl = "http://www.webservicex.net/whois.asmx?WSDL";
$service = new SoapClient($wsdl);

// Obtenir toutes les fonctions disponibles
$taballservices = $service->__getFunctions();

print_r($taballservices);

// je choisis d'obtenir les informations sur le domaine microsoft.fr
$informations = $service->GetWhoIS(['HostName' => 'microsoft.fr']);

file_put_contents("./resultats.txt", $informations->GetWhoISResult);


