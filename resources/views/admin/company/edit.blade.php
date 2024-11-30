<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/jobs/creates.css') }}">
    <title>EMPLEAFAST</title>
</head>

<body>
    <section class="container">
        <header>Edita Tús Datos</header>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/empresas/perfil/{{ $company->id }}/update" method="POST" class="form"
            enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Método HTTP PUT para actualizar -->

            <div class="input-box">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" placeholder="Nombres"
                    value="{{ old('name', $company->name) }}" required>
            </div>

            <div class="input-box">
                <label for="industry">Industria</label>
                <input type="text" name="industry" id="industry" placeholder="Ej. Alimentaria"
                    value="{{ old('industry', $company->industry) }}" required>
            </div>

            <div class="input-box">
                <label for="description">Descripción</label>
                <br>
                <textarea name="description" id="description" placeholder="Describe como es la empresa y a qué se dedica" required>{{ old('description', $company->description) }}</textarea>
            </div>

            <div class="column">
                <div class="input-box">
                    <label for="date_create">Fecha de Registro</label>
                    <input type="date" name="date_create" id="date_create"
                        value="{{ old('date_create', $company->date_create) }}" required>
                </div>
                <div class="input-box">
                    <label for="telefono">Teléfono</label>
                    <input type="number" name="telefono" id="telefono"
                        value="{{ old('telefono', $company->telefono) }}" required>
                </div>
            </div>

            <div class="input-box address">
                <label for="location">Dirección</label>
                <input type="text" name="location" id="location"
                    placeholder="Ej. Av Las Flores S/N Col. Centro Teapa, Tabasco"
                    value="{{ old('location', $company->location) }}" required>
            </div>

            <div class="input-box" id="valores-container">
                <label for="valores">Valores</label>

                @if ($company->valores)
                    @foreach (json_decode($company->valores, true) as $index => $valor)
                        <div class="skill-input-container">
                            <input type="text" name="valores[]" class="valores-input" value="{{ $valor }}"
                                placeholder="Escribe un valor">
                            <button type="button" onclick="removeSkill(this)">Eliminar</button>
                        </div>
                    @endforeach
                @endif

                <!-- Campo para agregar habilidades -->
                <button type="button" onclick="addvalores()">Agregar Valor</button>
            </div>

            <div class="input-box address">
                <label for="facebook">Facebook (opcional)</label>
                <input type="text" name="facebook" id="facebook" value="{{ old('facebook', $company->facebook) }}">
            </div>

            <div class="input-box address">
                <label for="instagram">Instagram (opcional)</label>
                <input type="text" name="instagram" id="instagram"
                    value="{{ old('instagram', $company->instagram) }}">
            </div>

            <div class="input-box address">
                <label for="x">X (opcional)</label>
                <input type="text" name="x" id="x" value="{{ old('x', $company->x) }}">
            </div>

            <div class="input-box address">
                <label for="site">Sitio Web (opcional)</label>
                <input type="text" name="site" id="site" value="{{ old('site', $company->site) }}">
            </div>

            <div class="input-box">
                <label for="image_url">Foto de perfil (opcional)</label>
                <input type="file" name="image_url" id="image_url" accept="image/*">
            </div>

            <button type="submit">Actualizar Empresa</button>
        </form>

        <script>
            function addvalores() {
                const container = document.getElementById('valores-container');
                const div = document.createElement('div');
                div.classList.add('skill-input-container');
                div.innerHTML = `
                    <input type="text" name="valores[]" class="valores-input" placeholder="Escribe un valor">
                    <button type="button" onclick="removeSkill(this)">Eliminar</button>`;
                container.appendChild(div);
            }

            function removeSkill(button) {
                button.parentElement.remove();
            }
        </script>

    </section>
    </>
</body>

</html>
