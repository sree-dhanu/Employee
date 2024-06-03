<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\empController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[empController::class,'index']);
Route::post('/empregAction',[empController::class,'empregAction']);
Route::get('/emplogin',[empController::class,'emplogin']);
Route::post('/emploginAction',[empController::class,'emploginAction']);
Route::get('/emprofile',[empController::class,'emprofile']);
Route::get('/empprofiledit/{id}',[empController::class,'empprofiledit']);
Route::post('/emprofileupdate/{id}',[empController::class,'emprofileupdate']);
Route::get('/empprofildelete/{id}',[empController::class,'empprofildelete']);
Route::get('/logout',[empController::class,'logout']);
