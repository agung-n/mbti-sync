<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Psytest;
use App\Http\Livewire\Schedule;
use App\Http\Livewire\Teacherlist;
use App\Http\Livewire\Question;
use App\Http\Livewire\Biodata;


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

Route::get('/question', Question::class);

Route::get('/biodata', Biodata::class);


Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
