<?php

namespace Vehicule;

include_once "VehiculeBase.php";

class ToyCar extends VehiculeBase {

    public function __construct()
    {
        parent::__construct("1998","Ronaldo");
    }

    public function startEngine()
    {
        throw \Exception("Toy Car doesn't have Engine. Sorry :'(");
    }
}