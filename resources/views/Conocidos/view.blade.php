@extends('layout')

@section('title,Home')

@push('styles')
	<link href="{{ asset('CSS/Conocidos/view.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="body">

  <div class="form-container">
    <h2>Registrar conocido</h2>
    <form class="" action="{{route('conocido.store')}}" method="POST">
      @csrf
      <label for=""><b>Nombre</b></label>
      <input type="text" name="nombre">
      <button type="submit" name="button"><b><i class="fa-solid fa-floppy-disk"></i> Crear</b></button>
    </form>
  </div>
  <div class="table-container">
    <h2>Mis conocidos</h2>
    <table id="content-table">
      <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td colspan="5">Ajustes</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($datos as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->nombre }}</td>
          <td>
						<a href="{{route('telefono.index',$item->id)}}" id="add"><i class="fa-solid fa-phone"></i> Telefonos</a>
          </td>
          <td>
						<a href="{{route('correo.index',$item->id)}}" id="add"><i class="fa-solid fa-envelope"></i> Correos</a>
          </td>
          <td>
            <form action="{{ route('conocido.edit', $item->id) }}" method="GET">
              @csrf
              <button type="submit" id="update"><i class="fa-solid fa-pen-nib"></i> Actualizar</button>
            </form>
          </td>
          <td>
            <form action="{{ route('conocido.delete', $item->id) }}" method="POST">
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
