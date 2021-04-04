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

        // abrir la conexion
        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
        // controlar los errores de conexión
        if(mysqli_connect_errno()){
            echo "fallo al conectar a la base de datos";
            exit();
        }
        // consultar los errores en BD del  usuario
        // or die -> si tiene exito la seleccion de la BD, la seleccoina
        mysqli_select_db($conexion,$db_nombre) or die ("no se encuentra la BD"); 
        // cambiat el tipado de la BD
        mysqli_set_charset($conexion,"utf8");
        // CONSULTA A LA BADR DE DATOS
        $consulta="select * from datospersonales";
        // tabla virtual
        $resultados=mysqli_query($conexion,$consulta);

        // mysqli_fetch_row -> mientras haya  registros en la BD  se ejecuta la información
        // ejecuta mientras siga habiendo información
        while( ($fila= mysqli_fetch_row($resultados))==true){
            echo $fila[0]." ";
            echo $fila[1]." ";
            echo $fila[2]." ";
            echo $fila[3]." ";
             echo "<br>"; 
 
        }
        // cerrar la conexión
        mysqli_close($conexion);
    ?>
</body>
</html>