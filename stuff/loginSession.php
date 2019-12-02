<?php

$user = "admin";
$pass = "1234";

session_start();
if($_POST['username']==$user && $_POST['password']==$pass){
    $_SESSION['login'] = 'administrador';
    echo 'Sesion creada';
    echo '<br><br><img src="imagenes/admin.png" />';
} else{
    echo 'Usuario o contraseña incorrecto';
    echo '<br> <br><img src="imagenes/noAdmin.png" />';
}

?>

