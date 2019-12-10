<?php

$user = "admin";
$pass = "1234";

session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Operadores Aritm&eacute;meticos</title>
	</head>
<body>

<?php

    if($_POST['username']==$user && $_POST['password']==$pass){
        $_SESSION['login'] = 'administrador';
        echo 'Sesion de administrador creada';
        echo '<br><br><img src="imagenes/admin.png" />';
        echo '<h1>Calculadora</h1>
		<form action="resultado.php" method="post">
			<select name="operador">
				<option value="suma">Suma</option>
				<option value="resta">Resta</option>
				<option value="multiplicacion">Multiplicaci&oacute;n</option>
				<option value="division">Divisi&oacute;n</option>
			</select><br />
			Ingresa tu primer n&uacute;mero:<br />
			<input type="text" name="valor1"><br />
			Ingresa tu segundo valor:<br />
			<input type="text" name="valor2"><br>
			<input type="reset" value="Borrar">
			<input type="submit" value="Enviar">
		</form>
		<h1>Selecciona paisaje</h1>
		<form action="paisaje.php" method="post">
			<select name="paisaje">
				<option value="Mar">Mar</option>
				<option value="Montaña">Montaña</option>
				<option value="Nada">Nada</option>
			</select><br />
			<input type="submit" value="Enviar">
        </form>
	</body>';
    } else{
        echo 'Usuario o contraseña incorrecto';
        echo '<br> <br><img src="imagenes/noAdmin.png" />';
    }

?>	
		
</html>