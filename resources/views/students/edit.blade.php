<!-- View: students.edit -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form label {
            margin-bottom: 5px;
        }

        form input {
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            padding: 10px 20px;
            background-color: #4a90e2;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #357ae8;
        }

        .bottom-line {
            border-bottom: 2px solid #ff00ff;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Estudiante</h1>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $student->nombre }}" class="bottom-line">
            <label for="curso">Curso:</label>
            <input type="text" id="curso" name="curso" value="{{ $student->curso }}" class="bottom-line">
            <label for="grado">Grado:</label>
            <input type="text" id="grado" name="grado" value="{{ $student->grado }}" class="bottom-line">
            <label for="seccion">Sección:</label>
            <input type="text" id="seccion" name="seccion" value="{{ $student->seccion }}" class="bottom-line">
            <button type="submit">Actualizar</button>
        </form>
    </div>
</body>
</html>
