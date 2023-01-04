@extends('layout')

@section('title,Home')

@push('styles')
	<link href="{{ asset('CSS/Telefonos/view.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="body">

  <div class="form-container">
    <h2>Registrar telefono</h2>
    <form class="" action="{{route('telefono.store',$conocido->id)}}" method="POST">
      @csrf
      <label for=""><b>Telefono</b></label>
      <input type="text" name="telefono">
      <h3>Tipo</h3>
      <select name="tipo" value="">
        <option value="Publico">Publico</option>
        <option value="Privado">Privado</option>
      </select>
      <button type="submit" name="button"><b><i class="fa-solid fa-floppy-disk"></i> Crear</b></button>
    </form>
  </div>
  <div class="table-container">
    <h2>Telefonos de {{$conocido->nombre}}</h2>
    <table id="content-table">
      <thead>
        <tr>
          <td>ID</td>
          <td>Telefono</td>
          <td>Tipo</td>
          <td colspan="2">Ajustes</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($datos as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->telefono }}</td>
          <td>{{ $item->tipo }}</td>
          <td>
            <form action="{{route('telefono.edit',$item->id)}}" method="GET">
              @csrf
              <button type="submit" id="update"><i class="fa-solid fa-pen-nib"></i> Actualizar</button>
            </form>
          </td>
          <td>
            <form action="{{ route('telefono.delete', $item->id) }}" method="POST">
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
