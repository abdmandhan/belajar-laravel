<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Umkm;

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
    $umkm = Umkm::all();
    // return $umkm;
    return view('welcome',['umkm'=>$umkm]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
