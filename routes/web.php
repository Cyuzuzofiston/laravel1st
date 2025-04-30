<?php


use App\Models\Task;
use App\Http\Controllers\cyphi;
use App\Http\Controllers\task1;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $task = []; // Initialize $task as an empty array by default
    if(Auth::check()){
        $task = Auth::user()->taskcard;
    }
    return view('home',['task' => $task]);
});

Route::get('/register', function(){
    return view('register');
});

Route::post('/register', [cyphi::class, 'register']);

Route::get('/login', function(){
    return view('login');
});


Route::post('/login', [cyphi::class, 'login']);
Route::post('/logout', [cyphi::class, 'logout']);
Route::post('/task', [task1::class, 'attendance']);


