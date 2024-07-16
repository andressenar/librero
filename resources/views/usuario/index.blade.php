<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    h1>Lista usuario</h1>

    @foreach ($usuario as $usuario)
    <tr>
        <br>
        <td>{{$usuario->codigo}}</td>
        <td>{{$usuario->nombre}}</td>
        <td>{{$usuario->telefono}}</td>
        <td>{{$usuario->direccion}}</td>
        
        <br>
        <td><a href="{{route('usuario.show',$usuario->id)}}">Detalle</a></td>
        <br>
        <form action="{{route('usuario.destroy',$usuario->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            <br>
            <td><a href="{{route('usuario.edit',$usuario->id)}}">Editar</a></td> 
        </form>
@endforeach

</body>
</html>