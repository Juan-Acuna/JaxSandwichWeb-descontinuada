<?php
    echo '**************************************';
    echo 'URL: ';
    var_dump($_REQUEST[0]);
    var_dump($_REQUEST[26]);
    var_dump($_REQUEST["REQUEST_URI"]);
    echo '**************************************<br><br>';
    if(str_ends_with($_REQUEST["REQUEST_URI"],'$')){
        header('Location : //jaxsandwich.com'.substr($_REQUEST["REQUEST_URI"],0,-1));
        exit();
    }else{
        var_dump($_REQUEST);
        echo '<br><br>*************************************<br><br>';
        var_dump($_SERVER);
    }
?>