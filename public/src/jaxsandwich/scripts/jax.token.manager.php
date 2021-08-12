<?php
define('TOKEN_FILE','.tokens');
define('AUTHORIZED_TOKENS', 
        file(TOKEN_FILE, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));
function validarToken($hash, $sal){
    $res = hash_hmac('sha256', $hash, $sal);
    $b = false;
    foreach(AUTHORIZED_TOKENS as $t){
        if($res == $t){
            $b = true;
        }
    }
    return $b;
}
?>