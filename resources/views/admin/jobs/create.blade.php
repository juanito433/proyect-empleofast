<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/jobs/creates.css') }}">
    <title>Crea una nueva oferta</title>
</head>

<body>
    <section class="container">
        <header>Crea una nueva oferta</header>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/admin/jobs/{{$company->id}}/publication" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_company" value="{{ $company->id }}">

            <div class="input-box">
                <label for="title">Título del Trabajo</label>
                <input type="text" name="title" id="title" placeholder="Ej. Mesero para restaurante" required>
            </div>

            <div class="input-box">
                <label for="description">Descripción</label>
                <br>
                <textarea name="description" id="description" placeholder="De qué trata el trabajo en oferta" required></textarea>
            </div>

            <div class="column">
                <div class="input-box">
                    <label for="type_jobs">Tipo de Empleo</label>
                    <div class="select-box">
                        <select name="type_jobs" id="type_jobs" required>
                            <option hidden>Escoge el tipo de empleo</option>
                            <option value="Tiempo completo">Tiempo completo</option>
                            <option value="Medio tiempo">Medio tiempo</option>
                            <option value="Freelance">Freelance</option>
                            <option value="Temporal">Temporal</option>
                            <option value="Híbrido">Híbrido</option>
                            <option value="Remoto">Remoto</option>
                        </select>
                    </div>
                </div>
                <div class="input-box">
                    <label for="publication_date">Fecha de Publicación</label>
                    <input type="date" name="publication_date" id="publication_date" required>
                </div>
            </div>

            <div class="input-box address">
                <label for="category">Categoría</label>
                <div class="column">
                    <div class="select-box">
                        <select name="category" id="category" required>
                            <option hidden>Escoge la categoría del trabajo</option>
                            <option value="Tecnología">Tecnología</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Salud">Salud</option>
                            <option value="Educación">Educación</option>
                            <option value="Finanzas">Finanzas</option>
                            <option value="Ventas">Ventas</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="input-box">
                <label for="salary">Salario (en pesos)</label>
                <input type="number" id="salary" name="salary" placeholder="Ej. 15000" step="0.01" min="0" required />
            </div>

            <div class="input-box">
                <label for="image_url">Imagen de Referencia (opcional)</label>
                <input type="file" name="image_url" id="image_url" accept="image/*">
            </div>

            <button type="submit">Registrar Trabajo</button>
        </form>
    </section>
</body>

</html>
