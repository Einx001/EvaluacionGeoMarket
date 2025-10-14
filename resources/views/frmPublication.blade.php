<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication</title>
</head>
<body>
    <h1>Gestionar Publicaciones</h1>

    <form action="{{ route('publicaction.store') }}" method="POST">
        @csrf
        <label for="titlePublication">Ingrese el titulo de la publicacion:</label>
        <input type="text" name="titlePublication" id="titlePublication" required min="0"><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
