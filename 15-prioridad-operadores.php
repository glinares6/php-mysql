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
    $var1=true;
    $var2=false;
    //  en el caso de prioridades en and tiene prioridad sobre el &&
    $resultado= $var1 && $var2;
    // $resultado= $var1 and  $var2;
    if($resultado==true){
        echo "corecto";
    }else{
        echo "incorecto";
    }
    // pata palabras con tilde usar &vocalacuete;
    // los simbolos matematicos van de prioridad && == and;etc



?>
</body>
</html>