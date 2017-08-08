<?php
function hello() {
  echo "Hello";
}

function bigSpace(){
  echo "<hr>";
}

function title($Title){
  echo "<h2> $Title</h2> <br>";
}

for ($i=0; $i < 10; $i++) {
  hello();
}
bigSpace();
title("funciones con parametro");
echo "Aqui solo va el titulo";
bigSpace();
title("If");
$color = "yellow2";

if ($color == 'black') {
  echo "Color is black";
  # code...
} elseif ($color == "yellow") {
  # code...
  echo "Color is yellow";
} else {
  echo "NI idea que color es";
}

bigSpace();
title("Switch");
switch ($color) {
  case 'yellow':
    echo "El color es amarillo";
    # code...
    break;
  case 'blue':
    echo "El color es blue";
    break;
  default:
    echo "No se que color es";
    # code...
    break;
}

bigSpace();
title("Ciclos");
title("for");

for($i = 0; $i <= 10; $i++){
  echo $i . "<br>";
}
title("While");

$i = 1;
while($i <=10){
  echo $i."<br>";
  $i++;
}

title("Do while");
do {
  echo $i."<br>";
  $i++;
} while ($i <= 10);

title("For Each");
$names = ["Doris","Fredy", " Ronaldo"];
foreach ($names as $key => $value) {
  echo $key." - ".$value."<br>";
  # code...
}
?>
