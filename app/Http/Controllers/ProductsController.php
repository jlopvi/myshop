<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
// use Illuminate\support\Facade\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mostrar coleccion de recursos
        $products = Product::all(); // todo los productos
        return view('products.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Desplegar formulario para crear un recurso
        $product = new Product;
        return view("products.create", ["product" => $product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar el recurso creado en create()
        $product = new Product;

        $product->title = $request->title;
        $product->pricing = $request->pricing;
        $product->description = $request->description;
        $product->user_id = Auth::user()->id;

        if($product->save()){
          return redirect("/products");
        }else{
          return view("products.create", ["product" => $product]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostaras recurso segun ID
        $product = Product::find($id);

        return view('products.show', ["product" => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Editar recursos segun ID
        $product = Product::find($id);
        return view("products.edit", ["product" => $product]);
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
        //ASctualizar recurso editado en edit()
        //Guardar el recurso creado en create()
        $product = Product::find($id);

        $product->title = $request->title;
        $product->pricing = $request->pricing;
        $product->description = $request->description;
        $product->user_id = Auth::user()->id;

        if($product->save()){
          return redirect("/products");
        }else{
          return view("products.edit", ["product" => $product]);
        }
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
        Product::destroy($id);
        return redirect('/products');

    }
}
