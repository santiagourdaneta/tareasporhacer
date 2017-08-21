<?php
/*
Ruta inicial
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('tasks', 'TaskController');