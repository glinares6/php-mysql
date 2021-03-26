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
    // valor por referencia &$variable
    function incrementa(&$valor1){
        $valor1++;
        return $valor1;
    }
    $numero=5;
    echo incrementa($numero)."<br>";
    echo $numero."<br>";


    //    ejercicio
    function frase_mayus(&$letra){
        $letra=ucwords($letra);
        $letra=strtolower($letra);
       return $letra;

   }
    $frase="HoLa MuNdO <br>"; 

   echo (frase_mayus($frase));
   echo $frase;
    ?>
</body>
</html>