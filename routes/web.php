<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'welcome';
});


Route::post('foo/bar',	function() {			
        return	'¡Hola	mundo!';
     });
     
     
Route::get('user/{id}',	function($id) {			
    	return	'User	'.$id; });


        Route::get('ur/{id}',	function($id) {			
            return	'User	'.$id; });