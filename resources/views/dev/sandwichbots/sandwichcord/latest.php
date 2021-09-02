<?php
    $url = '';
    if(isset($_GET['q'])){
        $url .= '?'.$_GET['q'];
        if(isset($_GET['legacy'])){
            $url .= '&'.$_GET['legacy'];
        }
    }
    header('Location: http://docs.jaxsandwich.com/sandwichcord/latest'.$url);
    exit();
?>