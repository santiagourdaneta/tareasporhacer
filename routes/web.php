<?php
// Ruta para landing
Route::get('/', function () {
    return view('dashboard');
});
// Fin de ruta landing

// Rutas para manejo de usuarios
Auth::routes();
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');
//Fin de rutas para manejos de usuarios

//Ruta para tareas
Route::resource('tasks', 'TaskController', ['except' => 'create', 'edit']);
// Fin de rutas de tareas


Route::get('/home', 'HomeController@index')->name('home');
