<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Responsive</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Estilo general del menú */
        .menu-container {
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
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

        /* Botón para pantallas pequeñas */
        .menu-toggle {
            display: none;
            font-size: 16px;
            cursor: pointer;
            background: #f8f9fa;
            border: 1px solid #ddd;
            padding: 10px 20px;
            border-radius: 5px;
            color: #333;
            align-items: center;
        }

        .menu-toggle i {
            margin-left: 8px;
        }

        /* Menú desplegable oculto inicialmente */
        .menu-dropdown {
            display: none;
        }

        /* Estilo en pantallas pequeñas */
        @media (max-width: 900px) {
            .menu-container {
                width: 100%;
                padding: 0;
                border: none;
            }

            /* Mostrar el botón y ocultar los elementos del menú */
            .menu-toggle {
                display: flex;
                justify-content: space-between;
                width: 100%;
            }

            .menu-dropdown {
                display: none;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 8px;
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
                padding: 10px 0;
                position: absolute;
                z-index: 1000;
                width: 100%;
            }

            .menu-dropdown.show {
                display: block;
            }

            .menu-item {
                padding: 10px 15px;
            }
        }
    </style>
</head>

<body>
    <div class="menu-container">
        <!-- Botón para pantallas pequeñas -->
        <button class="menu-toggle" id="menuToggle">
            Menú <i class="fas fa-caret-down"></i>
        </button>

        <!-- Menú desplegable -->
        <div class="menu-dropdown" id="menuDropdown">
            <a href="#" class="menu-item"><i class="fas fa-sliders-h"></i> Filtros</a>
            <a href="evaluaciones.html" class="menu-item"><i class="fas fa-save"></i> Guardados</a>
            <a href="orientacion.html" class="menu-item"><i class="fas fa-clipboard-check"></i> Postulaciones</a>
            <a href="anunciar.html" class="menu-item"><i class="fas fa-pen"></i> Entrevistas</a>
        </div>
    </div>

    <script>
        // Obtener elementos
        const menuToggle = document.getElementById('menuToggle');
        const menuDropdown = document.getElementById('menuDropdown');

        // Mostrar/ocultar el menú en pantallas pequeñas
        menuToggle.addEventListener('click', (event) => {
            event.stopPropagation();
            menuDropdown.classList.toggle('show');
        });

        // Cerrar el menú al hacer clic fuera de él
        document.addEventListener('click', () => {
            menuDropdown.classList.remove('show');
        });

        // Prevenir cierre al interactuar dentro del menú
        menuDropdown.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    </script>
</body>

</html>
