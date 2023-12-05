<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;


//Route::get('search_data' , [App\Http\Controllers\FormController::class , 'search_data']);






 
Route::get('/', function () {
    return view('welcome');
});
 
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});

//Crud Opt Route
Route::get('form', function(){

return view('form');
});

//Storing Data
Route::post('store_data' ,[App\Http\Controllers\FormController::class ,'store_data']);

//Fetching Data
Route::get('records' ,[App\Http\Controllers\FormController::class, 'records']);

//Delete
Route::get('delete_record/{id}',[App\Http\Controllers\FormController::class ,'delete_record']);

//edit_record
Route::get('edit_record/{id}',[App\Http\Controllers\FormController::class ,'edit_record']);
//NEW ROUTE FOR UPDATED DATA
Route::post('update_data/{id}',[App\Http\Controllers\FormController::class ,'update_data']);

