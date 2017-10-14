<!DOCTYPE HTML>
<HTML lang="es">
	<HEAD>
	<meta charset="utf-8"/>
	<title>CALCULADORA</title>
	<link rel="stylesheet" type="text/css"href="css/style.css"/>
	</HEAD>
	<BODY>
	
	<DIV> 
	<table class="table">
	<tr>
    <td><img src="img/calc.png" width="150px" height="100px" /></td>
    <td>Calculadora Básica</td>
    <td><img src="img/calc.png" width="150px" height="100px" /></td>
    </tr>
	</table>
	</DIV>
    
	<DIV class="proceso"> 
	
	<form action="procesar.php" method="post" >
   <select name="operacion" >
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicacion</option>
				<option value="division">Division</option>
				</select><br />
 Ingrese el Valor 1:<br>
  <input type="text" name="valoruno" placeholder="Introduce El Valor">
  <br>
  Ingrese el Valor 2:<br>
  <input type="text" name="valordos" placeholder="Introduce El Valor">
  <br>
   <input type="submit" value="Calcular">
      </form> 
		</DIV>
	  <div class="piedepagina">
	  <p>UNIVERSIDAD AUTONOMA DE CHIAPAS</p>
	  <p>LICENCIATURA EN SISTEMAS COMPUTACIONALES</p>
	  <p>HECHO POR: MARIO LUIS MORALES ALBORES</p>
	  <p>5° B</p>
	  
	  </div>
	</BODY>
    </HTML>