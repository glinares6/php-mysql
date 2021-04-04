<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion a la BD</title>

</head>
<body>
    <?php
/*     ************
    ATENCIÓN
    ************ */
        // del capitulo 33 al 35 se ecplica la teoria ,el uso de phpmyadmin
        // y manejo de las sentecias sql 
        $db_host="localhost";
        $db_nombre="prueba";
        $db_usuario="root";
        $db_contra="";

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
        // CONSULTA A LA BADR DE DATOS
        $consulta="select * from datospersonales";
        // tabla virtual
        $resultados=mysqli_query($conexion,$consulta);
       $fila= mysqli_fetch_row($resultados);

       echo $fila[0]."<br>";
       echo $fila[1]."<br>";
       echo $fila[2]."<br>";
       echo $fila[3]."<br>";
        
    ?>
</body>
</html>