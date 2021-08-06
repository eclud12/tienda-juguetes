<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $cat = new Category();
        $cat->nombre        ='producto 1';
        $cat->slug          ='producto 1';
        $cat->descripcion   ='producto 1';
        $cat->save();
        return $cat;  */ 
        
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)//se bera su esta guardado o no en la base de datos
    {
       //return Category::where('slug',$slug)->first();

       if (Category::where('slug',$slug)->first()) {
            return 'Slug existe';//esta guardado dentro de la base de datos
        }    
        else {
            return 'Slug Disponible';//aparece cuando no esta en la base de datios
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}