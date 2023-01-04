@extends('layout')

@section('title,Home')

@push('styles')
	<link href="{{ asset('CSS/Telefonos/view.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="body">

  <div class="form-container">
    <h2>Actualizar telefono</h2>
    <form class="" action="{{route('telefono.update',$telefono->id)}}" method="POST">
      @csrf
      @method("PUT")
      <label for=""><b>Telefono</b></label>
      <input type="text" name="telefono" value="{{$telefono->telefono}}">
      <h3>Tipo</h3>
      <select name="tipo" value="">
        @if($telefono->tipo == 'Publico')
        <option value="Publico">Publico</option>
        <option value="Privado">Privado</option>
        @else
        <option value="Privado">Privado</option>
        <option value="Publico">Publico</option>
        @endif
      </select>
      <button type="submit" name="button"><b><i class="fa-solid fa-floppy-disk"></i> Guardar</b></button>
    </form>
  </div>
</div>
@endsection
