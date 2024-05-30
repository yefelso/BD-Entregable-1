<!-- View: students.create -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Estudiante</title>
</head>
<body>
    <h1>Crear Estudiante</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="curso">Curso:</label><br>
        <input type="text" id="curso" name="curso"><br>
        <label for="grado">Grado:</label><br>
        <input type="text" id="grado" name="grado"><br>
        <label for="seccion">Sección:</label><br>
        <input type="text" id="seccion" name="seccion"><br><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
