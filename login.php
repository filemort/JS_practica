<?php

$contra_entrar="5678";
$usu_entrar="Pepe";

$el_usuario=isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];

$la_contra=isset($_GET['contra']) ? $_GET['contra'] : $_POST['contra'];

if ($el_usuario == $usu_entrar && $la_contra == $contra_entrar) {
    echo 'validado';
} else {
    echo 'fallo de autenticación';
}

?>