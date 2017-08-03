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



</body>
</html>