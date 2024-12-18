<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Homepage Clone | CodingNepal</title>
    <!-- Linking Unicons For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
                    <img src="{{ Storage::url($company->image_url) }}" alt="User Image" class="user-image">
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
                        <a href="/empleos/{{$company->id}}/publicados" class="link-item">
                            <i class="uil uil-clipboard-notes"></i> Empleos Publicados
                        </a>
                    </div>
                    <!-- Aquí se agrega el slider dentro de la barra lateral -->
                    <div class="card-slider-section">
                        <div class="wrapper">
                            <div class="outer">
                                <div class="card" style="--delay:-1;">
                                    <div class="content">
                                        <div class="img"><img src="#" alt=""></div>
                                        <div class="details">
                                            <span class="name">Sumit Kapoor</span>
                                            <p>Frontend Developer</p>
                                        </div>
                                    </div>
                                    <a href="#">Follow</a>
                                </div>
                                <div class="card" style="--delay:0;">
                                    <div class="content">
                                        <div class="img"><img src="#" alt=""></div>
                                        <div class="details">
                                            <span class="name">Andrew Neil</span>
                                            <p>YouTuber & Blogger</p>
                                        </div>
                                    </div>
                                    <a href="#">Follow</a>
                                </div>
                                <div class="card" style="--delay:1;">
                                    <div class="content">
                                        <div class="img"><img src="#" alt=""></div>
                                        <div class="details">
                                            <span class="name">Jasmine Carter</span>
                                            <p>Freelancer & Vlogger</p>
                                        </div>
                                    </div>
                                    <a href="#">Follow</a>
                                </div>
                                <div class="card" style="--delay:2;">
                                    <div class="content">
                                        <div class="img"><img src="#" alt=""></div>
                                        <div class="details">
                                            <span class="name">Justin Chung</span>
                                            <p>Backend Developer</p>
                                        </div>
                                    </div>
                                    <a href="#">Follow</a>
                                </div>
                                <div class="card" style="--delay:2;">
                                    <div class="content">
                                        <div class="img"><img src="#" alt=""></div>
                                        <div class="details">
                                            <span class="name">Adrina Calvo</span>
                                            <p>Teacher & Advertiser</p>
                                        </div>
                                    </div>
                                    <a href="#">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-separator"></div>
                    <!-- Fin del slider -->
                    <div class="link-section">
                        <h4 class="section-title">De ti</h4>
                        <a href="/empresas/perfil/{{ $company->id }}/edit" class="link-item">
                            <i class="uil uil-user-circle"></i> Editar Perfil
                        </a>
                        <a href="/admin/jobs/{{$company->id}}/create" class="link-item">
                            <i class="uil uil-plus-circle"></i> Publicar Empleo

                        </a>                        
                        <a href="/admin/{{$company->id}}/pedientes" class="link-item">

                            <i class="uil uil-list-ui-alt"></i> Sin Atender
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
            <style>
                /* Estilos específicos para el slider dentro del sidebar */
                .card-slider-section {
                    margin: 20px 0;
                    padding: 10px;
                    max-height: 350px;
                    overflow-y: auto;
                    /* Permite el desplazamiento si el contenido excede el alto del contenedor */
                    background-color: #f9f9f9;
                    border-radius: 10px;
                }

                .wrapper .outer {
                    display: flex;
                    flex-direction: column;
                    /* Asegura que las tarjetas se apilen verticalmente */
                    align-items: center;
                    justify-content: center;
                }

                .wrapper .card {
                    margin: 10px 0;
                    width: 100%;
                    max-width: 350px;
                    /* Limita el tamaño de las tarjetas */
                    position: relative;
                }

                .card .content {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                }

                .card a {
                    text-decoration: none;
                    padding: 7px 18px;
                    border-radius: 25px;
                    color: #fff;
                    background: linear-gradient(to bottom, #bea2e7 0%, #86b7e7 100%);
                    transition: all 0.3s ease;
                    display: inline-block;
                    margin-top: 10px;
                }
            </style>


            <div class="content-wrapper">

                <section class="seccion-perfil-usuario">
                    <div class="perfil-usuario-header">
                        <div class="perfil-usuario-portada">
                            <div class="perfil-usuario-avatar">
                                <img src="{{ Storage::url($company->image_url) }}" alt="img-avatar">

                            </div>
                        </div>
                    </div>

                    <div class="perfil-usuario-body">
                        <div class="perfil-usuario-bio"
                            style="display: flex;
                                    flex-wrap: wrap;
                                    flex-direction: column;
                                    align-items: center;
                                    justify-content: center;">
                            <h3 class="titulo">{{ $company->name }}</h3>
                            <p class="texto">{{ $company->industry ?? 'No hay nada aún' }}</p>
                            <p class="texto">{{ $company->description ?? 'No hay nada aún' }} </p>

                        </div>
                        <div class="perfil-usuario-footer">
                            <ul class="lista-datos">
                                <li><i class="icono fas fa-map-signs"></i>
                                    <a href="mailto:{{ $company->email }}">Correo</a>
                                <li><i class="icono fas fa-phone-alt"></i>
                                    Telefono:{{ $company->telefono ?? 'No hay nada aún' }}</li>
                                <li><i class="icono fas fa-map-marker-alt"></i>
                                    Ubicacion.{{ $company->location ?? 'No hay nada aún' }}</li>
                            </ul>
                            <ul class="lista-datos">
                                <li><i class="icono fas fa-user-check"></i>
                                    Registro.{{ $company->date_create ?? 'No hay nada aún' }}</li>
                                <li><i class="icono fas fa-share-alt"></i> Valores:
                                    {{ $company->valores ?? 'No hay nada aún' }}
                                </li>
                            </ul>
                            <br>

                            <div class="curriculum" style="align-items: center">
                                <a href="{{ $company->site }}" type="button" style="text-decoration: none">Pagina
                                    Oficial</a>
                            </div>
                        </div>
                        <div class="redes-sociales">
                            <a href="{{ $company->facebook }}" class="boton-redes facebook fab fa-facebook-f"><i
                                    class="icon-facebook"></i></a>
                            <a href="{{ $company->x }}" class="boton-redes twitter fab fa-twitter"><i
                                    class="icon-twitter"></i></a>
                            <a href="{{ $company->instagram }}" class="boton-redes instagram fab fa-instagram"><i
                                    class="icon-instagram"></i></a>
                        </div>
                    </div>
                </section>

            </div>
        </main>
    </div>

    <!-- Linking custom script -->
    <script>
        const menuButtons = document.querySelectorAll(".menu-button");
        const screenOverlay = document.querySelector(".main-layout .screen-overlay");
        const themeButton = document.querySelector(".navbar .theme-button i");

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

</html>