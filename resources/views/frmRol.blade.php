<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rol</title>
</head>
<body>
    <h1>Crear Roles</h1>

    <form action="{{ route('rol.store') }}" method="POST">
        @csrf
        <label for="nameRol">Ingrese el nombre del Rol:</label>
        <input type="text" name="nameRol" id="nameRol" required min="0"><br>

        <label for="permisionsRol">Ingrese los permisos:</label>
        <input type="text" name="permisionsRol" id="permisionsRol" required min="0"><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
