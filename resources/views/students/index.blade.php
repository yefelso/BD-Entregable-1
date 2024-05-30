<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <style>
        /* Estilo para los bordes de la tabla */
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }
        
        th, td {
            border: 1px solid blue;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: blue;
            color: white;
        }
        
        /* Estilo para los botones */
        .btn {
            padding: 5px 10px;
            margin-right: 5px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .btn-show {
            background-color: green;
            color: white;
        }
        
        .btn-update {
            background-color: orange;
            color: white;
        }
        
        .btn-delete {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Lista de Estudiantes</h1>
    <a href="{{ route('students.create') }}" style="display: block; text-align: center;">Crear Estudiante</a>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Curso</th>
            <th>Grado</th>
            <th>Sección</th>
            <th>Acciones</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->nombre }}</td>
            <td>{{ $student->curso }}</td>
            <td>{{ $student->grado }}</td>
            <td>{{ $student->seccion }}</td>
            <td>
                <a href="{{ route('students.show', $student->id) }}" class="btn btn-show">Mostrar</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-update">Editar</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
