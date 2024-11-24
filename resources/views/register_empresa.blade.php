<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/rempresa.css')}}">
    <title>Registro</title>
</head>

<body>
    <div class="register-container">
        <h2>Registro de Empresa</h2>
        <form id="registerForm">
            <div class="form-group">
                <label for="companyName">Nombre de la Empresa</label>
                <input type="text" id="companyName" placeholder="Introduce el nombre de la empresa" required>
            </div>
            <div class="form-group">
                <label for="industryType">Tipo de Industria</label>
                <select id="industryType" required>
                    <option value="" disabled selected>Selecciona el tipo de industria</option>
                    <option value="tecnologia">Tecnología</option>
                    <option value="salud">Salud</option>
                    <option value="finanzas">Finanzas</option>
                    <option value="educacion">Educación</option>
                    <option value="comercio">Comercio</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div class=" form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" placeholder="Introduce tu correo electrónico" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" placeholder="Introduce tu contraseña" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>

</html>