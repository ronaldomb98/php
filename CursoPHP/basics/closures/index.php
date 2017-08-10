<?php
$x = 3;
$closure = function ($n) use ($x) {
  return $n * $x;
};

$number = [1,2,3,4,5];
$result = array_map($closure, $number);
var_dump($number);
echo "<br>";
var_dump($result);

 ?>
