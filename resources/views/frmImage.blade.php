<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image</title>
</head>
<body>
    <h1>Gestionar Imagenes</h1>

    <form action="{{ route('image.store') }}" method="POST">
        @csrf
        <label for="urlImage">Ingrese la URL de la imagen:</label>
        <input type="text" name="urlImage" id="urlImage" required min="0"><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
