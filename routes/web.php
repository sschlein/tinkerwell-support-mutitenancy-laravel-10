<?php

use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create/user', function () {
    dump(app('currentTenant'));

    $user = User::updateOrCreate([
        'email' => 'sebastian@tenant1.com',
    ], [
        'name' => 'Seb',
        'password' => bcrypt('secret'),
    ]);

    dump($user);
});
