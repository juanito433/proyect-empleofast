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
        <header>Edita Tú Perfil</header>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/candidatos/perfil/{{ $candidate->id }}/update" method="POST" class="form"
            enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Esto asegura que Laravel lo trate como una actualización -->

            <div class="input-box">
                <label for="title">Nombres</label>
                <input type="text" name="name" id="name" placeholder="Nombres"
                    value="{{ old('name', $candidate->name) }}" required>
            </div>
            <div class="input-box">
                <label for="title">Apellidos</label>
                <input type="text" name="surname" id="surname" placeholder="Apellidos"
                    value="{{ old('surname', $candidate->surname) }}" required>
            </div>
            <div class="input-box">
                <label for="description">Sobre mi</label>
                <br>
                <textarea name="about_me" id="about_me" placeholder="Comparte cosas sobre ti" required>{{ old('about_me', $candidate->about_me) }}</textarea>
            </div>
            <div class="input-box" id="skills-container">
                <label for="skills">Habilidades</label>

                <!-- Mostrar las habilidades existentes si las hay -->
                @if ($candidate->skills)
                    @foreach (json_decode($candidate->skills, true) as $index => $skill)
                        <div class="skill-input-container">
                            <input type="text" name="skills[]" class="skill-input" value="{{ $skill }}"
                                placeholder="Escribe una habilidad" readonly>
                            <button type="button" onclick="removeSkill({{ $index }})">Eliminar</button>
                        </div>
                    @endforeach
                @endif

                <!-- Campo para agregar una nueva habilidad si no hay ninguna -->
                @if (empty($candidate->skills) || count(json_decode($candidate->skills, true)) < 1)
                    <input type="text" name="skills[]" class="skill-input" placeholder="Escribe una habilidad">
                @endif
            </div>

            <button type="button" onclick="addSkill()">Agregar otra habilidad</button>

            <script>
                // Función para agregar una nueva habilidad
                function addSkill() {
                    const container = document.getElementById('skills-container');
                    const input = document.createElement('input');
                    input.type = 'text';
                    input.name = 'skills[]'; // Asegúrate de usar "skills[]" para enviar un array.
                    input.className = 'skill-input';
                    input.placeholder = 'Escribe una habilidad';
                    container.appendChild(input);
                }

                // Función para eliminar una habilidad
                function removeSkill(index) {
                    const skillInputs = document.querySelectorAll('.skill-input');
                    const inputToRemove = skillInputs[index];
                    inputToRemove.value = ''; // Vaciar el valor de la habilidad
                    inputToRemove.setAttribute('name', ''); // Eliminar el atributo 'name' para evitar que se envíe en el formulario
                    inputToRemove.parentNode.style.display = 'none'; // Ocultar el campo visualmente
                }
            </script>



            <div class="column">
                <div class="input-box">
                    <label for="type_jobs">Fecha de nacimiento</label>
                    <input type="date" name="date_birth" id="date_birth"
                        value="{{ old('date_birth', $candidate->date_birth) }}" required>
                </div>
                <div class="input-box">
                    <label for="publication_date">Fecha de registro</label>
                    <input type="date" name="date_create" id="date_create"
                        value="{{ old('date_create', $candidate->date_create) }}" required>
                </div>
            </div>

            <div class="input-box address">
                <label for="category">Dirección</label>
                <input type="text" name="location" id="location"
                    placeholder="Ej. Av Las Flores S/N Col. Centro Teapa, Tabasco"
                    value="{{ old('location', $candidate->location) }}" required>
            </div>

            <div class="input-box address">
                <label for="category">Facebook (opcional)</label>
                <input type="text" name="facebook" id="facebook"
                    value="{{ old('facebook', $candidate->facebook) }}">
            </div>
            <div class="input-box address">
                <label for="category">Instragram (opcional)</label>
                <input type="text" name="instagram" id="instagram"
                    value="{{ old('instagram', $candidate->instagram) }}">
            </div>
            <div class="input-box address">
                <label for="category">X (opcional)</label>
                <input type="text" name="x" id="x" value="{{ old('x', $candidate->x) }}">
            </div>
            <div class="input-box">
                <label for="image_url">Foto de perfil (opcional)</label>
                <input type="file" name="image_url" id="image_url" accept="image/*">
            </div>

            <button type="submit">Registrar Trabajo</button>
        </form>
    </section>
    </>
</body>

</html>
