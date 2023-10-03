<!-- Archivo que procesa nuestro formulario -->

<?php 

$usuario = $_POST["login"];
$clave = $_POST["contraseña"];

if (($usuario != null) && ($clave != null)){
    if(($usuario == 'admin') && ($clave == '1234')){
        echo "<p>Perfecto, tus datos son correctos</p>";
    }
    else{
        echo "<p>Te equivocaste, tus datos son incorrectos</p>";
    }
    // echo "<p>Ingresaste tus datos</p>";
} else { 
    echo "<p>Debes colocar tus datos</p>";
}
?>