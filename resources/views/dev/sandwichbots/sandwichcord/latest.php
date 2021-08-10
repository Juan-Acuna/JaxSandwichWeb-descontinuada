<?php
    $LATEST_VER = 'v0.7.0';
    $LATEST_VER_LEGACY = 'v0.7.0';
    if(isset($_GET['q'])){
        $url = $_GET['q'];
        if(isset($_GET['legacy'])){
            if(str_starts_with($url, '/javadoc/com/jaxsandwich/sandwichcord/')){
                header('Location: http://docs.jaxsandwich.com/sandwichcord/'.$LATEST_VER_LEGACY.$url);
                exit();
            }else{
                exit();
            }
        }else{
            #no implementado aun.
        }
    }else{
        header('Location: http://docs.jaxsandwich.com/sandwichcord/'.$LATEST_VER.'/javadoc');
        exit();
    }
?>