<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar producto Alonso</title>
</head>
<body>

<h2>Editar producto</h2>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('productsagv.update', $productsagv) }}">
    @csrf
    @method('PUT')

    <label>Nombre:</label><br>
    <input type="text" name="name" value="{{ $productsagv->name }}"><br><br>

    <label>Precio:</label><br>
    <input type="number" step="0.01" name="price" value="{{ $productsagv->price }}"><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" value="{{ $productsagv->stock }}"><br><br>

    <button type="submit">Actualizar</button>
</form>

<br>

<a href="{{ route('productsagv.index') }}">Volver al listado</a>

</body>
</html>
