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
//    toLower->todo minuscula
//    toUpper-> todo mayoscula
//   ucwords -> cada letra que empiece sera en minuscula
        $palabra="Gianmarco";
         echo "contenido toLower<br>";
         echo (strtolower($palabra))."<br>";
         echo "contenido toUpper<br>";
        $palabra2="gianmarco";
        echo (strtoupper($palabra2))."<br>";

        echo "<br>";
        // creación de la función 
        function suma($sum1,$sum2){
            $resultado=$sum1+$sum2;
            return $resultado;
        }
        // llamado a la functión
     echo   suma(2,5);
        // crear una función para imprimir en la consola
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      }

   echo  console_log("Es un comentario en consola");


//    ejercicio
   function frase_mayus($frase,$conversion=true){
    $frase=strtolower($frase);
    if($conversion==true){
        $resultado=ucwords($frase);
    }else{
        $resultado=strtoupper($frase);
    }

    // la función debe retornar un valor
    //  para luego ser invocado
    return $resultado;

   }

   echo (frase_mayus("esto es una prueba"));
   ?>
</body>
</html>