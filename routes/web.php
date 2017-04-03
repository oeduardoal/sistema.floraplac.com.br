<?php

Route::get('/api/lista', 'Api@lista');
Route::get('/api/estados', 'Api@estados');
Route::get('/api/data_floraplac', 'Api@data_floraplac');

Auth::routes();


Route::get('/', function () {
    return redirect('login');
});

// API 

		
// Index
Route::get('/representantes', 'Representantes@index')->middleware('auth');
Route::get('/floraplac', 'Representantes@floraplac')->middleware('auth');

// Actions
Route::post('/representantes', 'Representantes@save')->middleware('auth');

Route::post('/representantes/{id}/update', 'Representantes@update')->middleware('auth');
Route::get('/representantes/{id}/edit', 'Representantes@find')->middleware('auth');
Route::delete('/representantes/{id}/delete', 'Representantes@delete')->middleware('auth');

Route::post('/floraplac/{id}/update', 'Representantes@update_f')->middleware('auth');
Route::get('/floraplac/{id}/edit', 'Representantes@find_f')->middleware('auth');
Route::delete('/floraplac/{id}/delete', 'Representantes@delete_f')->middleware('auth');
