<?php
use App\Http\Controllers\EventsController;
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

Route::resource('events', 'EventsController');
Route::get('/',[EventsController::class, 'index']);

Route::get('/about',[EventsController::class, 'about'])->name('about');

Route::get('/contact',[EventsController::class, 'contact'])->name ('contact');