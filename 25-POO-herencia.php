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
include( "25-vehiculos.php");
$mazda=new Coche();
$pegazo=new Camion();

echo "el mazda tiene ".$mazda->ruedas." ruedas <br>";
echo "el pegazo tiene ".$pegazo->ruedas." ruedas <br>";

// es este caso el metodo no  esta definido, pues no fue invocado
// accediendo a su atributo por medio del constructor de su clases
echo $pegazo->color."<br>";
// accediendo al metodo por medio de su clase
echo $pegazo->frenar();

// hace referencia a la super-clase coche
echo $mazda->establece_color("azul","toyota");
// hace referencia a la sobreescritura de la sub-clase camión
echo $pegazo->establece_color("volvo");
// uso de parent
echo $pegazo->arrancar();
?>
</body>
</html>