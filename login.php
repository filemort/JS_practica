<?php

$contra_entrar="1234";
$usu_entrar="Juan";

$el_usuario=isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];

$la_contra=isset($_GET['contra']) ? $_GET['contra'] : $_POST['contra'];
echo "<pre>";
    print_r($el_usuario);
    print_r($la_contra);
echo "</pre>";    

if ($el_usuario == $usu_entrar && $la_contra == $contra_entrar) {
    echo 'validado';
} else {
    echo 'fallo de autenticación';
}

?>