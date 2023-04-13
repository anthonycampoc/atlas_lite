<?php

use App\Models\Bunises;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {return redirect()->route('login');});

Route::post('upload/product/{id}/picture','ProductController@upload_image')->name('upload.picture');

Route::get('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);
Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);
Route::post('/evento/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);
Route::post('/evento/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);
Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);

Route::get('sales/reports_day', 'ReportController@reports_day')->name('reports.day');
Route::get('sales/reports_date', 'ReportController@reports_date')->name('reports.date');
Route::post('sales/reports_results', 'ReportController@report_results')->name('reports.results');
Route::resource('admin/categories', 'CategoriaController')->names('categories');
Route::resource('admin/clients', 'ClientController')->names('clients');
Route::resource('admin/products', 'ProductController')->names('products');
Route::resource('admin/providers', 'ProviderController')->names('providers');
Route::resource('admin/abono', 'AbonoController')->names('abonos');
Route::resource('admin/users', 'UserController')->names('users');
Route::resource('admin/roles','RoleController')->names('roles');
Route::resource('admin/purchases', 'PurchaseController')->names('purchases')->except(['destroy','update',]);
Route::resource('admin/sales', 'SaleController')->names('sales')->except(['edit','update','destroy',]);

Route::resource('admin/business','BunisesController')->names('business')->only(['index', 'update']);


Route::resource('admin/printers','PrintController')->names('printers')->only(['index', 'update',]);

Route::get('admin/purchases/pdf/{purchase}', 'PurchaseController@pdf')->name('purchases.pdf');
Route::get('admin/sales/pdf/{sale}','SaleController@pdf')->name('sales.pdf');
Route::get('admin/sales/print/{sale}','SaleController@print')->name('sales.print');

Route::post('flashstore', 'ClientController@flashstore')->name('flashstore');

Route::get('purchases/upload/{purchase}','PurchaseController@upload')->name('upload.purchases');
Route::get('change_status/products/{product}','ProductController@change_status')->name('change.status.products');
Route::get('change_status/purchases/{purchase}','PurchaseController@change_status')->name('change.status.purchases');
Route::get('change_status/sales/{sale}','SaleController@change_status')->name('change.status.sales');
Route::get('estado/sales/{sale}','SaleController@estado')->name('estado.sales');
Route::get('get_products_by_barcode', 'ProductController@get_products_by_barcode')->name('get_products_by_barcode');
Route::get('abono_sale/abono/{sale}','SaleController@abono')->name('abono.sales');

Route::get('products_excel_export', 'ProductController@export_excel')->name('products_excel_export');
Route::post('products_excel_import', 'ProductController@import_excel')->name('products_excel_import');

Route::get('get_products_by_id', 'ProductController@get_products_by_id')->name('get_products_by_id');
Route::post('print_barcode', 'ProductController@print_barcode')->name('print_barcode');
Route::post('print_barcode2', 'ProductController@print_barcode2')->name('print_barcode2');

Route::get('print_barcode_all', 'ProductController@print_barcode_all')->name('print_barcode_all');
Route::get('print_barcode2_all', 'ProductController@print_barcode2_all')->name('print_barcode2_all');

Route::get('/barcode', function () {
    $products = Product::get();
    return view('admin.products.barcode', compact('products'));
});

Route::get('/barcode2', function () {
    $products = Product::get();
    return view('admin.products.barcode2', compact('products'));
});


Route::get("/prueba" ,function(){
    return view('prueba');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
