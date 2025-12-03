<?php
use Illuminate\Support\Facades\Route;
use App\http\controllers\MenuController;
use App\http\controllers\PlateController;

// Route::get('/', function () {
//     return view('principal.welcome');
// }) ->name('inicio');

// Route::get('/redirigir', function () {
//     return redirect()->route('inicio');
// });



// Route::get('/contacto', function () {
//     return "Hola desde contacto";
// });

// Route::get('/curso/{curso}', function ($curso) {
//     return "Hola desde el curso $curso";
// });

// Route::get('/curso/{curso}/{capitulo}', function ($curso, $capitulo) {
//     return "Hola desde el curso $curso, Estas en el Capitulo $capitulo";
// });

// /* Se debe de Proteger con Expresion Regular */

// Route::get('/producto/{id}', function ($id) {
//     return "Mostrando el Producto con ID $id";
// }) -> where('id','[0-9]+');

// Route::get('/reportes/{mes}', function ($mes) {
//     return "Mostrando el Reporte del mes $mes";
// }) -> where('mes','(0[1-9]|1[0-2])');


// // Helper
// Route::get('/cliente/{id}', function ($id) {
//     return "Mostrando el Producto con ID $id";
// }) -> whereNumber('id');

// Route::get('/saludo', function (){
//     return view('saludo');
// });

// Route::get('/usuario/{nombre}', function ($nombre){
//     return view('usuario', ['nombre'=>$nombre]);
// });

// Route::get('/usuarios', function (){
//     $usuarios=['pedro','maria','nestor','toño'];
//     $producto=(object)[
//         'Nombre'=>'Laptop',
//         'Precio'=>'10,400'
//     ];
//     return view('usuarios', ['lista'=>$usuarios, 'producto'=>$producto]);
// });

// // Controller

// Route::get('/productos', [ProductosController::class,'index']);

//blade Injections
Route::get('/', function (){
    return view('homepage');
})->name('Homepage');
// {{ route('Homepage') }}

Route::get('/Menu', [MenuController::class,'index'])->name('Menu');
// {{ route('Menu') }}


// {{ route('Specials') }}

Route::get('/create', function (){
    return view('create');
})->name('Create');

Route::get('/Success', function (){
    return view('create')->with('success',true);
})->name('Create.success');

Route::get('/Failure', function (){
    return view('create')->with('failure',true);
})->name('Create.fail');

// {{ route('Create') }}
Route::post('/CreatePlate', [PlateController::class,'store'])->name('Plate.store');
Route::post('/Update/{id}', [PlateController::class,'update'])->name('Plate.update');
Route::post('/Delete/{id}', [PlateController::class,'delete'])->name('Plate.delete');
Route::get('/View/{id}', [PlateController::class,'view'])->whereNumber('id')->name('Plate.view');
