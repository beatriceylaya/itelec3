<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api'], function () {
	//Supplier
    Route::get('suppliers', 'SupplierController@index');
    Route::get('suppliers/{id}', 'SupplierController@show');
    Route::get('suppliers/{supplier}', 'SupplierController@searchSupplier');

    //Product
    Route::get('products', 'ProductController@index');
    Route::get('products/{id}', 'ProductController@show');
    Route::get('products/{product}', 'ProductController@searchProduct')
    

    //Product Category
    Route::get('product/category', 'ProductCategoryController@index');
    Route::get('products/category/{id}', 'ProductCategoryController@show');
    Route::get('products/category/{category}', 'ProductCategoryController@searchProductCategory');

    //Suppliers Product
    Route::get('supplier/products/{id}', 'SuppliersProductController@index');
   
});

Route::group(['prefix' => 'soap'], function () {
    Route::any('/getAccount','Soap\ClientController@client');
    Route::get('/suppliers','Soap\ClientController@getSuppliers');
    Route::get('/products','Soap\ClientController@getProducts');

    // product?name=
    Route::get('/product','Soap\ClientController@getProductFromName');
    Route::get('/product_categories','Soap\ClientController@getProductCategories');
    Route::get('/suppliers_product','Soap\ClientController@getSupplierProducts');

    //get products from the category name eg. /products/category='Milk' `
    Route::get('/products/category','Soap\ClientController@getProductsFromCategories');
    Route::get('/products/category/{category}','Soap\ClientController@getProductsOfCategory');

    

});