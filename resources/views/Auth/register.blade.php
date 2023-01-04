<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('CSS/Auth/login.css')}}">
    <script src="https://kit.fontawesome.com/f67351aa49.js" crossorigin="anonymous"></script>
    <title>Agenda</title>
  </head>
  <body>
    <div class="general-container">
      <div class="form">
        <form class="" action="{{route('register.store')}}" method="POST">
          @csrf
          <div class="icon">
            <i id="icon" class="fas fa-address-book"></i>
          </div>
          <label for=""><b>Registro de usuario</b></label>
          <input type="text" name="seudonimo" placeholder="Seudonimo">
          <input type="text" name="nombre" placeholder="Nombre">
          <input type="password" name="clave" placeholder="Clave">
          <button type="submit" name="button"><b>Registrarse</b></button>
        </form>
      </div>
    </div>
  </body>
</html>
