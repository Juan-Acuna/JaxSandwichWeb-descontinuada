<?php
    if(str_ends_with($_REQUEST['REQUEST_URI'],'$')){
        header('Location : //jaxsandwich.com'.substr($_REQUEST['REQUEST_URI'],0,-1));
    }else{
        var_dump($_REQUEST);
        echo '<br><br>*************************************<br><br>';
        var_dump($_SERVER);
    }
?>