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
            <th>industria</th>
            <th>ubicación</th>
            <th>email</th>
            <th>password</th>

        </tr>
        <tbody>
            @foreach ($companys as $company)
                <tr>
                    <td>
                        {{ $company->id }}
                    </td>
                    <td>
                        {{ $company->name }}
                    </td>
                    <td>
                        {{ $company->industry }}
                    </td>
                    <td>
                        {{ $company->location }}
                    </td>
                    <td>
                        {{ $company->email }}
                    </td>
                    <td>
                        {{ $company->password }}
                    </td>
                    <td>
                        <a href="/admin/peliculas/{{ $company->id }}/edit">Editar</a>
                        <form action="/admin/peliculas/{{ $company->id }}" method="POST">
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
