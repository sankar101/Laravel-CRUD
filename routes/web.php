<?php

use App\Http\Controllers\Dash\StudentListController;
use App\Http\Controllers\StudentLoginController;
use App\Http\Controllers\StudentRegisterController;
use App\Http\Controllers\StudentUpdateController;
use App\Http\Controllers\StudentViewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('Stud.sturegister');
});

//Student register
Route::view('sturegister','Stud.sturegister')->name('sturegister');
Route::post('sregister',[StudentRegisterController::class,'sregister']);

//Student Login
Route::view('stulogin','Stud.stulogin')->name('stulogin');
Route::post('Sauthenticate',[StudentLoginController::class,'Sauthenticate']);

//Student list
Route::view('Studentlist','Dash.Studentlist')->name('Studentlist');
Route::get('Studentlist',[StudentListController::class,'stud_list']);

//Student delete
Route::get('delete/{id}',[StudentListController::class,'delete']);

//updatee - use/not use
Route::get('users/{id}',[StudentListController::class,'updatee']);

//Student view
Route::view('stuview','Dash.stuview')->name('stuview');
Route::get('Dash.stuview/{id}',[StudentViewController::class,'view'])->name('student.view');

//Student edit
Route::view('stuedit','Dash.stuedit')->name('stuedit');
//Edit studentview
Route::get('edit-student/{id}',[StudentUpdateController::class,'edit'])->name('edit-student');
//update student data
Route::put('update-student/{id}',[StudentUpdateController::class,'update'])->name('update-student');