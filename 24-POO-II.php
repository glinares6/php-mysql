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
include( "24-vehiculo.php");
$mazda=new Coche();
$pegazo=new Camion();

echo "el mazda tiene ".$mazda->ruedas." ruedas <br>";
echo "el pegazo tiene ".$pegazo->ruedas." ruedas <br>";

// es este caso el metodo no  esta definido, pues no fue invocado
// accediendo a su atributo por medio del constructor de su clases
echo $pegazo->color."<br>";
// accediendo al metodo por medio de su clase
echo $pegazo->frenar();
?>
</body>
</html>