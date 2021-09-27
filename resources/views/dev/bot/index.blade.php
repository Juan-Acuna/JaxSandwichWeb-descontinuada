@extends('layouts.base')
@section('title','Jax Sandwich Bot')
@section('content')
    <div class="row mb-3">
        <div class="col-xs-12 text-center p-3"><h1>¡Bienvenidos a la página oficial de Jax Sandwich Bot!</h1></div>
    </div>
    <div class="row mt-3">
        <div class="col-xs-12 col-md-6 p-3">
            <div class="tarjeta p-5 bg-white text-dark">
                <h4>Invitar a Jax Sandwich a tu servidor</h4>
                <p>Haz click
                    <a href="https://discord.com/api/oauth2/authorize?client_id=804147434455564288&permissions=8&scope=bot%20applications.commands">en este enlace</a>
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
@endsection