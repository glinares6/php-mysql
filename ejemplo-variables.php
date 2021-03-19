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
       $nombre= "gianmarco1";

       function dameNombre(){
        //  global->  accede a la variable desde cualquier archivo
            //        dentro de la funcion debe de estar 
           global $nombre;
           $nombre="el nombre es ".$nombre;
       }
       dameNombre();
       echo  $nombre;
?>
</body>
</html>