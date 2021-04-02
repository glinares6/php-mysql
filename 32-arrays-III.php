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
    // array multidimensional indexado
    echo "array multidimensional indexado - Metodo Foreach<br>";
    $array2D=array(
                            array(1,"lunes","martes","uno","cuatro"),
                            array(2,"miercoles","jueves","dos"),
                            array(3,"viernes","sabado","tres")
                                                    );
    // METODO FOREACH   
                        // ->recorre los elementos
    // para contar cuantos elementos tiene
    // echo   count($array2D);
    // echo "<br>";
    // para hacer el llamado de indice interno por medio de count
   

    foreach ($array2D as  $value) {
            foreach ($value as $elemento) {
        
            echo   "$elemento"."<br>";
        }
    
        echo "<br>";
    }


    echo "array multidimensional indexado - Metdo for<br>";
// METODO FOR
            // -> recorre por indices
    // si queremos exprear los valores
    // para recoreer la primera dimension
      for($i=0;$i<count($array2D);$i++){
            echo "array $i"."<br>";
            // para el recorrido de la segunda dimensión
        for($j=0;$j<count($array2D[$i]);$j++){
       
            echo "fila $j  ".$array2D[$i][$j]."<br> ";
        }
        echo "<br>";
    }
// echo "array de 2 diemnsiones ".$arrayMultiDimensional;
    // COMENTADO

    echo "array multidimensional asociativo ->  metodo foreach";
        $alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                        "citrico"=>"mandarina",
                                        "otros"=>"manzana"),
                        "leche"=>array("animal"=>"vaca",
                                        "vegetal"=>"coco"),
                        "carne"=>array("vacuno"=>"lomo",
                                        "porcino"=>"pata"));


// llamado a un array multidimensional
//    echo  $alimentos["carne"]["vacuno"];


// COMENTADO each()-> metodo depreciado
    foreach($alimentos as $clave_alim=>$alim){
        echo "$clave_alim:<br>";
        while(list($clave,$valor)=each($alim)){
            echo "$clave=$valor<br>";
        }
        echo "<br>";
    }


  

//    echo     var_dump($alimentos); 
// referencia ->


// array multi FOREACH
// https://www.guidacode.com/2017/php/arrays-php-array-multidimensional/
// METODO FOR
// https://www.aprenderaprogramar.com/index.php?option=com_content&view=article&id=571:count-php-funcion-recorrer-arreglos-o-arrays-uni-o-multidimensionales-con-for-y-foreach-ejemplo-cu00826b&catid=70&Itemid=193
    ?>
</body>
</html>