<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Homepage Clone | CodingNepal</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jobs/jobsperfiles.css') }}">
    <style>
        /* Estilos para los botones de categoría */
        .category-button {
            border: none;
            cursor: pointer;
            font-weight: 500;
            font-size: 0.94rem;
            border-radius: 0.5rem;
            white-space: nowrap;
            color: var(--black-color);
            padding: 0.4rem 0.75rem;
            background: var(--light-gray-color);
            transition: background 0.3s, color 0.3s;
        }

        .category-button.active {
            background: black;
            /* Cambiar a negro cuando está activo */
            color: white;
            /* Cambiar el texto a blanco */
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
                        <h2 class="logo-text">EmpleaFast</h2>
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
                    <center>
                        <a href="#" class="nav-logo">
                            <img src="{{ asset('images/logof.png') }}" alt="Logo" class="logo-image"
                                style="width: 130px">

                        </a>
                    </center>
                </div>

                <div class="links-container">
                    <div class="link-section">
                        <a href="#" class="link-item">
                            <i class="uil uil-estate"></i> Empleos Diponibles
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-building"></i> Empresas
                        </a>
                    </div>
                    <div class="section-separator"></div>

                    <div class="link-section">
                        <h4 class="section-title">De ti</h4>
                        <a href="/candidatos/perfil" class="link-item">
                            <i class="uil uil-user-circle"></i> Perfil
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-file-check"></i> Postulaciones
                        </a>
                        <a href="#" class="link-item">
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

            </aside>

            <div class="content-wrapper">
                <!-- Category List -->
                <div class="category-list">
                    <button class="category-button" data-category="all">Todos</button>
                    @foreach ($categories as $category)
                    <button class="category-button" data-category="{{ $category->category }}">{{ $category->category }}</button>
                    @endforeach
                    <button class="category-button" data-category="recientes">Recientes</button>
                </div>
                <div class="type-list"
                    style="position: sticky; top: 40px; z-index: 10; background: var(--white-color);">
                    @foreach ($types as $type)
                    <button class="type-button"
                        style="border: none; cursor: pointer; font-weight: 500; font-size: 0.94rem; border-radius: 0.5rem; white-space: nowrap; color: var(--black-color); padding: 0.4rem 0.75rem; background: var(--light-gray-color);"
                        data-type="{{ $type->type_jobs }}">{{ $type->type_jobs }}</button>
                    @endforeach
                </div>

                <!-- Video List -->
                <div class="video-list">
                    @foreach ($jobs as $job)
                    <a href="#" class="video-card" data-category="{{ $job->category }}"
                        data-type_jobs="{{ $job->type_jobs }}" data-description="{{ $job->description }}"
                        data-salary="{{ $job->salary }}" data-publication_date="{{ $job->publication_date }}"
                        data-image="{{ Storage::url($job->image_url) }}">
                        <div class="thumbnail-container">
                            <img src="{{ Storage::url($job->image_url) }}" alt="Imagen del trabajo"
                                class="thumbnail">
                        </div>
                        <div class="video-info">
                            <img src="{{ Storage::url($job->image_url) }}" alt="Channel Logo" class="icon">
                            <div class="video-details">
                                <h2 class="title">{{ $job->title }}</h2>
                                <p class="channel-name">{{ $job->company->name ?? 'no hay empresa' }}</p>
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
            <img src="" alt="Imagen del trabajo" id="modalImage" style="max-width: 100%; height: auto;">
            <h2 id="modalTitle"><span id="jobTitle"></span></h2>
            <p id="modalDescription" class="link-item">Descripción: <span id="jobDescription"></span></p>
            <p id="modalCategory">Categorías: <span id="jobCategory"></span></p>
            <p id="modalType_jobs">Tipo de Trabajo: <span id="jobType_jobs"></span></p>
            <p id="modalSalary">Salario: <span id="jobSalary"></span></p>
            <p id="modalPublication_date">Publicado: <span id="jobPublicationDate"></span></p>
        </div>
    </div>

    <script>
        // Obtener todos los botones de categoría y las tarjetas de trabajo
        const categoryButtons = document.querySelectorAll('.category-button');
        const typeButtons = document.querySelectorAll('.type-button');
        const videoCards = document.querySelectorAll('.video-card');

        // Arreglos para almacenar las categorías y tipos seleccionados
        let selectedCategories = [];
        let selectedTypes = [];

        // Función para filtrar trabajos en función de las categorías y tipos seleccionados
        function filterJobs() {
            videoCards.forEach(card => {
                const cardCategories = card.getAttribute('data-category').split(', ');
                const cardTypes = card.getAttribute('data-type_jobs').split(', ');

                const matchCategory = selectedCategories.length === 0 || selectedCategories.some(category =>
                    cardCategories.includes(category));
                const matchType = selectedTypes.length === 0 || selectedTypes.some(type => cardTypes.includes(type));

                // Mostrar u ocultar las tarjetas según los filtros seleccionados
                card.style.display = matchCategory && matchType ? 'block' : 'none';
            });
        }

        // Evento para los botones de categoría
        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');

                // Cambiar el estado activo de los botones
                button.classList.toggle('active');

                if (category === 'all') {
                    // Si se selecciona "Todos", resetear todos los filtros
                    selectedCategories = [];
                    categoryButtons.forEach(btn => btn.classList.remove('active')); // Desmarcar todos
                } else if (selectedCategories.includes(category)) {
                    // Si la categoría ya está seleccionada, desmarcarla
                    selectedCategories = selectedCategories.filter(item => item !== category);
                } else {
                    // Si no está seleccionada, agregarla
                    selectedCategories.push(category);
                }

                // Actualizar las tarjetas filtradas
                filterJobs();
            });
        });

        // Evento para los botones de tipo de trabajo
        typeButtons.forEach(button => {
            button.addEventListener('click', () => {
                const type = button.getAttribute('data-type');

                // Cambiar el estado activo de los botones
                button.classList.toggle('active');

                if (selectedTypes.includes(type)) {
                    // Si el tipo ya está seleccionado, desmarcarlo
                    selectedTypes = selectedTypes.filter(item => item !== type);
                } else {
                    // Si no está seleccionado, agregarlo
                    selectedTypes.push(type);
                }

                // Actualizar las tarjetas filtradas
                filterJobs();
            });
        });

        // Obtener la fecha de hace 7 días para el filtro "Recientes"
        const today = new Date();
        const oneWeekAgo = new Date(today.getTime() - 7 * 24 * 60 * 60 * 1000);

        // Evento para el botón "Recientes"
        categoryButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');

                if (category === 'recientes') {
                    // Filtrar trabajos por fecha reciente (menos de 7 días)
                    videoCards.forEach(card => {
                        const publicationDate = new Date(card.getAttribute('data-publication_date'));
                        const isRecent = publicationDate >= oneWeekAgo;

                        card.style.display = isRecent ? 'block' : 'none';
                    });
                } else {
                    // Filtrar por categoría y tipo como antes
                    filterJobs();
                }
            });
        });

        // Lógica del modal (sin cambios respecto a tu código)
        const modal = document.getElementById("myModal");
        const closeModal = document.getElementsByClassName("close")[0];

        // Cerrar el modal con la X
        closeModal.onclick = function() {
            modal.style.display = "none";
        };

        // Cerrar el modal al hacer clic fuera del contenido
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };

        // Agregar evento a cada tarjeta para abrir el modal
        videoCards.forEach(card => {
            card.addEventListener("click", () => {
                const title = card.querySelector(".title").innerText;
                const description = card.getAttribute('data-description');
                const category = card.getAttribute('data-category');
                const type_jobs = card.getAttribute('data-type_jobs');
                const salary = card.getAttribute('data-salary');
                const publication_date = card.getAttribute('data-publication_date');
                const image = card.getAttribute('data-image');

                // Asignar valores al modal
                document.getElementById("jobTitle").innerText = title;
                document.getElementById("jobDescription").innerText = description;
                document.getElementById("jobCategory").innerText = category;
                document.getElementById("jobType_jobs").innerText = type_jobs;
                document.getElementById("jobSalary").innerText = salary;
                document.getElementById("jobPublicationDate").innerText = publication_date;
                modal.querySelector("img").src = image;
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
                    const match = selectedCategories.length === 0 || selectedCategories.some(
                        selectedCategory => cardCategories.includes(selectedCategory));
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

        if (localStorage.getItem("darkMode") === "enabled") {
            document.body.classList.add("dark-mode");
            themeButton.classList.replace("uil-moon", "uil-sun");
        } else {
            themeButton.classList.replace("uil-sun", "uil-moon");
        }

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