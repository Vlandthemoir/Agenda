@extends('layout')

@section('title,Home')

@push('styles')
	<link href="{{ asset('CSS/Correos/view.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="body">

  <div class="form-container">
    <h2>Registrar correo</h2>
    <form class="" action="{{route('correo.store',$conocido->id)}}" method="POST">
      @csrf
      <label for=""><b>correo</b></label>
      <input type="email" name="correo">
      <button type="submit" name="button"><b><i class="fa-solid fa-floppy-disk"></i> Crear</b></button>
    </form>
  </div>
  <div class="table-container">
    <h2>Correos de {{$conocido->nombre}}</h2>
    <table id="content-table">
      <thead>
        <tr>
          <td>ID</td>
          <td>Correo</td>
          <td colspan="2">Ajustes</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($datos as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->correo }}</td>
          <td>
            <form action="{{route('correo.edit',$item->id)}}" method="GET">
              @csrf
              <button type="submit" id="update"><i class="fa-solid fa-pen-nib"></i> Actualizar</button>
            </form>
          </td>
          <td>
            <form action="{{ route('correo.delete', $item->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" id="delete"><i class="fa-solid fa-trash"></i> Borrar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
