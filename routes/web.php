<?php

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


use App\Http\Controllers\TokoController;



route::prefix('toko')->group(function(){


    route::get('/',
        [TokoController::class, 'index']);

    route::get('/detail',
        [TokoController::class, 'detail']);

    route::get('/about',
        [TokoController::class, 'about']);

    route::group(['middleware' => ['auth']], function(){
        route::get('/admin',
        [TokoController::class, 'admin'])->name('produk.admin');

        route::get('/create',
        [TokoController::class, 'create'])->name('produk.create');

        route::post('/',
        [TokoController::class, 'store'])->name('produk.store');

        route::get('/{product}/edit',
        [TokoController::class, 'edit'])->name('produk.edit');

        route::delete('/{product}',
        [TokoController::class, 'destroy'])->name('produk.destroy'); 

        route::put('/{product}',
        [TokoController::class, 'update'])->name('produk.update');

        Route::get('/customers', 
        [TokoController::class, 'customers'])->name('produk.customers');

        Route::get('AddCustomer', 
        [TokoController::class, 'AddCustomer'])->name('produk.AddCustomer');
        
        Route::post('NewCustomer', 
        [TokoController::class, 'NewCustomer'])->name('produk.NewCustomer');
    });    

    
    
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
