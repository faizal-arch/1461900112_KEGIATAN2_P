<?php
use App\Http\Controllers\perpusController;
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

Route::get('/', function () {
return view ('welcome');	
});
	Route::get('/menu', [perpusController::class,'menu']);
	Route::get('/perpus', [perpusController::class,'index']); 
	Route::get('/pinjam', [perpusController::class,'pinjam']);
