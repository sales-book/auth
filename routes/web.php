<?php

//use App\Models\User;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/registration');

Route::view('registration', 'registration.index')->name('registration');

Route::view('pricing', 'pricing')->name('pricing');

$user = User::query()->first();
$user->email;
/*
Route::get('/', function () {
    return view('welcome');
});*/
