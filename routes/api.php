<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::get('/students', function(){
//     return 'All Student Info';
// });

//Public Routes

// Route::get('/students',[StudentController::class, 'index']);

// Route::get('/students/{id}',[StudentController::class, 'show']);

// Route::post('/students',[StudentController::class, 'store']);

// Route::put('/students/{id}',[StudentController::class, 'update']);

// Route::delete('/students/{id}',[StudentController::class, 'destroy']);

// Route::get('/students/search/{city}',[StudentController::class, 'search']);

Route::post('/register', [UserController::class, 'register']);

Route::post('/login', [UserController::class, 'login']);


//Protect Routes

// Route::middleware(['auth:sanctum'])->group(function(){

//     Route::middleware('auth:sanctum')->get('/students',[StudentController::class, 'index']);

//     Route::middleware('auth:sanctum')->get('/students/{id}',[StudentController::class, 'show']);

//     Route::middleware('auth:sanctum')->post('/students',[StudentController::class, 'store']);

//     Route::middleware('auth:sanctum')->put('/students/{id}',[StudentController::class, 'update']);

//     Route::middleware('auth:sanctum')->delete('/students/{id}',[StudentController::class, 'destroy']);

//     Route::middleware('auth:sanctum')->get('/students/search/{city}',[StudentController::class, 'search']);

//     Route::middleware('auth:sanctum')->post('/logout',[UserController::class, 'logout']);
// });



// Partially Protected 
//Public

    Route::get('/students',[StudentController::class, 'index']);

    Route::get('/students/{id}',[StudentController::class, 'show']);

    Route::get('/students/search/{city}',[StudentController::class, 'search']);


//Protected

    Route::middleware('auth:sanctum')->post('/students',[StudentController::class, 'store']);

    Route::middleware('auth:sanctum')->put('/students/{id}',[StudentController::class, 'update']);

    Route::middleware('auth:sanctum')->delete('/students/{id}',[StudentController::class, 'destroy']);

    Route::middleware('auth:sanctum')->post('/logout',[UserController::class, 'logout']);