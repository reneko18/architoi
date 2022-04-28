<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ProfessionalController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProfessionController;

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
/*Routes pour les professionals*/
Route::resource('professional',ProfessionalController::class);
/*Routes pour les catégories*/
Route::resource('category',CategoryController::class);
/*Routes pour les professions*/
Route::resource('profession',ProfessionController::class);

/*Routes pour les projets*/
Route::get('/admin/projets', function(){
  return view('admin.projects.index');
})->name('projets');

Route::get('/admin/projets/create', function(){
  return view('admin.projects.create');
})->name('projets.create');
