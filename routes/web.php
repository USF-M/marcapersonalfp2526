<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/', function () {
    return 'Pantalla principal';
});

Route::get('/login', function () {
    return 'Login usuario';
});

Route::get('/logout', function () {
    return 'Logout usuario';
});

Route::prefix('/proyectos')->group(function () {
    Route::get('/', function () {
        return 'Listado proyectos';
    });
    Route::get('show/{id}')->group(function ($id) {

        return "Vista detalle proyecto $id";

    });
    Route::get('/create', function () {
        return "Añadir proyecto";
    });

    Route::prefix('/edit/{id}')->group(function ($id = null) {

        return "Modificar proyecto $id";

    });
});



Route::prefix('/perfil')->group(function () {

    Route::get('/', function () {
        return 'Visualizar el currículo propio';
    });
    Route::get('/{id}', function ($id) {
        if(is_numeric($id)){
            return "Visualizar el currículo de $id";
        }
        return 'Visualizar el currículo propio';
    });

});
