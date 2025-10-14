<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Support</title>
</head>
<body>
    <h1>Gestionar Reportes (Chat Support)</h1>

    <form action="{{ route('chatSupport.store') }}" method="POST">
        @csrf
        <label for="messageChat">Ingrese el nombre del Vendedor:</label>
        <input type="text" name="messageChat" id="messageChat" required min="0"><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
