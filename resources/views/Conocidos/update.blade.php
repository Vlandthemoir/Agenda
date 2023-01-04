@extends('layout')

@section('title,Home')

@push('styles')
	<link href="{{ asset('CSS/Conocidos/view.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="body">

  <div class="form-container">
    <h2>Actualizar conocido</h2>
    <form class="" action="{{route('conocido.update',$conocido->id)}}" method="POST">
      @csrf
      @method("PUT")
      <label for=""><b>Nombre</b></label>
      <input type="text" autocomplete="off" name="nombre" value="{{$conocido->nombre}}">
      <button type="submit" name="button"><b><i class="fa-solid fa-floppy-disk"></i> Guardar</b></button>
    </form>
  </div>
</div>
@endsection
