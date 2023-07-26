<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//All listings
Route::get('/', [ListingController::class, 'index' ]);
 
//Show Create Form
Route::get('/listings/create',[ListingController::class,'create'])->middleware('auth');

//Store Listing Data
Route::post('/listings',[ListingController::class,'store'])->middleware('auth');

//Show Edit Form
Route::put('/listings/{listing}',[ListingController::class, 'update'])->middleware('auth');

//Update Listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Delete Listing
Route::get('/listings/{listing}/delete', [ListingController::class, 'destroy'])->middleware('auth');
//Single Listing
Route::get('listings/{listing}', [ListingController::class, 'show']);

//Show Regiser/Create Form
Route::get('/register',[UserController::class,'create']);
//crate New User
Route::post('/users',[UserController::class,'store']);
//Show Login Form
Route::get('/login',[UserController::class,'login'])->name('login');
//log user out 
Route::post('/logout',[UserController::class,'logout']);
//log in user
Route::post('/users/authenticate',[UserController::class,'authenticate']);