<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SoapServer
 *
 * @author Seme
 */
class MySoapServer {

    public function direBonjour($nom) {
        return 'Hello, ' . $nom;
    }

    public function ajouter($num1, $num2) {
        return $num1 + $num2;
    }

}
