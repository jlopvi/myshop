{!!Form::open(['url' => $url, 'method' => $method]) !!}
  <div class="form-group">
    {{Form::text('title', $product->title, ['class' => 'form-control',
    'placeholder' => 'Titulo...'])}}
  </div>
  <div class="form-group">
    {{Form::number('pricing', $product->pricing, ['class' => 'form-control',
    'placeholder' => 'Precio en centavos...'])}}
  </div>

  <div class="form-group">
    {{Form::textarea('description', $product->description, ['class' => 'form-control',
    'placeholder' => 'Descripcion...'])}}
  </div>

  <div class="form-group text-right">
    <a href="{{url('/products')}}">Regresar al litado</a>
    <input type="submit" name="" value="Enviar" class="btn btn-sucess">
  </div>

{!!Form::close() !!}
