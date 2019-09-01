<?php

/*
|--------------------------------------------------------------------------
| Teste Spot
|--------------------------------------------------------------------------
| Autor: Roberto Pinheiro
| Arquivo: routes/web.php
| Camtegoria: Routes
| Descrição: Registra as rotas da aplicação a serem criadas e se comunica com os controllers
| Última atualização: 30/08/2019
*/

Route::get('/', 'ProductsController@index');

Route::resource('products', 'ProductsController');
Route::resource('categories', 'CategoriesController');

Route::get('/category/{id}/products',[
'uses' => 'CategoriesController@list_products',
'as' => 'categories.products'
]);

Route::post('/category/remake',[
'uses' => 'CategoriesController@category_remake',
'as' => 'categories.remake'
]);

Route::post('/seed/remake',[
'uses' => 'CategoriesController@seed_remake',
'as' => 'seed.remake'
]);


Route::get('products/{id}/destroy',[
	'uses' =>'ProductsController@destroy',
	'as'   =>'products.destroy'
]);

Route::get('categories/{id}/destroy',[
	'uses' =>'CategoriesController@destroy',
	'as'   =>'categories.destroy'
]);
