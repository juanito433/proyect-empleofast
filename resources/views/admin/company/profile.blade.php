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

    <link rel="stylesheet" href="{{ asset('css/apps.css') }}">
</head>
<style>
    .main-layout .content-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container-2 {
        padding: 20px;

        max-width: 100%;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .left,
    .right {
        width: 45%;
    }

    .right {
        text-align: center;
        background-color: #ff6f61;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
    }

    .right img {
        border-radius: 50%;
        width: 100px;
        height: 100px;
        object-fit: cover;
    }

    h1 {
        color: #00bfa5;
        font-size: 36px;
        margin: 0;
    }

    h2 {
        font-size: 24px;
        margin: 20px 0 10px;
    }

    p {
        font-size: 16px;
        line-height: 1.5;
        margin: 10px 0;
    }

    .details p {
        margin: 5px 0;
    }

    .details p span {
        font-weight: bold;
    }

    .social-icons {
        margin-top: 10px;
    }

    .social-icons a {
        color: #000;
        margin-right: 10px;
        text-decoration: none;
    }

    .contact-button {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        border: 2px solid #00bfa5;
        border-radius: 5px;
        color: #00bfa5;
        text-decoration: none;
        font-weight: bold;
    }

    /* Adaptar container-2 al modo oscuro */
    .dark-mode .container-2 {
        color: var(--black-color);
        /* Texto ajustado */
    }

    .dark-mode .container-2 .right {
        background-color: var(--primary-color);
        /* Fondo de la derecha */
        color: var(--black-color);
        /* Texto ajustado */
    }

    .dark-mode .container-2 .social-icons a {
        color: var(--black-color);
        /* Texto ajustado */
    }

    .dark-mode .container-2 .contact-button {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background-color: transparent;
    }

    .dark-mode .container-2 .contact-button:hover {
        background-color: var(--primary-color);
        color: var(--white-color);
    }
</style>

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

                <div class="nav-section nav-center">
                    <form action="#" class="search-form">
                        <input type="search" placeholder="Search" class="search-input" required>
                        <button class="nav-button search-button">
                            <i class="uil uil-search"></i>
                        </button>
                    </form>
                    <button class="nav-button mic-button">
                        <i class="uil uil-microphone"></i>
                    </button>
                </div>

                <div class="nav-section nav-right">
                    <button class="nav-button search-button">
                        <i class="uil uil-search"></i>
                    </button>
                    <button class="nav-button theme-button">
                        <i class="uil uil-moon"></i>
                    </button>
                    <img src="images/user.jpg" alt="User Image" class="user-image">
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
                    <a href="#" class="nav-logo">
                        <img src="images/logo.png" alt="Logo" class="logo-image">
                        <h2 class="logo-text">CnTube</h2>
                    </a>
                </div>

                <div class="links-container">
                    <div class="link-section">
                        <a href="#" class="link-item">
                            <i class="uil uil-estate"></i> Home
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-video"></i> Shorts
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-tv-retro"></i> Subscriptions
                        </a>
                    </div>
                    <div class="section-separator"></div>

                    <div class="link-section">
                        <h4 class="section-title">You</h4>
                        <a href="#" class="link-item">
                            <i class="uil uil-user-square"></i> Your channel
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-history"></i> History
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-clock"></i> Watch later
                        </a>
                    </div>
                    <div class="section-separator"></div>

                    <div class="link-section">
                        <h4 class="section-title">Explore</h4>
                        <a href="#" class="link-item">
                            <i class="uil uil-fire"></i> Trending
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-music"></i> Music
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-basketball"></i> Gaming
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-trophy"></i> Sports
                        </a>
                    </div>
                    <div class="section-separator"></div>

                    <div class="link-section">
                        <h4 class="section-title">More from YouTube</h4>
                        <a href="#" class="link-item">
                            <i class="uil uil-shield-plus"></i> YouTube Plus
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-headphones-alt"></i> YouTube Music
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-airplay"></i> YouTube Kids
                        </a>
                    </div>
                    <div class="section-separator"></div>

                    <div class="link-section">
                        <a href="#" class="link-item">
                            <i class="uil uil-setting"></i> Settings
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-file-medical-alt"></i> Report
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-question-circle"></i> Help
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-exclamation-triangle"></i> Feedback
                        </a>
                    </div>
                </div>
            </aside>

            <div class="content-wrapper">
                <div class="container-2">
                    <div class="left">
                        <h1>Bienvenido, {{ $company->name }}</h1>
                        <p class="channel-name">
                            Soy un desarrollador web creativo.
                        </p>
                        <h2>
                            Detalles
                        </h2>
                        <div class="details">
                            <p>
                                <span>
                                    Nombre:
                                </span>
                                Ann Norton
                            </p>
                            <p>
                                <span>
                                    Edad:
                                </span>
                                32 años
                            </p>
                            <p>
                                <span>
                                    Ubicación:
                                </span>
                                Hertogenbosch, Países Bajos, Tierra
                            </p>
                        </div>
                        <div class="social-icons">
                            <a href="#">
                                <i class="fab fa-facebook">
                                </i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter">
                                </i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram">
                                </i>
                            </a>
                        </div>
                        <h2>
                            Acerca de mí
                        </h2>
                        <p>
                            Soy un diseñador web completo. Duis aute irure dolor in reprehenderit in voluptate velit
                            esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui
                            officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            Imagen de
                            <a href="https://www.freepik.com" target="_blank">
                                Freepik
                            </a>
                        </p>
                        <a class="contact-button" href="#">
                            CONTÁCTAME
                        </a>
                    </div>
                    <div class="right">
                        <img alt="Imagen de una persona trabajando en una computadora" height="100"
                            src="https://storage.googleapis.com/a1aa/image/0Vf3L8aGE92AOiKPLQiEzKV0QlRZuWeITGYJTIBzufOJBSrnA.jpg"
                            width="100" />
                        <h2>
                            HOLA, SOY PATRYCJA
                        </h2>
                        <p>
                            Soy un diseñador gráfico versátil que puede abordar proyectos de marketing desde el concepto
                            hasta la
                            implementación.
                        </p>
                        <div class="social-icons">
                            <a href="#">
                                <i class="fab fa-facebook">
                                </i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter">
                                </i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram">
                                </i>
                            </a>
                            <a href="#">
                                <i class="fab fa-linkedin">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
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
