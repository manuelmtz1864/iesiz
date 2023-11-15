<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\HashingController;
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

Route::get('/alumnos/inicio',  [CertificateController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos/titulacion',  [CertificateController::class, 'alumnosTitulacion'])->name('alumnosTitulacion');
Route::get('/certificates/verificacion/{folio}',  [CertificateController::class, 'show'])->name('certificates.show');
Route::get('/alumnos/qrCode/{folio}',  [CertificateController::class, 'generarCodigoQR'])->name('generarCodigoQR');


Route::get('hash-range/{start}/{end}', [HashingController::class, 'hashRange']);
