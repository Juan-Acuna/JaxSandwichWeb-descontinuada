<?php
    echo '
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jax Sandwich Bot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="shortcut icon" href="http://src.jaxsandwich.com/ico/favicon.png" type="image/x-icon" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../src/ico/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="http://src.jaxsandwich.com/css/estilo.css" crossorigin="anonymous">
    <link rel="stylesheet" href="../../src/css/estilo.css">
</head>
<body class="bg-dark text-white">';
require_once '../../src/include/navbar.html';
echo '<div class="container-fluid">
        <div class="row mb-3">
            <div class="col-xs-12 text-center p-3"><h1>¡Bienvenidos a la página oficial de Jax Sandwich Bot!</h1></div>
        </div>
        <div class="row mt-3">
            <div class="col-xs-12 col-md-6 p-3">
                <div class="tarjeta p-5 bg-white text-dark">
                    <h4>Invitar a Jax Sandwich a tu servidor</h4>
                    <p>Haz click
                        <a href="https://discord.com/api/oauth2/authorize?client_id=804147434455564288&permissions=8&scope=bot">en est enlace</a>
                    para invitar al bot a tu servidor.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 p-3">
                <div class="tarjeta p-5 bg-white text-dark">
                    <h4>Documentación</h4>
                    <p>La página sigue en construcción, por lo que el contenido no se encuentra disponible.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    ';
?>