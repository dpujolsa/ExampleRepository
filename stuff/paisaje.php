<?php 
	if ($_POST["paisaje"] == "Mar") {
        echo '<br><br><img src="imagenes/mar.jpg" />';
    }elseif ($_POST["paisaje"] == "Montaña"){
        echo '<br><br><img src="imagenes/montaña.jpg" />';
    }else{
        echo 'Has seleccionada nada';
    }
?>