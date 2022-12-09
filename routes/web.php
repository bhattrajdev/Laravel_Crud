<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

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


Route::post('/addevent',[ApplicationController::class,'responseaddevent'])->name('responseaddevent');
Route::get('/addevent',[ApplicationController::class,'addevent'])->name('addevent');

Route::get('/viewevent',[ApplicationController::class,'viewevent'])->name('viewevent');
Route::get('/viewevent/delete/id={id}',[ApplicationController::class,'deleteevent']);

Route::get('/viewevent/edit/id={id}',[ApplicationController::class,'edit']);
Route::post('/viewevent/edit/id={id}',[ApplicationController::class,'updateEvent']);




Route::post('/addtestpreperation',[ApplicationController::class,'responsetestpreperation']);
Route::get('/addtestpreperation',[ApplicationController::class,'testpreperation'])->name('testpreperation');

Route::get('/viewtestpreperation',[ApplicationController::class,'viewtestpreperation'])->name('viewtestpreperation');
Route::get('/viewevent/delete/id={id}',[ApplicationController::class,'deleteevent']);

Route::get('/viewtestpreperation/delete/id={id}',[ApplicationController::class,'deletetestpre']);


Route::get('/viewtestpreperation/edit/id={id}',[ApplicationController::class,'edittestpre']);
Route::post('/viewtestpreperation/edit/id={id}',[ApplicationController::class,'updatetestpre']);





