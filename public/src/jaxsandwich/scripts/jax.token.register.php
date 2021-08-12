<?php
require_once 'jax.token.manager.php';
if(isset($_GET['hash']) && isset($_GET['sal']) && isset($_GET['new'])){
    if(validarToken($_GET['hash'], $_GET['sal'])){
        if(validarToken($_GET['new'], $_GET['sal'])){
            echo '{"res":false,"error":"Ya registrado."}';
            die();
        }
        $f = fopen(TOKEN_FILE,"a");
        $b = fwrite($f,"\n".hash_hmac('sha256', $_GET['new'], $_GET['sal']));
        echo '{"res":'.($b?"true":"false").',"error":"'.($b?"Registrado.":"No registrado.").'"}';
        die();
    }
}
?>