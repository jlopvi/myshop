<?php

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
//     return view('welcome');
// });

Route::get('/', 'MainController@index');

Route::get('/payments/store', 'PaymentsController@store');

Route::get('/carrito', 'ShoppingCartsController@index');

// Rura de recursos
Route::resource('products', 'ProductsController');

Route::resource('in_shopping_carts', 'InShoppingCartsController', [
  'only' => ['store', 'destroy']
]);

// Route::resouce('compras', 'ShoppingCartsController', [
//   'only' => ['sow']
// ]);


/*
  GET /products => index
  POST /products => store
  GET /products/create => Formulario para crear

  GET /products/:id => Mostrar producto
  GET /products/:id/edit => editar
  PUT/PATCH /products/:id
  DELETE /products/:id
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
