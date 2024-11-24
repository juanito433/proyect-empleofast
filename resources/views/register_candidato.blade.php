<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/rcandidato.css')}}">
    <title>Inicio de Sesión</title>
</head>

<body>
    <div class="login-container">
        <h2>Registro de Candidato</h2>
        <form id="loginForm">
            <div class="form-group">
                <label for="username">Nombre de Usuario</label>
                <input type="text" id="username" placeholder="Introduce tu nombre de usuario" required>
            </div>
            <div class="form-group">
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