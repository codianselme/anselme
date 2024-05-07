<?php

use App\Http\Controllers\AnselmeController;
use Illuminate\Support\Facades\Route;

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


// Site Web Routes

Route::get('/',      	[AnselmeController::class, 'index'])->name('index');
Route::get('contact/',  [AnselmeController::class, 'contact'])->name('contact');
Route::get('about/',    [AnselmeController::class, 'about'])->name('about');
Route::post('/envoi-message', [AnselmeController::class, 'sendMessage'])->name('send.message');
Route::post('/s-abonner', [AnselmeController::class, 'souscribe'])->name('souscribe');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('home', function () {
//     return view('home');
// });

// Route::get('contact', function () {
//     return view('contact');
// });

// Route::get('about', function () {
//     return view('about');
// });

// Route::group(['prefix' => '/', 'namespace' => 'App\Http\Controllers'], function () 
// {    
//     //  Routes
//     Route::resource('', PanelController::class)->names([
//         'index' 	=> 'panel.index',
//         'destroy' 	=> 'panel.destroy',
//         'create' 	=> 'panel.create',
//         'store' 	=> 'panel.store',
//         'show' 		=> 'panel.show',
//         'edit' 		=> 'panel.edit',
//         'update' 	=> 'panel.update',
//     ]);
// });


