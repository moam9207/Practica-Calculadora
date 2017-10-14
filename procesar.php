<?php
	echo "<font size='10' face='Arial'>";
	$valoruno= $_POST['valoruno'];
	$valordos= $_POST['valordos'];
	$operador= $_POST['operacion'];
	
	
		if ( $operador == "suma")
		{
			echo 'El resultado de la suma es: <br>';
			echo $resultado = $valoruno + $valordos;
			echo '<br /><a href="index.php">Volver</a>';
		}
		if ( $operador == "resta")
		{
			echo 'El resultado de la resta es: <br>';
			echo $resultado = $valoruno - $valordos;
			echo '<br /><a href="index.php">Volver</a>';
		}
		if ( $operador == "multiplicacion")
		{
			echo 'El resultado de la multiplicacion es: <br>';
			echo $resultado = $valoruno * $valordos;
			echo '<br /><a href="index.php">Volver</a>';
		}
		if ( $operador == "division")
		{
			echo 'El resultado de la division es: <br>';
			echo $resultado = $valoruno / $valordos;
			echo '<br /><a href="index.php">Volver</a>';
		}
		
		
?>