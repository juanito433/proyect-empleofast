<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Homepage Clone | CodingNepal</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Estilos para el modal */
        .modal {
            display: none; /* Oculto por defecto */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7); /* Fondo oscuro */
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 80%;
            max-width: 600px; /* Ancho máximo */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: slideIn 0.5s forwards; /* Animación de entrada */
            overflow: hidden; /* Evitar desbordamiento */
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Estilos para el blog card */
        .blog-card {
            position: relative;
            border-radius: 25px;
            background: white;
            box-shadow: 0px 10px 50px rgba(252, 56, 56, .3);
            margin-top: 20px;
            padding: 10px; /* Reducir padding para menos altura */
        }

        .inner-part {
            display: none; /* Oculto por defecto */
            flex-direction: column; /* Cambiar a columna para mejor disposición */
            align-items: center;
            justify-content: center;
            padding: 0 10px; /* Reducir padding */
        }

        .inner-part.active {
            display: flex; /* Mostrar solo la parte activa */
        }

        .img {
            height: 200px; /* Reducir altura de la imagen */
            width: 200px; /* Reducir ancho de la imagen */
            flex-shrink: 0;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 2px 3px 15px rgba(252, 56, 56, .1);
            margin-bottom: 10px; /* Espacio entre la imagen y el contenido */
        }

        .img img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            cursor: pointer;
            opacity: 0;
            transition: .6s;
        }

        .content {
            padding: 0 10px; /* Reducir padding */
            width: 100%; /* Asegurarse de que ocupe el 100% del ancho disponible */
            opacity: 1; /* Asegúrate de que la opacidad sea 1 para que el texto sea visible */
            transition: .6s;
            color: #333; /* Cambia el color del texto a un color oscuro */
            text-align: center; /* Centrar el texto */
        }

        .content span {
            display: block;
            color: #7b7992; /* Color del texto de la fecha */
            margin-bottom: 10px; /* Reducir margen */
            font-size: 20px; /* Reducir tamaño de fuente */
            font-weight: 500;
        }

        .content .title {
            font-size: 24px; /* Reducir tamaño de fuente */
            font-weight: 700;
            color: #0d0925; /* Color del título */
            margin-bottom: 15px; /* Reducir margen */
        }

        .content .text {
            color: #4e4a67; /* Color del texto del contenido */
            font-size: 16px; /* Reducir tamaño de fuente */
            margin-bottom: 20px; /* Reducir margen */
            line-height: 1.4em; /* Ajustar interlineado */
            text-align: justify;
        }

        .content button {
            display: inline-flex;
            padding: 10px 15px; /* Reducir padding */
            border: none;
            font-size: 14px; /* Reducir tamaño de fuente */
            text-transform: uppercase;
            color: #fff0e6;
            font-weight: 600;
            letter-spacing: 1px;
            border-radius: 50px;
            cursor: pointer;
            outline: none;
            border: 1px solid #fd3535;
            background: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
        }

        .content button:hover {
            background: linear-gradient(147deg, #fe791b 0%, #fd1c1c 74%);
        }

        .sliders {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .sliders input {
            display: none;
        }

        .sliders label {
            cursor: pointer;
            padding: 5px 10px;
            background: #d9d9d9;
            border-radius: 5px;
            margin: 0 5px;
        }

        .sliders input:checked + label {
            background: #fd3838;
            color: white;
        }
    </style>
</head>

<body class="sidebar-hidden">
    <div class="container">
        <!-- Header / Navbar -->
        <header>
            <nav class="navbar">
                <div class="nav-section nav-left">
                    <button class="nav-button menu-button">
                        <i class="uil uil-bars"></i>
                    </button>
                    <a href="#" class="nav-logo">
                        <h2 class="logo-text">PERFIL</h2>
                    </a>
                </div>

                @if (session('success'))
                <div class="alert alert-success" style="color: rgb(28, 206, 28)">
                    {{ session('success') }}
                </div>
                @endif

                <div class="nav-section nav-right">
                    <button class="nav-button theme-button">
                        <i class="uil uil-moon"></i>
                    </button>
                    <img src="{{ Storage::url($candidate->image_url) }}" alt="User  Image" class="user-image">
                </div>
            </nav>
        </header>

        <!-- Main Layout -->
        <main class="main-layout">
            <div class="screen-overlay"></div>

            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="nav-section nav-left">
                    <button class="nav-button menu-button">
                        <i class="uil uil-bars"></i>
                    </button>
                    <center>
                        <a href="#" class="nav-logo">
                            <img src="{{ asset('images/logof.png') }}" alt="Logo" class="logo-image" style="width: 130px">
                        </a>
                    </center>
                </div>

                <div class="links-container">
                    <div class="link-section">
                        <a href="/app/perfil" class="link-item">
                        <a href="/ofertas/{{$candidate->id}}/disponibles" class="link-item">
                            <i class="uil uil-suitcase"></i> Empleos Disponibles
                        </a>
                        <a href="#" class="link-item" id="openModal">
                            <i class="uil uil-building"></i> Empresas
                        </a>
                    </div>
                    <div class="section-separator"></div>

                    <div class="link-section">
                        <h4 class="section-title">De ti</h4>
                        <a href="/candidatos/perfil/{{ $candidate->id }}/edit" class="link-item">
                            <i class="uil uil-user-circle"></i> Editar Perfil
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-file-check"></i> Postulaciones
                        </a>
                        <a href="#" class="link-item">
                            <i ```html
                            <i class="uil uil-bookmark"></i> Guardados
                        </a>
                    </div>
                    <div class="section-separator"></div>

                    <div class="link-section">
                        <h4 class="section-title">Otros</h4>
                        <a href="#" class="link-item">
                            <i class="uil uil-envelope"></i> Mensajes
                        </a>
                    </div>

                    <div class="section-separator"></div>

                    <div class="link-section">
                        <h4 class="section-title">Cuenta</h4>
                        <a href="/logout" class="link-item">
                            <i class="uil uil-signout"></i> Cerrar Sesión
                        </a>
                    </div>
                </div>
            </aside>

            <div class="content-wrapper">
                <section class="seccion-perfil-usuario">
                    <div class="perfil-usuario-header">
                        <div class="perfil-usuario-portada">
                            <div class="perfil-usuario-avatar">
                                <img src="{{ Storage::url($candidate->image_url) }}" alt="img-avatar">
                            </div>
                        </div>
                    </div>

                    <div class="perfil-usuario-body">
                        <div class="perfil-usuario-bio" style="display: flex; flex-wrap: wrap; flex-direction: column; align-items: center; justify-content: center;">
                            <h3 class="titulo">{{ $candidate->name }} {{ $candidate->surname }}</h3>
                            <p class="texto">{{ $candidate->about_me ?? 'No hay nada aún' }}</p>
                            <ul>
                                @php
                                $skills = json_decode($candidate->skills);
                                @endphp

                                @if ($skills && is_array($skills))
                                @foreach ($skills as $skill)
                                <li>{{ $skill }}</li>
                                @endforeach
                                @else
                                <p>No hay habilidades disponibles.</p>
                                @endif
                            </ul>
                        </div>
                        <div class="perfil-usuario-footer">
                            <ul class="lista-datos">
                                <li><i class="icono fas fa-map-signs"></i>
                                    <a href="mailto:{{ $candidate->email }}">Correo</a>
                                </li>
                                <li><i class="icono fas fa-phone-alt"></i>
                                    Telefono: {{ $candidate->telefono ?? 'No hay nada aún' }}</li>
                                <li><i class="icono fas fa-briefcase"></i> Trabaja en.</li>
                                <li><i class="icono fas fa-building"></i> Cargo</li>
                            </ul>
                            <ul class="lista-datos">
                                <li><i class="icono fas fa-map-marker-alt"></i>
                                    Ubicacion: {{ $candidate->location ?? 'No hay nada aún' }}</li>
                                <li><i class="icono fas fa-calendar-alt"></i> Fecha
                                    nacimiento: {{ $candidate->date_birth ?? 'No hay nada aún' }}</li>
                                <li><i class="icono fas fa-user-check"></i>
                                    Registro: {{ $candidate->date_create ?? 'No hay nada aún' }}</li>
                                <li><i class="icono fas fa-share-alt"></i> Redes
                                    sociales: {{ $candidate->x ?? 'No hay nada aún' }}</li>
                            </ul>
                            <br>

                            <div class="curriculum" style="align-items: center">
                                <a href="#" type="button" style="text-decoration: none">Descargar
                                    Curriculum</a>
                            </div>
                        </div>
                        <div class="redes-sociales">
                            <a href="{{ $candidate->facebook }}" class="boton-redes facebook fab fa-facebook-f"><i
                                    class="icon-facebook"></i></a>
                            <a href="{{ $candidate->x }}" class="boton-redes twitter fab fa-twitter"><i
                                    class="icon-twitter"></i></a>
                            <a href="{{ $candidate->instagram }}" class="boton-redes instagram fab fa-instagram"><i
                                    class="icon-instagram"></i></a>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="blog-card">
                <input type="radio" name="select" id="tap-1" checked>
                <input type="radio" name="select" id="tap-2">
                <input type="radio" name="select ```html
" id="tap-3">
                <div class="sliders">
                    <label for="tap-1" class="tap tap-1">Card 1</label>
                    <label for="tap-2" class="tap tap-2">Card 2</label>
                    <label for="tap-3" class="tap tap-3">Card 3</label>
                </div>
                <div class="inner-part active">
                    <div class="img">
                        <img class="img-1" src="#" alt="Image 1">
                    </div>
                    <div class="content content-1">
                        <span>26 December 2017</span>
                        <div class="title">Lorem Ipsum Dolor</div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo animi atque aliquid pariatur voluptatem numquam, quisquam. Neque est voluptates doloribus!</div>
                        <button>Read more</button>
                    </div>
                </div>
                <div class="inner-part">
                    <div class="img">
                        <img class="img-2" src="#" alt="Image 2">
                    </div>
                    <div class="content content-2">
                        <span>26 December 2018</span>
                        <div class="title">Lorem Ipsum Dolor</div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eos ut consectetur numquam ullam fuga animi laudantium nobis rem molestias.</div>
                        <button>Read more</button>
                    </div>
                </div>
                <div class="inner-part">
                    <div class="img">
                        <img class="img-3" src="#" alt="Image 3">
                    </div>
                    <div class="content content-3">
                        <span>26 December 2019</span>
                        <div class="title">Lorem Ipsum Dolor</div>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod excepturi nemo commodi sint eum ipsam odit atque aliquam officia impedit.</div>
                        <button>Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Linking custom script -->
    <script>
        const menuButtons = document.querySelectorAll(".menu-button");
        const screenOverlay = document.querySelector(".main-layout .screen-overlay");
        const themeButton = document.querySelector(".navbar .theme-button i");
        const modal = document.getElementById("myModal");
        const openModalButton = document.getElementById("openModal");
        const closeModalButton = document.querySelector(".close");

        // Toggle sidebar visibility when menu buttons are clicked
        menuButtons.forEach(button => {
            button.addEventListener("click", () => {
                document.body.classList.toggle("sidebar-hidden");
            });
        });

        // Toggle sidebar visibility when screen overlay is clicked
        screenOverlay.addEventListener("click", () => {
            document.body.classList.toggle("sidebar-hidden");
        });

        // Open modal when "Empresas" link is clicked
        openModalButton.addEventListener("click", (event) => {
            event.preventDefault(); // Prevent default anchor behavior
            modal.style.display = "flex"; // Show modal
        });

        // Close modal when the close button is clicked
        closeModalButton.addEventListener("click", () => {
            modal.style.display = "none"; // Hide modal
        });

        // Close modal when clicking outside of the modal content
        window.addEventListener("click", (event) => {
            if (event.target === modal) {
                modal.style.display = "none"; // Hide modal
            }
        });

        // Initialize dark mode based on localStorage
        if (localStorage.getItem("darkMode") === "enabled") {
            document.body.classList.add("dark-mode");
            themeButton.classList.replace("uil-moon", "uil-sun");
        } else {
            themeButton.classList.replace("uil-sun", "uil-moon");
        }

        // Toggle dark mode when theme button is clicked
        themeButton.addEventListener("click", () => {
            const isDarkMode = document.body.classList.toggle("dark-mode");
            localStorage.setItem("darkMode", isDarkMode ? "enabled" : "disabled");
            themeButton.classList.toggle("uil-sun", isDarkMode);
            themeButton.classList.toggle("uil-moon", !isDarkMode);
        });

        // Show sidebar on large screens by default
        if (window.innerWidth >= 768) {
            document.body.classList.remove("sidebar-hidden");
        }
    </script>
</body>

</html