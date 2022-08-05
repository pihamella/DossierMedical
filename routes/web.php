<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\SigneController;
use App\Http\Controllers\TraitementController;
use App\Http\Controllers\HospitalisationController;
use App\Http\Controllers\ConstanteController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\TypeConsultationController;
use App\Http\Controllers\FrontController;

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

//error pages
Route::match(['get', 'post'], '404', 'App\Http\Controllers\FrontController@error404');
Route::match(['get', 'post'], '500', 'App\Http\Controllers\FrontController@error500');

Route::get('/', [FrontController::class, 'index'])->name('login');
Route::post('/login', [FrontController::class, 'login'])->name('login.store');

Route::match(['get', 'post'], '/logout', 'App\Http\Controllers\FrontController@logout');
Route::match(['get', 'post'], 'admin/new-user', 'App\Http\Controllers\FrontController@register');
Route::match(['get', 'post'], '/admin/dashboard', 'App\Http\Controllers\FrontController@dashboard');
Route::match(['get', 'post'], 'admin/all-admin', 'App\Http\Controllers\FrontController@viewAdmins');
Route::match(['get', 'post'], 'admin/all-admin', 'App\Http\Controllers\FrontController@viewAdmins');

Route::group(['middleware' => ['auth']], function() {
    //patients
    Route::get('/patients', [PatientController::class, 'index'])->name('patient.index');
    Route::get('/patient/creer', [PatientController::class, 'create'])->name('patient.create');
    Route::post('/patient/store', [PatientController::class, 'store'])->name('patient.store');
    Route::get('/patient/edit/{patient}', [PatientController::class, 'edit'])->name('patient.edit');
    Route::post('/patient/update/{patient}', [PatientController::class, 'update'])->name('patient.update');
    Route::delete('/patient/delete/{patient}', [PatientController::class, 'destroy'])->name('patient.delete');

    //type consultations
    Route::get('/type_consultation', [TypeconsultationController::class, 'index'])->name('type_consultation.index');
    Route::get('/type_consultation/creer', [TypeconsultationController::class, 'create'])->name('type_consultation.create');
    Route::post('/type_consultation/store', [TypeconsultationController::class, 'store'])->name('type_consultation.store');
    Route::get('/type_consultation/edit/{type_consultation}', [TypeconsultationController::class, 'edit'])->name('type_consultation.edit');
    Route::post('/type_consultation/update/{type_consultation}', [TypeconsultationController::class, 'update'])->name('type_consultation.update');
    Route::delete('/type_consultation/delete/{type_consultation}', [TypeconsultationController::class, 'destroy'])->name('type_consultation.delete');

    // constantes
    Route::get('/constantes', [ConstanteController::class, 'index'])->name('constante.index');
    Route::get('/constante/creer', [ConstanteController::class, 'create'])->name('constante.create');
    Route::post('/constante/store', [ConstanteController::class, 'store'])->name('constante.store');
    Route::get('/constante/edit/{constante}', [ConstanteController::class, 'edit'])->name('constante.edit');
    Route::post('/constante/update/{constante}', [ConstanteController::class, 'update'])->name('constante.update');
    Route::delete('/constante/delete/{constante}', [ConstanteController::class, 'destroy'])->name('constante.delete');


 // signes
    Route::get('/signes', [SigneController::class, 'index'])->name('signe.index');
    Route::get('/signe/creer', [SigneController::class, 'create'])->name('signe.create');
    Route::post('/signe/store', [SigneController::class, 'store'])->name('signe.store');
    Route::get('/signe/edit/{signe}', [SigneController::class, 'edit'])->name('signe.edit');
    Route::post('/signe/update/{signe}', [SigneController::class, 'update'])->name('signe.update');
    Route::delete('/signe/delete/{signe}', [SigneController::class, 'destroy'])->name('signe.delete');


// prescriptions
    Route::get('/prescriptions', [PrescriptionController::class, 'index'])->name('prescription.index');
    Route::get('/prescription/creer', [PrescriptionController::class, 'create'])->name('prescription.create');
    Route::post('/prescription/store', [PrescriptionController::class, 'store'])->name('prescription.store');
    Route::get('/prescription/edit/{prescription}', [PrescriptionController::class, 'edit'])->name('prescription.edit');
    Route::post('/prescription/update/{prescription}', [PrescriptionController::class, 'update'])->name('prescription.update');
    Route::delete('/prescription/delete/{prescription}', [PrescriptionController::class, 'destroy'])->name('prescription.delete');

    // traitements
    Route::get('/traitements', [TraitementController::class, 'index'])->name('traitement.index');
    Route::get('/traitement/creer', [TraitementController::class, 'create'])->name('traitement.create');
    Route::post('/traitement/store', [TraitementController::class, 'store'])->name('traitement.store');
    Route::get('/traitement/edit/{traitement}', [TraitementController::class, 'edit'])->name('traitement.edit');
    Route::post('/traitement/update/{traitement}', [TraitementController::class, 'update'])->name('traitement.update');
    Route::delete('/traitement/delete/{traitement}', [TraitementController::class, 'destroy'])->name('traitement.delete'); 

    // analyses
    Route::get('/analyses', [AnalyseController::class, 'index'])->name('analyse.index');
    Route::get('/analyse/creer', [AnalyseController::class, 'create'])->name('analyse.create');
    Route::post('/analyse/store', [AnalyseController::class, 'store'])->name('analyse.store');
    Route::get('/analyse/edit/{analyse}', [AnalyseController::class, 'edit'])->name('analyse.edit');
    Route::post('/analyse/update/{analyse}', [AnalyseController::class, 'update'])->name('analyse.update');
    Route::delete('/analyse/delete/{analyse}', [AnalyseController::class, 'destroy'])->name('analyse.delete'); 

});

