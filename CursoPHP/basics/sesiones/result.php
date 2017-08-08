<?php
session_start();
echo "Result: ". $_SESSION['count'];
for ($i=0; $i < 10; $i++) {
  echo "<br>";
  # code...
}
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
 ?>
