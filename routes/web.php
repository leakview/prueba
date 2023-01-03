<?php

use App\Models\Alumnos;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\ProfesorController;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;  
/////  
use App\Exports\alumnosExport; 
use App\Exports\rangoExport; 
use App\Exports\rango2Export;
use App\Exports\rango3Export;

use Illuminate\Support\Facades\DB;
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
    return view('auth.login');
});

/* Route::get('/Alumnos', function () {
    return view('Alumnos.index');
});*/

/* Route::get('/Alumnos/create', [AlumnosController::class, 'create']);   */
Route::get('/Alumnos/show/{id}', [AlumnosController::class, 'show'])->name('show');

Route::resource('Alumnos', AlumnosController::class)->middleware('auth');

Auth::routes(['registrer'=>false, 'reset'=>false]);

Route::get('/home', [AlumnosController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [AlumnosController::class, 'index'])->name('home');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
///////////////////////
Route::resource('profesor', ProfesorController::class)->middleware('auth');


/////////////////////////////////////////////////////////////////////////

Route::get('pruebatec/exportexcel', function () {
    return Excel::download(new alumnosExport,'users.xlsx');
});

Route::get('/pruebatec/exportcsv', function () {
    return Excel::download(new alumnosExport, 'users.csv');
});
 
Route::get('/pruebatec/exportpdf', function () {
    return Excel::download(new alumnosExport, 'users.pdf');
});

/* -------------------------------------------------------------- */
Route::get('/pruebatec/rango1pdf', function () {
    return Excel::download(new rangoExport, 'rango1.pdf');
});
 
Route::get('/pruebatec/rango1exc', function () {
    return Excel::download(new rangoExport, 'rango1.xlsx');
});

Route::get('/pruebatec/rango1csv', function () {
    return Excel::download(new rangoExport, 'rango1.csv');
});
/* ------------------------------------------------------------- */
Route::get('/pruebatec/rango2pdf', function () {
    return Excel::download(new rango2Export, 'rango2.pdf');
});
 
Route::get('/pruebatec/rango2exc', function () {
    return Excel::download(new rango2Export, 'rango2.xlsx');
});

Route::get('/pruebatec/rango2csv', function () {
    return Excel::download(new rango2Export, 'rango2.csv');
});
/* ------------------------------------------------------------- */
Route::get('/pruebatec/rango3pdf', function () {
    return Excel::download(new rango3Export, 'rango3.pdf');
});
 
Route::get('/pruebatec/rango3exc', function () {
    return Excel::download(new rango3Export, 'rango3.xlsx');
});

Route::get('/pruebatec/rango3csv', function () {
    return Excel::download(new rango3Export, 'rango3.csv');
});
/* ------------------------------------------------------------- */

Route::get('/profesor', [ProfesorController::class, 'index']);

Route::get('/profesor/show/{id}', [ProfesorController::class, 'show']);

/* ------------------------------------------------- */