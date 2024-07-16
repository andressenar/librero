<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar estudiante</h1>
<form action="{{route('usuario.update', $usuario)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    codigo:
    <br>
    <input name="codigo" type="text" value="{{old('codigo',$usuario->codigo) }}">
    <br>
    </label>
    <br>
    <label>
    nombre:
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$usuario->nombre)}}">
    <br>
    </label>
    <br>
    telefono
    <br>
    <input name=" telefono" type="text" value="{{old(' telefono',$usuario->telefono)}}">
    <br>
    </label>
    <br>
    <label>
        direccion:
        <br>
        <input name="direccion" type="text" value="{{old('direccion',$usuario->direccion) }}">
        <br>
        </label>
    
    <button  type="submit">Actualizar usuario</button>
   
</form>
</body>
</html>