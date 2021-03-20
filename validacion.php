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
    // isset -> comprobar si se ha pulsado(elemento) el boton enviar (finción predefinida)
    // $_POST -> variable super global - arrays 
        if(isset($_POST["enviando"])){
            $usuario=$_POST["nombre_usuario"];
            $edad=$_POST["edad_usuario"];
            if($usuario=="Juan" && $edad==12){
                echo "<p class='validado'>puedes entrar</p>";
            }else{
                echo "<p class='no_validado'>no puedes entrar</p>";;
            }
        }
    ?>