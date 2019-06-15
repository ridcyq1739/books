<?php

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
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $user = new \App\User([
        'name'=>'admin',
        'nickname'=>'admin',
        'email'=>'742316585@qq.com',
        'password'=>bcrypt('admin123'),
        'phone'=>'18731209881'
    ]);
    $user->save();
    return \App\User::all();
});
