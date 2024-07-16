<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
    <h1>Agregar usuario</h1>
    <form method="POST" action="{{route('usuario.store')}}">
      @csrf
        <h1>datos del usuario</h1>
      <label>
          codigo
          <br>
          <input type="text" name="codigo">
      </label>
      <br>
      <label>
          nombre
          <br>
          <input type="text" name="nombre">
      </label>
      <br>
      <label>
          telefono
          <br>
          <input type="text" name="telefono">
      </label>
      <br>
      <label>
        direccion
        <br>
        <input type="text" name="direccion">
    </label>
    <br>
      
      <button type="submit">Enviar Formulario:</button>
      </form>
</body>
</html>