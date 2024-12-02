<!DOCTYPE html>

<!-- Created By CodingNepal - www.codingnepalweb.com -->

<html lang="en">


<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vertical Card Slider | CodingNepal</title>

    <link rel="stylesheet" href="{{ asset('css/jobs/applications.css') }}">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
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
                            <img src="{{ asset('images/logof.png') }}" alt="Logo" class="logo-image"
                                style="width: 130px">

                        </a>
                    </center>
                </div>

                <div class="links-container">
                    <div class="link-section">
                        <a href="/empleos/{{ $company->id }}/publicados" class="link-item">
                            <i class="uil uil-clipboard-notes"></i> Empleos Publicados
                        </a>
                    </div>
                    <div class="section-separator"></div>

                    <div class="link-section">
                        <h4 class="section-title">De ti</h4>
                        <a href="/empresas/admin/profile" class="link-item">
                            <i class="uil uil-user-circle"></i> Perfil
                        </a>
                        <a href="/admin/jobs/{{ $company->id }}/create" class="link-item">
                            <i class="uil uil-plus-circle"></i> Publicar Empleo
                        </a>
                        <a href="#" class="link-item">
                            <i class="uil uil-list-ui-alt"></i> Sin Atender
                        </a>
                    </div>
                    {{-- <div class="section-separator"></div>

                    <div class="link-section">
                        <h4 class="section-title">Otros</h4>
                        <a href="#" class="link-item">
                            <i class="uil uil-envelope"></i> Mensajes
                        </a>
                    </div> --}}
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

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre del Trabajo</th>
                            <th scope="col">Candidato Postulado</th>
                            <th scope="col">Curriculum</th>
                            <th scope="col">Mensaje</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Fecha de Postulación</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobs as $job)
                            @foreach ($job->applications as $application)
                                <tr>
                                    <td>{{ $application->id }}</td>
                                    <td>{{ $application->job->title }}</td>
                                    <td>{{ $application->candidate->name }}</td>
                                    <td><a href="{{ $application->cv_url }}" target="_blank">Ver CV</a></td>
                                    <td>{{ $application->message }}</td>
                                    <td>{{ $application->status }}</td>
                                    <td>{{ $application->created_at->format('d-m-Y') }}</td>
                                    <td>
                                        <form action="#"
                                            method="POST">
                                            @csrf
                                            <select name="status" onchange="this.form.submit()">
                                                <option value="pendiente"
                                                    {{ $application->status == 'pendiente' ? 'selected' : '' }}>
                                                    Pendiente</option>
                                                <option value="aceptado"
                                                    {{ $application->status == 'aceptado' ? 'selected' : '' }}>Aceptado
                                                </option>
                                                <option value="rechazado"
                                                    {{ $application->status == 'rechazado' ? 'selected' : '' }}>
                                                    Rechazado</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>


            </div>
        </main>
    </div>


</body>
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const cards = document.querySelectorAll('.card');
        let draggedCard = null;

        cards.forEach(card => {
            card.addEventListener('dragstart', dragStart);
            card.addEventListener('dragend', dragEnd);
            card.addEventListener('dragover', dragOver);
            card.addEventListener('drop', drop);
        });

        function dragStart(e) {
            draggedCard = e.target;
            e.target.style.opacity = '0.5';
        }

        function dragEnd(e) {
            e.target.style.opacity = '1';
            draggedCard = null;
        }

        function dragOver(e) {
            e.preventDefault();
        }

        function drop(e) {
            e.preventDefault();
            if (draggedCard !== e.target && e.target.classList.contains('card')) {
                const draggedIndex = Array.from(cards).indexOf(draggedCard);
                const targetIndex = Array.from(cards).indexOf(e.target);

                // Reorder the cards based on drag and drop position
                if (draggedIndex < targetIndex) {
                    e.target.after(draggedCard);
                } else {
                    e.target.before(draggedCard);
                }
            }
        }
    });
</script>
</body>

</html>
