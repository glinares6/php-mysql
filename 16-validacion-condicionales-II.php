<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
// validacion clase 16
	// if anidados-> if que estea dentro de otro if
	// if else -> ignora todo lo demas una vez que encuentra la condicion verdadera
	if(isset($_POST["enviando"])){
		$contra=$_POST["contra_usuario"];
        $nombre=$_POST["nombre_usuario"];
		// if($edad<=18){
		// 	echo "eres menor de edad";
		// }else{
		// 	// en caso de no reconocer las tildes hacer &vocalacute;
		// 	echo "cuídate";
		// }
        // la estructura tradicional
        // switch ($variable) {
        //     case 'value':
        //         # code...
        //         break;
            
        //     default:
        //         # code...
        //         break;
        // }

           // validacion clase 17

            // switch (true) :
            //     case $nombre=="juan" && $contra=="1234";
            //        echo "usuario autorizado , hola juan";
            //         break;
            //     case $nombre=="maria" && $contra=="5555";
            //        echo "usuario autorizado , hola maria";
            //         break;
            //     case $nombre=="pedro" && $contra=="1111";
            //        echo "usuario autorizado , hola pedro";
            //         break;
                
            //     default:
            //        echo "usuario no autorizado";
          
            // endswitch;


            // switch con edades

//  el uso del if y switch son parecidos(condicion ) se diferencia en el tratamiento de los datos

// el uso de if(else if()) es más para el tratamiento de condiciones 
// el uso del switch es más para el tratamiento de variables o el valor de una constante


   switch (true) :
                case  $contra<=18;
                   echo "es joven";
                    break;
                case $contra<=45;
                   echo "es adulto"; 
                    break;
                case $contra<=65;
                   echo "es maduro";
                    break;
                
                default:
                   echo "cuidate";
          
            endswitch;


	}
?>