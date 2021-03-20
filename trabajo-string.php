<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .resaltar{
            color:red;
            font-weight:bold;
        }
    </style>
</head>
<body>
        
        <?php
        // no puede haber comillas doble y dentro dentro de comillas dobles
            // las comillas internas no deben ser las mismas que las comillas externas 
            // las barras invertidas no formar parte del string
            // strcmp -> comparar string compareando mayusculas y minusculas
                // stcasecmp ->cmpara 2 string ignorando si estan en mayusculas o minusculas
                // devuelven un true o una ¿¿¿¿¿
            // echo "<p class='resaltar'>esto es una etiqueta</p>"

            $variable1="Casa";
            $variable2="Casa";
           //devuelve un boolean --true(0) o un false(1)
            $resultado=strcmp($variable1,$variable2); 
            // ! -> opoerador nulo
            if (!$resultado) {
                echo " coindicen".$resultado;
            }else{
                echo "no coincide ".$resultado;
            }
        ?>
</body>
</html>