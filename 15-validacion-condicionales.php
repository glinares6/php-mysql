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
	// if anidados-> if que estea dentro de otro if
	// if else -> ignora todo lo demas una vez que encuentra la condicion verdadera
	if(isset($_POST["enviando"])){
		$edad=$_POST["edad_usuario"];
		if($edad<=18){
			echo "eres menor de edad";
		}else if($edad<=40){
			echo "eres joben";
		}else if($edad<=65){
			echo "eres maduro";
		}else{
			// en caso de no reconocer las tildes hacer &vocalacute;
			echo "cuídate";
		}
	}
?>