<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;

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
    return view('welcome');
});


Route::get('/admin', function(){
  return view('admin.index');
})->name('admin.home');

/*Routes pour les utilisateurs*/
Route::resource('user',UserController::class);
/*Route::get('/admin/users', function(){
  return view('admin.users.index');
})->name('users');

Route::get('/admin/users/create', function(){
  return view('admin.users.create');
})->name('users.create');

/*Routes pour les projets*/
Route::get('/admin/projets', function(){
  return view('admin.projects.index');
})->name('projets');

Route::get('/admin/projets/create', function(){
  return view('admin.projects.create');
})->name('projets.create');

/*Routes pour les professions*/
Route::get('/admin/professions', function(){
  return view('admin.professions.index');
})->name('professions');

Route::get('/admin/professions/create', function(){
  return view('admin.professions.create');
})->name('professions.create');
