<?php
  namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use App\Http\Requests;
  use App\ShoppingCart;
  use App\Product;

  class MainController extends Controller{
    public function home(){
      return view('main.home');
    }
    public function index()
    {
        //Mostrar coleccion de recursos
        $products = Product::all(); // todo los productos
        return view('products.index',['products' => $products]);
    }

  }

 ?>
