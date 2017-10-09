@extends('layouts.app')
@section('content')
  <div class="big-padding text-center blue-grey white-text">
    <h1>Tu Carrito de Compras</h1>
  </div>
  <div class="container">
    <table class="table table-border">
      <thead>
        <tr>
          <th>Producto</th>
          <th>Precio</th>
          <th>Accion</th>
        </tr>
      </thead>
      <tbody>

        @foreach($products as $product)
          <tr>
            <td>
              {{$product->title}}
            </td>
            <td>{{$product->pricing}}</td>
            <!-- AQUI AGREGO EL BOTOON DE BORRAR EL PRODUCTO -->
            <td>@include('in_shopping_carts.delete', ["product" => $product])</td>
          </tr>
        @endforeach
        <tr>
          <td>
            Total
          </td>
          <td>
            {{$total}}
          </td>
          <td>Accion</td>
        </tr>
      </tbody>
    </table>
  </div>
  <h1>{{$total}}</h1>
@endsection
