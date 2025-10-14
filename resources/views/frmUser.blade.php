<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Crear Usuarios</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="nameUser">Ingrese el nombre del Usuario:</label>
        <input type="text" name="nameUser" id="nameUser" required min="0"><br>

        <label for="lastNameUser">Ingrese los apellidos:</label>
        <input type="text" name="lastNameUser" id="lastNameUser" required min="0"><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
