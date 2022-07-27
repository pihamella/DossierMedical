<?php

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

// Route::get('/', function () {
//     return view('layouts.layout_design.blade');
// });

Route::match(['get', 'post'], '/', 'App\Http\Controllers\FrontController@index');
Route::get ('/inscription', function(){

return view ('welcome');
});

Route::get ('/patient', function(){

    return view ('patient');
    });

    Route::get ('/analyse', function(){

        return view ('analyse');
        });

     Route::get ('/constante', function(){

            return view ('constante');
            });

    Route::get ('/consultation', function(){

                return view ('consultation');
                });
                Route::get ('/signe', function(){

                    return view ('signe');
                    });
                    Route::get ('/traitement', function(){

                        return view ('traitement');
                        });
                    
    

