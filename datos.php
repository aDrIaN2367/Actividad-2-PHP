<?php
    echo "El nombre es ".$_POST['nombre'];
    echo "<br>";
    echo "El correo es ".$_POST['correo'];
    echo "<br>";
    echo "La ciudad es ".$_POST['ciudad'];
    echo "<br>";
    setcookie($_POST['correo'],time()+3000);
?>
