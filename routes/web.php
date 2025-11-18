<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// ----------------------------------------
Route::get('login', function () {
    return view('auth.login');
});
Route::get('logout', function () {
    return "Logout usuario";
});


// ----------------------------------------
Route::prefix('proyectos')->group(function () {
    Route::get('/', function () {
        return view('proyectos.index');
    });

    Route::get('create', function () {
        return view('proyectos.create');
    });

    Route::get('/show/{id}', function ($id) {
        return view('proyectos.show', array('id'=>$id));
    }) -> where('id', '[0-9]+');

    Route::get('/edit/{id}', function ($id) {
        return view('proyectos.edit', array('id'=>$id));
    }) -> where('id', '[0-9]+');
});


// ----------------------------------------
Route::get('perfil/{id?}', function ($id = null) {
    if ($id === null)
        return 'Visualizar el currículo propio';
    return 'Visualizar el currículo de ' . $id;
}) -> where('id', '[0-9]+');

