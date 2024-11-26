<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Empresas Administrador</h1>
    <a href="/admin/peliculas/create">Crear Peliculas</a>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <tr>
            <th>Id</th>
            <th>nombre</th>
            <th>Apellidos</th>
            <th>email</th>
            <th>skills</th>
            <th>location</th>
            <th>password</th>
        </tr>
        <tbody>
            @foreach ($candidates as $candidate)
                <tr>
                    <td>
                        {{ $candidate->id }}
                    </td>
                    <td>
                        {{ $candidate->name }}
                    </td>
                    <td>
                        {{ $candidate->surname }}
                    </td>
                    <td>
                        {{ $candidate->email }}
                    </td>
                    <td>
                        {{ $candidate->skills }}
                    </td>
                    <td>
                        {{ $candidate->location }}
                    </td>
                    <td>
                        {{ $candidate->password }}
                    </td>
                    <td>
                        <a href="/admin/peliculas/{{ $candidate->id }}/edit">Editar</a>
                        <form action="/admin/peliculas/{{ $candidate->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
