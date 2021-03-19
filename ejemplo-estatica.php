<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            function incrementarValor(){
                // static -> se ejecute una sola vez y se conserve su  valor
            static   $contador=0;
                $contador++;
                echo $contador."<br>";

            }
            incrementarValor();
            incrementarValor();
            incrementarValor();
            incrementarValor();
            ?>
</body>
</html>