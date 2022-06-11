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
/*
Route::get('/', function () {
	return view('home');
	
Route::post('/import_parse', 'ImportController@parseImport')->name('import_parse');

})->middleware('auth');
*/
use App\Product;
Auth::routes();


	Route::middleware(['auth'])->group(function () {
		
		Route::get('/', 'HomeController@graphics')->middleware('auth');
		Route::post('/buscarproducto', 'AjaxController@imei')->middleware('auth');
		Route::post('/buscarproductos', 'AjaxController@imeis')->middleware('auth');
		Route::post('/buscarproductoinsert', 'AjaxController@imei2')->middleware('auth');
		Route::post('/buscarproveedores', 'AjaxController@proveedor1')->middleware('auth');
		Route::post('/', 'HomeController@buscar_product')->middleware('auth');		
		Route::post('/buscarproveedor', 'AjaxController@proveedor')->middleware('auth');
		Route::post('/buscarsucursal', 'AjaxController@sucursal')->middleware('auth');


		//Importacion de productos
		Route::get('/import', 'ImportController@getImport')->name('import');

		Route::post('/import_parse', 'ImportController@parseImport')->name('import_parse');

		Route::post('/import_process', 'ImportController@processImport')->name('import_process');

		//Ingreso Mercaderia
		Route::get('ingreso_mercaderia', 'IngresoMerc\\IngresoMercController@index');

		Route::post('ingreso_mercaderia', 'IngresoMerc\\IngresoMercController@store');

		Route::get('ingreso_mercaderia/create', 'IngresoMerc\\IngresoMercController@create');

		Route::get('ingreso_mercaderia/{id}', 'IngresoMerc\\IngresoMercController@show');

		Route::delete('ingreso_mercaderia/{id}', 'IngresoMerc\\IngresoMercController@destroy');

		Route::get('ingreso_mercaderia/{id}/edit', 'IngresoMerc\\IngresoMercController@edit');

		Route::patch('ingreso_mercaderia/{id}', 'IngresoMerc\\IngresoMercController@update');


		//Producto
		Route::get('product', 'Product\\ProductController@index')->name('product.index');

		Route::post('product', 'Product\\ProductController@store')->name('product.store');

		Route::get('product/create', 'Product\\ProductController@create')->name('product.create');

		Route::patch('product/{id}', 'Product\\ProductController@update')->name('product.update');

		Route::get('product/{id}', 'Product\\ProductController@show')->name('product.show');

		Route::delete('product/{id}', 'Product\\ProductController@destroy')->name('product.destroy');

		Route::get('product/{id}/edit', 'Product\\ProductController@edit')->name('product.edit');

		//CSV
		Route::get('csv', 'Csv\\CsvController@index')->name('csv.index');

		Route::post('csv', 'Csv\\CsvController@store')->name('csv.store');

		Route::get('csv/create', 'Csv\\CsvController@create')->name('csv.create');

		Route::patch('csv/{id}', 'Csv\\CsvController@update')->name('csv.update');

		Route::get('csv/{id}', 'Csv\\CsvController@show')->name('csv.show');

		Route::delete('csv/{id}', 'Csv\\CsvController@destroy')->name('csv.destroy');

		Route::get('csv/{id}/edit', 'Csv\\CsvController@edit')->name('csv.edit');

		//Egreso Mercaderia
		Route::get('egreso_mercaderia', 'EgresoMerc\\EgresoMercController@index')->name('egreso_mercaderia.index');

		Route::post('egreso_mercaderia', 'EgresoMerc\\EgresoMercController@store')->name('egreso_mercaderia.store');

		Route::get('egreso_mercaderia/create', 'EgresoMerc\\EgresoMercController@create')->name('egreso_mercaderia.create');

		Route::patch('egreso_mercaderia/{id}', 'EgresoMerc\\EgresoMercController@update')->name('egreso_mercaderia.update');

		Route::get('egreso_mercaderia/{id}', 'EgresoMerc\\EgresoMercController@show')->name('egreso_mercaderia.show');

		Route::delete('egreso_mercaderia/{id}', 'EgresoMerc\\EgresoMercController@destroy')->name('egreso_mercaderia.destroy');

		Route::get('egreso_mercaderia/{id}/edit', 'EgresoMerc\\EgresoMercController@edit')->name('egreso_mercaderia.edit');	
		
		//Bodega
		Route::get('bodega', 'Bodega\\BodegaController@index')->name('bodega.index');

		Route::post('bodega', 'Bodega\\BodegaController@store')->name('bodega.store');

		Route::get('bodega/create', 'Bodega\\BodegaController@create')->name('bodega.create');

		Route::patch('bodega/{id}', 'Bodega\\BodegaController@update')->name('bodega.update');

		Route::get('bodega/{id}', 'Bodega\\BodegaController@show')->name('bodega.show');

		Route::delete('bodega/{id}', 'Bodega\\BodegaController@destroy')->name('bodega.destroy');

		Route::get('bodega/{id}/edit', 'Bodega\\BodegaController@edit')->name('bodega.edit');

		//Proveedor
		Route::get('proveedor', 'Proveedor\\ProveedorController@index')->name('proveedor.index');

		Route::post('proveedor', 'Proveedor\\ProveedorController@store')->name('proveedor.store');

		Route::get('proveedor/create', 'Proveedor\\ProveedorController@create')->name('proveedor.create');

		Route::patch('proveedor/{id}', 'Proveedor\\ProveedorController@update')->name('proveedor.update');

		Route::get('proveedor/{id}', 'Proveedor\\ProveedorController@show')->name('proveedor.show');

		Route::delete('proveedor/{id}', 'Proveedor\\ProveedorController@destroy')->name('proveedor.destroy');

		Route::get('proveedor/{id}/edit', 'Proveedor\\ProveedorController@edit')->name('proveedor.edit');

		//Users
		Route::get('users', 'Usuarios\\UsuariosController@index')->name('users.index');

		Route::post('users', 'Usuarios\\UsuariosController@store')->name('users.store');

		Route::get('users/create', 'Usuarios\\UsuariosController@create')->name('users.create');

		Route::patch('users/{id}', 'Usuarios\\UsuariosController@update')->name('users.update');

		Route::get('users/{id}', 'Usuarios\\UsuariosController@show')->name('users.show');

		Route::delete('users/{id}', 'Usuarios\\UsuariosController@destroy')->name('users.destroy');

		Route::get('users/{id}/edit', 'Usuarios\\UsuariosController@edit')->name('users.edit');

		//Roles
		Route::get('roles', 'Roles\\RolesController@index')->name('roles.index');
		Route::post('roles', 'Roles\\RolesController@store')->name('roles.store');

		Route::get('roles/create', 'Roles\\RolesController@create')->name('roles.create');

		Route::patch('roles/{id}', 'Roles\\RolesController@update')->name('roles.update');

		Route::get('roles/{id}', 'Roles\\RolesController@show')->name('roles.show');

		Route::delete('roles/{id}', 'Roles\\RolesController@destroy')->name('roles.destroy');

		Route::get('roles/{id}/edit', 'Roles\\RolesController@edit')->name('roles.edit');

		//Existencias
		Route::get('existencia', 'Existencia\\ExistenciaController@index')->name('existencia.index');

		Route::post('existencia', 'Existencia\\ExistenciaController@store')->name('existencia.store');

		Route::get('existencia/create', 'Existencia\\ExistenciaController@create')->name('existencia.create');

		Route::get('";', 'Existencia\\ExistenciaController@imprimir')->name('existencia.imprimir');

		//Route::patch('proveedor/{id}', 'Proveedor\\ProveedorController@update')->name('proveedor.update')
		//->middleware('permission:proveedor.edit');

		//Route::get('proveedor/{id}', 'Proveedor\\ProveedorController@show')->name('proveedor.show')
		//->middleware('permission:proveedor.show');

		//Route::delete('proveedor/{id}', 'Proveedor\\ProveedorController@destroy')->name('proveedor.destroy')
		//->middleware('permission:proveedor.destroy');

		//Route::get('proveedor/{id}/edit', 'Proveedor\\ProveedorController@edit')->name('proveedor.edit')
		//->middleware('permission:proveedor.edit');


	});


