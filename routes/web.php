<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
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
    return view('components.login');
});

Route::post('/login', [AccountController::class, 'actionLogin']);

Route::get('/home', function () {
    return view('master');
});


Route::get('/bangnhanvien', function () {
    return view('components.bangnhanvien');
});
Route::get('/banghopdong', function () {
    return view('components.banghopdong');
});
Route::get('/bangkhenthuong', function () {
    return view('components.bangkhenthuong');
});
Route::get('/bangkyluat', function () {
    return view('components.bangkyluat');
});
Route::get('/bangquatrinhcongtac', function () {
    return view('components.bangquatrinhcongtac');
});
Route::get('/bangbaohiem', function () {
    return view('components.bangbaohiem');
});
Route::get('/bangdieudongcongtac', function () {
    return view('components.bangdieudongcongtac');
});
Route::get('/bangphongban', function () {
    return view('components.bangphongban');
});
Route::get('/bangchucvu', function () {
    return view('components.bangchucvu');
});
Route::get('/bangtrinhdochuyenmon', function () {
    return view('components.bangtrinhdochuyenmon');
});
Route::get('/bangquanlyhopdong', function () {
    return view('components.bangquanlyhopdong');
});
Route::get('/bangquanlyluong', function () {
    return view('components.bangquanlyluong');
});