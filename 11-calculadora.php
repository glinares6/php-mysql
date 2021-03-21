<style>

    .resultado{
        color=#F00;
        font-weight:bold;
        font-size:32px;
    }
</style>



<?php

// sesion12
    function calcular($calculo){

        if(!strcmp("Suma",$calculo)){
            global $numero1;
            global $numero2;
            $result= $numero1+$numero2;
            echo "<p class='resultado'>el resultado es $result </p>";

        }
        if(!strcmp("Resta",$calculo)){
            global $numero1;
            global $numero2;
            $result= $numero1-$numero2;
            echo "<p class='resultado'>el resultado es $result </p>";

        }
        if(!strcmp("Multiplicación",$calculo)){
            global $numero1;
            global $numero2;
            $result= $numero1*$numero2;
            echo "<p class='resultado'>el resultado es $result </p>";

        }
        if(!strcmp("División",$calculo)){
            global $numero1;
            global $numero2;
            $result= $numero1/$numero2;
            echo "<p class='resultado'>el resultado es $result </p>";

        }
        if(!strcmp("Módulo",$calculo)){
            global $numero1;
            global $numero2;
            $result= $numero1%$numero2;
            echo "<p class='resultado'>el resultado es $result </p>";

        }
        if(!strcmp("Incremento",$calculo)){
         global $numero1;
            $numero1++;
            $result= $numero1;
            echo "<p class='resultado'>el resultado es $result </p>";

        }
        if(!strcmp("Decremento",$calculo)){
            global $numero1;
            $numero1--;
            // global $numero2;
         $result= $numero1;
            echo "<p class='resultado'>el resultado es $result </p>";

        }
    }

?>
