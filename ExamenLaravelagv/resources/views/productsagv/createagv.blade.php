<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear producto Alonso</title>
</head>
<body>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('productsagv.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}"><br><br>
    <input type="number" step="0.01" name="price" placeholder="Precio" value="{{ old('price') }}"><br><br>
    <input type="number" name="stock" placeholder="Stock" value="{{ old('stock') }}"><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('productsagv.index') }}">Volver</a>

</body>
</html>
