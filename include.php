<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metodo include y require</title>
</head>
<body>

<?php
// no te olvides del punto y coma

echo 'esta es una fuerza que no sabe de donde salio<br>';

// require-> si es falso el requiere solo  no se ejecutara lo que sigue despues
// include-> es mas flexible se executa de nanera directa tano interna como externes
include  "contenido-include.php";
echo 'este es un tercer parrafo<br>';

llenarDatos();

?>
</body>
</html>