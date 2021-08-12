<?php
require_once 'jax.token.manager.php';
if(isset($_GET['hash']) && isset($_GET['sal'])){
    header("HTTP/1.1 200 OK");
    header("Content-Type: application/json; ");
    echo '{"res":'.(validarToken($_GET['hash'], $_GET['sal'])?"true":"false").'}';
    die();
}
?>