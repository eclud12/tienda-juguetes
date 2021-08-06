<?php

use App\Product;
use App\Category;
use App\Image;


//para hacer las pruebas con las imagenes.
Route::get('/prueba', function () {


    $product = App\Product::with('images','category')->orderby('id','desc')->get();
    return $product;
  //$product = App\Product::find(5);
//  return $product->images;

    //  $product = App\Product::find(2);
    //  $product->images();
    //  return $product;


});

//mostrar resultados
Route::get('/resultados', function () {

    $image = App\Image::orderBy('id', 'Desc')->get();
    return  $image;
});



Route::get('/', function () {



    /*$prod= Product::findOrFail(2);
$prod->slug= 'producto-3';
$prod->save();
return $prod;
*/
    /*
    $prod = new Product();
    $prod->nombre = 'isopos';
    $prod->slug = 'isopos';
    $prod->category_id = 3;
    $prod->descripcion_corta = 'isopos';
    $prod->descripcion_larga = 'isopos';
    $prod->especificaciones = 'isopos';
    $prod->datos_de_interes = 'isopos';
    $prod->estado = 'Nuevo';
    $prod->activo = 'Si';
    $prod->sliderprincipal = 'No'; 
    $prod->save();
    
    return $prod;*/

    //return view('welcome');


    /* $cat = Category::find(1)->products;
            return $cat;*/


    return view('tienda.index');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('plantilla.admin');
})->name('admin');


Route::resource('admin/category', 'Admin\AdminCategoryController')->names('admin.category');

Route::resource('admin/product', 'Admin\AdminProductController')->names('admin.product');

Route::get('cancelar/{ruta}', function ($ruta) {
    return redirect()->route($ruta)->with('cancelar', 'Acción Cancelada!');
    /// return redirect()->route('admin.category.index')->with('cancelar','Acción Cancelada!');
})->name('cancelar'); 
//Route::get('/admin', function () {
//    return view('admin.category.create');//para llamar a categorias creadas o crear
//});

//Route::apiResource('category', 'API\CategoryController');
//Route::resource('admin/category', 'Admin\AdminController')->names('admin.category');
//Route::resource('admin/category', 'Admin\AdminCategoryController')->names('admin.category'); 