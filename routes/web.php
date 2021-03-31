<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
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
Route::get('/', [MenuController::class, 'index']);
Route::get('/add', [MenuController::class, 'create']);
Route::get('/menu/edit/{id}', [MenuController::class, 'edit']);
Route::get('/menu/delete/{id}', [MenuController::class, 'destroy']);

Route::post('/menuadd', [MenuController::class, 'store']);
Route::post('/menu/update', [MenuController::class, 'update']);

Route::resource('landingpage', 'LandingPageController');


//biasa di gunakan untuk membedakan punya Admin dan User
Route::prefix('admin') //awalan di url | ex. 127.0.0.1:8000/admin/ {nama resource}
        ->namespace('Admin') //nama folder di dalam controller | ex. Admin
        ->group(function(){
            
            Route::resources([ //kegunaan sama seperti resource
                'book' => 'BookController', 
                'detailbook' => 'DetailBookController',
                // 'ex2' => 'example2Controlelr',
                // 'ex3' => 'example3Controlelr',
                // 'ex4' => 'example4Controlelr',
            ]);

            Route::resource('user', 'UserController');
        });

