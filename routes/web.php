<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User82Controller;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Routing untuk proses autentikasi
|--------------------------------------------------------------------------
*/

Route::get('/logout82', [User82Controller::class, 'logout82']);
Route::post('/register82', [User82Controller::class, 'register82']);
Route::post('/login82', [User82Controller::class, 'login82']);
Route::put('/lupaPassword82', [User82Controller::class, 'lupaPassword82']);

/*
|--------------------------------------------------------------------------
| Routing untuk display halaman
|--------------------------------------------------------------------------
*/

Route::get('/', [User82Controller::class, 'loginView82'])->middleware('isLogged');
Route::get('/user/profile82', [User82Controller::class, 'userView82'])->middleware('isUser');
Route::get('/register82', [User82Controller::class, 'registerView82']);
Route::get('/admin/dashboard82', [User82Controller::class, 'adminView82'])->middleware('isAdmin');
Route::get('/admin/agama82', [User82Controller::class, 'agamaView82'])->middleware('isAdmin');
Route::get('/user/lupaPassword82', [User82Controller::class, 'lupaPasswordView82']);

/*
|--------------------------------------------------------------------------
| Routing untuk proses CRUD
|--------------------------------------------------------------------------
*/

Route::put('/updateData82', [User82Controller::class, 'updateData82']);
Route::put('/setIsAktif82/{id}', [User82Controller::class, 'setIsAktif82'])->middleware('isAdmin');
Route::get('/detailUser82/{id}', [User82Controller::class, 'detailUser82']);
Route::post('/tambahAgama82', [User82Controller::class, 'tambahAgama82']);
Route::put('/updateAgama82/{id}', [User82Controller::class, 'updateAgama82']);
Route::get('/hapusAgama82/{id}', [User82Controller::class, 'hapusAgama82']);