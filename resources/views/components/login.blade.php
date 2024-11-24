<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    <title></title>
</head>

<body>
    <body>
        <!-- Botón para abrir el modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
            Iniciar Sesión
        </button>
        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" style="position: relative !important;
">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="loginForm">
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="text" class="form-control" id="username" placeholder="Introduce tu Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Introduce tu Password">
                            </div>
                            <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                            </div>
                            <a href="/selection" class="register-link">¿No tienes una cuenta? Regístrate aquí</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>