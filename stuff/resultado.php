<?php 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
            print("El resultado de tu operacion ".$_POST["operador"]." es = ");
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			// print ('<br /><a href="loginSession.php">Volver</a>');
		} elseif ($_POST["operador"] == "resta") {
            print("El resultado de tu operacion ".$_POST["operador"]." es = ");
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			// print ('<br /><a href="loginSession.php">Volver</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
            print("El resultado de tu operacion ".$_POST["operador"]." es = ");
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			// print ('<br /><a href="loginSession.php">Volver</a>');
		} elseif ($_POST["operador"] == "division") {
            print("El resultado de tu operacion ".$_POST["operador"]." es = ");
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			// print ('<br /><a href="loginSession.php">Volver</a>');
		}
	} else {
		print("Ingresa alg&uacute;n valor");
		// print ('<br /><a href="loginSession.php">Volver</a>');
	}
?>