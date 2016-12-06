<?php

include './MySoapServer.php';

// Ne pas stocker la WSDL en cache
ini_set('soap.wsdl_cache_enabled', 0);

$options = array('uri' => 'http://localhost/formationphp/soap');

// Instanciation de mon Serveur SOAP
$server = new SoapServer('MySoapServerPerso.wsdl', $options);
// Je lie ma classe Serveur au Serveur Soap
$server->setClass('MySoapServer');
// je laisse PHP gérer la suite
$server->handle();


