@extends('layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar producto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('producto.index') }}"> volver</a>
        </div>
    </div>
</div>
   


<form action="{{ route('producto.update', $producto->idP) }}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre producto:</strong>   
                <input type="text" name="nombreP" class="form-control" value="{{ $producto->nombreP }}">
            </div>
            <div class="form-group">
                <strong>Precio:</strong>
                <input type="text" name="precioP" class="form-control" value="{{ $producto->precioP}}">
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </div>
   
</form>
@endsection