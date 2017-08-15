<?php

# Necesito incluirlos para saber cuales son los archivos que voy a utilizar
include_once "vehicules/ToyCar.php";


use Vehicule\{ToyCar};
function Space()
{
    echo "<br>";
}

$myToyCar = new ToyCar();
Space();
echo $myToyCar->getModel();
Space();
echo $myToyCar->GetCurrentPosition();