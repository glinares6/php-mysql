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
    // array indexado
        // $semana []="Lunes";
        // $semana []="Martes";
        // $semana []="Miercoles";
        // $semana []="Jueves";

        // array  indexado
        // $semana=array("lunes","martes","miercoles","jueves");
        // echo $semana[3]."<br>";
        
        // sosrt()->ordena alfabeticamente un array indexado
        // sort($semana);

        // for($i=0;$i<count($semana);$i++){
        // echo    $semana[$i]."<br>";
        // }

        // agregar elemento a un array indexado
        // $semana []="viernes";
        // for($i=0;$i<count($semana);$i++){
        // echo    $semana[$i]."<br>";
        // }


        // array asociativo
        // no se debe repetir los valores porque sobreescribe 
  
        $datos=array("Nombre"=>"gianmarco","apellido"=>"linares","Edad"=>27);
        // $datos="martin";
    // echo $datos["Apellido"]."<br>"; 
            // // agrega un nuevo elemto al array asociativo
            $datos["peris"]="perú";
            // asosrt()->ordena alfabeticamente un array asociativo
       asort($datos);
    //  is_array->verificar si es o no un array
    // if(is_array($datos)){
    //     echo "es un array";
    // }else{
    //     echo "no es un array";
    // }


// recorer un array
        // foreach

        // foreach->permite recorrer arrays asociativos
        // as-> para definir un alias o un nombre alternativo para los nombres originales de la columna
        foreach($datos as  $clave =>$valor){
            echo "a $clave le corresponde $valor<br>";
        }

        


// ordenar un array


    ?>  
</body>
</html>