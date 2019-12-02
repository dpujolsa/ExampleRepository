<?php
session_start();


if(session_status() == PHP_SESSION_DISABLED){
    echo "Sesion Disabled <br>";
}else{
    echo "Sesion activa <br>";
}

if(isset($_SESSION['login'])){
    echo 'Bienvenido session '.$_SESSION['login'];
}else{
    echo 'Sin sesion';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="stuff/loginSession.php">
        Usuario: <input type="text" name="username" /> <br>
        Contraseña: <input type="password" name="password" /> <br>
        <input type="submit" name="submit" /> <br>
    </form>
</body>
</html>