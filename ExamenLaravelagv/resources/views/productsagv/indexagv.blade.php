<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos Alonso</title>
</head>
<body>

@if (session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<a href="{{ route('productsagv.create') }}">Nuevo producto</a>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Acciones</th>
    </tr>

    @foreach ($products as $product)
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->stock }}</td>
        <td>
            <a href="{{ route('productsagv.edit', $product) }}">Editar</a>

            <form action="{{ route('productsagv.destroy', $product) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
