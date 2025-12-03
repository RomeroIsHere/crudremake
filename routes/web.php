<?php
use Illuminate\Support\Facades\Route;
use App\http\controllers\MenuController;

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

Route::get('/Especialidades', function (){
    return view('specials');
})->name('Specials');
// {{ route('Specials') }}

Route::get('/Contacto', function (){
    return view('contact');
})->name('Contact');
// {{ route('Contact') }}