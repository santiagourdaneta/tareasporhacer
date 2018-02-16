<?php
// Ruta para landing
Route::get('/', function () {
    return view('dashboard');
});
// Fin de ruta landing

 

//Ruta para tareas
Route::resource('tasks', 'TaskController', ['except' => 'create', 'edit']);
// Fin de rutas de tareas


Route::get('/home', 'HomeController@index')->name('home');
