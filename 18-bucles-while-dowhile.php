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
        $var1=10;
        //while-> mientras que la condicion sea verdadera se ejecutara el bucle
        // do while ->si la ejecucion es falsa se ejecuta una sola vez la instruccion,en caso de ser verdadera se ejecuta como un while

        // codigo WHILE
        // while($var1<6){
            do{
             echo "estamos ejecutando el codigo del bucle $var1<br>";
             $var1++;
        }while($var1<6);

        echo "hemos salido del bucle";
    ?>
</body>
</html>