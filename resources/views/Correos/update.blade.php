@extends('layout')

@section('title,Home')

@push('styles')
	<link href="{{ asset('CSS/Correos/view.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="body">

  <div class="form-container">
    <h2>Actualizar correo</h2>
    <form class="" action="{{route('correo.update',$correo->id)}}" method="POST">
      @csrf
      @method("PUT")
      <label for=""><b>correo</b></label>
      <input type="email" name="correo" value="{{$correo->correo}}">
      <button type="submit" name="button"><b><i class="fa-solid fa-floppy-disk"></i> Guardar</b></button>
    </form>
  </div>
</div>
@endsection
