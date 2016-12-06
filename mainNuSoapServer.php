<?php

require_once __DIR__ . '/vendor/autoload.php';
include './MySoapServer.php';

// Notre espace de nom
$namespace = "http://localhost/formationphp/soap/";
// Création du serveur SOAP
$server = new soap_server();
// Configuration de la WSDL
$server->configureWSDL("MySoapServer");
// Config. du namespace
$server->wsdl->schemaTargetNamespace = $namespace;

//Register a method that has parameters and return types
$server->register(
        // method name:
        'MySoapServer.direBonjour',
        // parameter list:
        array('name' => 'xsd:string'),
        // return value(s):
        array('return' => 'xsd:string'),
        // namespace:
        $namespace,
        // soapaction: (use default)
        false,
        // style: rpc or document
        'rpc',
        // use: encoded or literal
        'literal',
        // description: documentation for the method
        'Dire bonjour ! Dingue non ?');

//function helloWorld($nom) {
//    return "Hello, $nom";
//}

// php://input is a read-only stream that allows you to read raw data from the request body method POST
$server->service(file_get_contents("php://input"));
exit();

