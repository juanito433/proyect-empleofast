<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Homepage Clone | CodingNepal</title>
    <!-- Linking Unicons For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{ asset('css/apps.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Jobsperfiles.css') }}">
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
                        <img src="images/logo.png" alt="Logo" class="logo-image">
                        <h2 class="logo-text">CnTube</h2>
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
                <!-- Category List -->
                <div class="category-list">
                    <button class="category-button" data-category="all">Todos</button>
                    <button class="category-button" data-category="Tecnología">Tecnología</button>
                    <button class="category-button" data-category="Marketing">Marketing</button>
                    <button class="category-button" data-category="Salud">Salud</button>
                    <button class="category-button" data-category="Educación">Educación</button>
                    <button class="category-button" data-category="Finanzas">Finanzas</button>
                    <button class="category-button" data-category="Ventas">Ventas</button>
                    <button class="category-button" data-category="Tiempo completo">Tiempo completo</button>
                    <button class="category-button" data-category="Mediotiempo">Medio tiempo</button>
                    <button class="category-button" data-category="Freelance">Freelance</button>
                    <button class="category-button" data-category="Temporal">Temporal</button>
                    <button class="category-button" data-category="Híbrido">Híbrido</button>
                    <button class="category-button" data-category="Remoto">Remoto</button>
                </div>

                <!-- Video List -->
                <div class="video-list">
                    @foreach ($jobs as $job )
                    <a href="#" class="video-card" data-category="{{$job->category}}, {{$job->type_jobs}}" data-description="{{$job->description}}" data-salary="{{$job->salary}}"
                        data-category="{{$job->category}}" data-publication_date="{{$job->publication_date}}" data-type_jobs="{{$job->type_jobs}}">
                        <div class="thumbnail-container">
                            <img src="{{ asset('images/burgerking.png') }}" alt="Imagen del trabajo" class="thumbnail">
                        </div>
                        <div class="video-info">
                            <img src="https://yt3.googleusercontent.com/LrCNrwOMkNOpLKnRl0GgvIQOgo1mR90oXa1pjbuSRIRBT3_FMTYUbdEllsUTxt7Wq8-qPOdd=s160-c-k-c0x00ffffff-no-rj"
                                alt="Channel Logo" class="icon">
                            <div class="video-details">
                                <h2 class="title">{{$job->title}}</h2>
                                <p class="channel-name">{{$job->company->name ?? 'no hay empresa'}}</p>
                                <p class="views"><strong>Salario:</strong> ${{ number_format($job->salary, 2) }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </main>
    </div>

    <!-- Modal de los perfiles de empleo-->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="{{ asset('images/burgerking.png') }}">
            <h2 id="modalTitle"><span id="jobTitle"></span></h2>
            <p id="modalDescription">Descripción: <span id="jobDescription"></span></p>
            <p id="modalCategory">categorias: <span id="jobCategory"></span></p>
            <p id="modalType_jobs">Tipo de Trabajo: <span id="jobType_jobs"></span></p>
            <p id="modalSalary">Salario: <span id="jobSalary"></span></p>
            <p id="modalPublication_date">Publicado: <span id="jobPublicationDate"></span></p>
        </div>
    </div>

    <script>
        // Obtener todos los botones de categoría
        const categoryButtons = document.querySelectorAll('.category-button');
        const videoCards = document.querySelectorAll('.video-card');

        // Arreglo para almacenar las categorías seleccionadas
        let selectedCategories = [];

        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');

                // Si se selecciona "Todos", desmarcar todas las demás categorías
                if (category === 'all') {
                    selectedCategories = [];
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                } else {
                    if (selectedCategories.includes(category)) {
                        selectedCategories = selectedCategories.filter(item => item !== category);
                        button.classList.remove('active');
                    } else {
                        selectedCategories.push(category);
                        button.classList.add('active');
                    }
                }

                videoCards.forEach(card => {
                    const cardCategories = card.getAttribute('data-category').split(' ');
                    const match = selectedCategories.length === 0 || selectedCategories.some(selectedCategory => cardCategories.includes(selectedCategory));
                    card.style.display = match ? 'block' : 'none';
                });
            });
        });

        // id del modal para invocar la información
        const modal = document.getElementById("myModal");
        const modalTitle = document.getElementById("modalTitle");
        const modalDescription = document.getElementById("modalDescription");
        const modalCategory = document.getElementById("modalCategory");
        const modalType_jobs = document.getElementById("modalType_jobs");
        const modalSalary = document.getElementById("modalSalary");
        const modalPublication_date = document.getElementById("modalPublication_date");
        const closeModal = document.getElementsByClassName("close")[0];

        // Cerrar el modal con la normalmente con la x
        closeModal.onclick = function() {
            modal.style.display = "none";
        }

        // Cerrar el modal cuando se hace clic fuera del contenido del modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        // Agregar evento de clic a cada tarjeta
        videoCards.forEach(card => {
            card.addEventListener("click", () => {
                const title = card.querySelector(".title").innerText;
                const description = card.getAttribute('data-description');
                const category = card.getAttribute('data-category');
                const type_jobs = card.getAttribute('data-type_jobs');
                const salary = card.getAttribute('data-salary');
                const publication_date = card.getAttribute('data-publication_date');

                // Asignar valores a los elementos del modal
                document.getElementById("jobTitle").innerText = title;
                document.getElementById("jobDescription").innerText = description;
                document.getElementById("jobCategory").innerText = category;
                document.getElementById("jobType_jobs").innerText = type_jobs;
                document.getElementById("jobSalary").innerText = salary;
                document.getElementById("jobPublicationDate").innerText = publication_date;

                modal.style.display = "block";
            });
        });
    </script>
    <!-- <script>
        // Obtener todos los botones de categoría
        const categoryButtons = document.querySelectorAll('.category-button');
        const videoCards = document.querySelectorAll('.video-card');

        // Arreglo para almacenar las categorías seleccionadas
        let selectedCategories = [];

        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');

                // Si la categoría es "all", limpiar la selección y deseleccionar otros botones
                if (category === 'all') {
                    selectedCategories = [];
                    categoryButtons.forEach(btn => {
                        btn.classList.remove('active');
                    });
                    button.classList.remove('active'); // Mantener "Todos" como activo
                } else {
                    // Si la categoría ya está seleccionada, la deseleccionamos
                    if (selectedCategories.includes(category)) {
                        selectedCategories = selectedCategories.filter(item => item !== category);
                        button.classList.remove('active');
                    } else {
                        // Si no está seleccionada, la agregamos
                        selectedCategories.push(category);
                        button.classList.add('active');
                    }
                }

                // Filtrar las tarjetas de trabajo según las categorías seleccionadas
                videoCards.forEach(card => {
                    const cardCategories = card.getAttribute('data-category').split(' ');

                    // Mostrar la tarjeta si coincide con alguna categoría seleccionada
                    const match = selectedCategories.length === 0 || selectedCategories.some(selectedCategory => cardCategories.includes(selectedCategory));
                    card.style.display = match ? 'block' : 'none';
                });
            });
        });
    </script> -->


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