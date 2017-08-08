<?php
session_start();
echo "session_start() me permite trabajar con varaibles super globales <br>";
$_SESSION['count'] = 0;
$_SESSION['test'] = ['saludo'=> "Hola"];
var_dump($_SESSION);

 ?>
