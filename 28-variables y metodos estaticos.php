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
include "28-vehiculos.php";
// agregar el archivo de clase 28 desde la web


// para hacer referencia a una variable o metodo estatico se debe llamar a la clase
// Compra_vehiculo::$ayuda=10000;
Compra_vehiculo::descuento_gobierno();

$compra_Antonio =new Compra_vehiculo("compacto");
$compra_Antonio->climatizador();
$compra_Antonio->tapiceria_cuero("blanco");
echo $compra_Antonio->precio_final()."<br>";

$compra_ana=new Compra_vehiculo("compacto");
$compra_ana->climatizador();
$compra_ana->tapiceria_cuero("rojo");
echo $compra_ana->precio_final();

?>
</body>
</html>