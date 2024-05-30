<!-- View: students.show -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Estudiante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        a {
            display: inline-block;
            background-color: #4a90e2;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        a:hover {
            background-color: #357ae8;
        }

        form {
            display: inline-block;
        }

        button {
            background-color: #ff5252;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalles del Estudiante</h1>
        <p><strong>Nombre:</strong> {{ $student->nombre }}</p>
        <p><strong>Curso:</strong> {{ $student->curso }}</p>
        <p><strong>Grado:</strong> {{ $student->grado }}</p>
        <p><strong>Sección:</strong> {{ $student->seccion }}</p>
        <a href="{{ route('students.edit', $student->id) }}">Editar</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </div>
</body>
</html>
