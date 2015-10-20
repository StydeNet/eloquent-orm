<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use EloquentORM\User;

Route::get('/create', function () {
    
    $user = User::create([
        'name' => 'Lynda Morales',
        'email' => 'l@italomoralesf.com',
        'password' => bcrypt('123456'),
        'gender' => 'f',
        'biography' => 'Alumna de PHP'
    ]);
    
    return 'Usuario Guardado';
    
});

Route::get('/update-user', function () {
    
    $user = User::find(1);
    
    $user->gender = 'm';
    $user->biography = 'Profesor de Programación';
    
    $user->save();
    
    return 'Usuario Actualizado';
    
});
