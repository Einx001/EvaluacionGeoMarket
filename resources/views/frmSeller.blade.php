<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sellers</title>
</head>
<body>
    <h1>Crear Vendedores</h1>

    <form action="{{ route('seller.store') }}" method="POST">
        @csrf
        <label for="nameSeller">Ingrese el nombre del Vendedor:</label>
        <input type="text" name="nameSeller" id="nameSeller" required min="0"><br>

        <label for="descriptionSeller">Ingrese la Descripcion:</label>
        <input type="text" name="descriptionSeller" id="descriptionSeller" required min="0"><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
