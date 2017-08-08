<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numbers</title>
</head>
<body>
    <?php
    echo "Hello world"

    ?>
    <div>Numbers</div>
    <div>
        <?php
        $years_old = 19;
        echo "I am $years_old years old";
        ?>
    </div>
    <div>Float</div>
    <div>
        <?php
        $height = 176.43;
        echo "My height is $height ;D <br>";
        echo "I am $years_old years old";
        ?>
    </div>
    <div>Bool</div>
    <div>
        <?php
        $sex = true;
        echo "do i love sex = $sex";
        ?>
    </div>
    <div>Array</div>
    <div>
        <?php

        $arrayVar = [
            'color1' => 'red',
            'color2' => 'blue',
            3 => 'black'
        ];
        //var_dump($arrayVar['color1']);
        var_dump($arrayVar);

        ?>
    </div>
    <h2>Operators</h2>
    <hr>
    <h4>Numerics</h4>
    <div>
        <?php
        $number1 = 10;
        $number2 = 3;

        $c = +$number1;
        var_dump($c)

        ?>
    </div>
    <div>
        <?php
        $a = 10;
        $b = 3;
        $c = (int) ($a / $b); # Cast to get int
        var_dump($c);
        ?>
    </div>
    <h4>Asignacion</h4>
    <div>
        <?php
        // También existen los siguientes operadores de asignación
        $a = 3;
        $b = 4;
        $c = 6;
        $d = 8;

        $a -= 3; // sustracción
        $b *= 5; // multiplicación
        $c /= 5; // división
        $d %= 2; // modulo

        $a = "Hello ";
        $b = "World!";
        $a .= $b;
        var_dump($a);
        ?>
    </div>
    <h4>Comparacion</h4>
    <div>
        <?php
        # == igual que
        # === igual en valor y tipo de dato
        # != diferente
        # !== valor y tipo
        # menor igual o mayor <=>
            # 0 si son iguales
            # -1 si el primer elemento es menor
            # 1 si el primer elemento es mayor
        ?>

    </div>
    <h4>Array</h4>
    <div>
        <?php
        $array1 = [
            1 => 'b',
            2 => 'c',
            0 => 'a'
        ];

        $array2 = ['a', 'b', 'c'];

        var_dump($array1 == $array2);

        ?>
    </div>
    <h4>Operador ??</h4>
    <div>
        <?php
        echo "En caso de tener un valor nulo, le podemos asignar un nuevo valor <br>";
        $a = null;
        if (!$a) {
          echo "Tenemos que";
          var_dump($a);
        }
        $a = $a ?? 'Wenas a todos';
        echo "<br> He cambiado el valor de la variable a y ahora es:  $a";

        ?>
    </div>

</body>
</html>
