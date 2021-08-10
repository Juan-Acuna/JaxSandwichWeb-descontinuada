<?php
    if(str_ends_with($_SERVER["REQUEST_URI"],'$')){
        //header('Location : //jaxsandwich.com'.substr($_SERVER["REQUEST_URI"],0,-1));
        exit();
    }else{
        var_dump($_REQUEST);
        echo '<br><br>*************************************<br><br>';
        var_dump($_SERVER);
    }
?>