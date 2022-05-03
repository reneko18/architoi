<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ProfessionalController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProfessionController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\ProfilController;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/inscription-espace-pro', function () {
    return view('sign');
});
Route::get('/politique-de-confidentialite', function () {
    return view('terms');
});
Route::get('/conditions-generales-utilisation', function () {
    return view('conditions');
});

/*Route pour chaque profil sur le frontend*/
Route::get('/profil/{professional}', [ProfilController::class, 'show']);

/*Route pour chaque projet sur le frontend*/

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
Route::resource('project',ProjectController::class);
