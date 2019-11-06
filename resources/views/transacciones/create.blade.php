@extends('layouts.app')
@section('title', 'Agregar Cuenta')

@section('content')
  <div class="conatainer">
      <form class=class="form-group" action="/transacciones" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Cantidad</label>
          <input type="text" name="Cantidad" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Descripcion de la Transacciones</label>
          <input type="text" name="Descripcion" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Id cuenta</label>
          <input type="text" name="Cuenta_id" class="form-control">
        </div>
      <button type="submit" class="btn btn-primary">Crear</button>
      </form>
    </div>
@endsection
