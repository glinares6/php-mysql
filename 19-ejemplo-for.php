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

// sentencia break-> terminar un bucle
        // for($i=0;$i<=10;$i++){
            // echo "<p>Hemos entrado en el bucle $i</p>";

            // if($i==6) {
            //     echo "bucle interrumpido";
            //     // sle(rompe) el ciclo for
            //     break;
            // }
        //     echo "9 * $i=". 9*$i."<br>";
        // }

// sentencia continue ->no ejecutar una interaccion o vuelta de bucle
        for($i=9;$i>=-10;$i--){ 
            // cuando llegue a cero no podra realizar la operación por ser invalido   
            // cuando sale un error dentro del bucle y lo queremos quitar
            if($i==0){
                echo " se a retirado la operacion 9/0 por no ser valido<br>";
                continue;
            }
                echo "9 / $i=". 9/$i."<br>";
            }
        echo "hemos salido del bucle";
    ?>
</body>
</html>