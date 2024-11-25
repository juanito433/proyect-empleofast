<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Desplegable</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- CDN para íconos -->
    <style>
        .menu-container {
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
            position: sticky;
            top: 13%;
        }



        .menu-item {
            display: flex;
            align-items: center;
            padding: 12px;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
            font-size: 16px;
        }

        .menu-item:hover {
            background-color: #e9ecef;
        }

        .menu-item i {
            font-size: 18px;
            margin-right: 10px;
        }

        /* Ocultar el botón de menú en pantallas grandes */
        .menu-toggle {
            display: none;
            font-size: 20px;
            cursor: pointer;
            background: none;
            border: none;
            color: #333;
        }

        /* Media query para pantallas pequeñas */
        @media (max-width: 900px) {

            /* Estilo del contenedor y botón */
            .menu-container {
                position: relative;
                display: inline-block;
                width: 100%;
            }

            .menu-toggle {
                font-size: 16px;
                cursor: pointer;
                background: #f8f9fa;
                border: 1px solid #ddd;
                padding: 10px 20px;
                border-radius: 5px;
                display: flex;
                align-items: center;
                color: #333;
            }

            .menu-toggle i {
                margin-left: 8px;
            }

            /* Menú desplegable */
            .menu-dropdown {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                padding: 10px 0;
                width: 250px;
                z-index: 1000;
            }

            .menu-dropdown.show {
                display: block;
            }

            .menu-item {
                display: flex;
                align-items: center;
                padding: 12px 20px;
                text-decoration: none;
                color: #333;
                font-size: 16px;
            }

            .menu-item:hover {
                background-color: #f1f1f1;
            }

            .menu-item i {
                font-size: 18px;
                margin-right: 10px;
            }

            .menu-item.special {
                color: #bee0b2;
                font-weight: bold;
            }

            aside {
                align-content: center;
                padding: 8px;
                margin-top: 90px;

            }

            .derecha {
                position: absolute;
                bottom: 0;
                right: 0;
                margin-right: 20px;
                margin-bottom: 20px
            }
        }
    </style>
</head>

<body>

    <div class="menu-container shadow-md">
        <!-- Botón para mostrar el menú desplegable -->
        <button class="menu-toggle" onclick="toggleMenu()">
            Más <i class="fas fa-caret-down"></i>
        </button>
        <h4 class="derecha text-center">Herramientas</h4>

        <!-- Menú desplegable -->
        <div class="menu-dropdown" id="menu">
            <a href="#" class="menu-item" data-toggle="modal" data-target="#filtersModal">
                <i class="fas fa-sliders-h"></i> Filtros
            </a>
            <a href="evaluaciones.html" class="menu-item">
                <i class="fas fa-save"></i> Guardados
            </a>
            <a href="orientacion.html" class="menu-item">
                <i class="fas fa-clipboard-check"></i> Postulaciones
            </a>
            <a href="anunciar.html" class="menu-item special">
                <i class="fas fa-pen"></i>Entrevistas
            </a>
        </div>

    </div>

    <script>
        // Función para mostrar/ocultar el menú
        function toggleMenu() {
            const menu = document.getElementById('menu');
            menu.classList.toggle('show');
        }

        // Cerrar el menú al hacer clic fuera de él
        window.onclick = function(event) {
            const menu = document.getElementById('menu');
            const toggleButton = document.querySelector('.menu-toggle');

            // Si el clic es fuera del menú y del botón, cerrar el menú
            if (!menu.contains(event.target) && !toggleButton.contains(event.target)) {
                menu.classList.remove('show');
            }
        }
    </script>

</body>

</html>