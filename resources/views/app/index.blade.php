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
                    <button class="category-button active">All</button>
                    <button class="category-button">Website</button>
                    <button class="category-button">Music</button>
                    <button class="category-button">Gaming</button>
                    <button class="category-button">Node.js</button>
                    <button class="category-button">JavaScript</button>
                    <button class="category-button">React.js</button>
                    <button class="category-button">TypeScript</button>
                    <button class="category-button">Coding</button>
                    <button class="category-button">Next.js</button>
                    <button class="category-button">Data analysis</button>
                    <button class="category-button">Web design</button>
                    <button class="category-button">HTML</button>
                    <button class="category-button">Tailwind</button>
                    <button class="category-button">CSS</button>
                    <button class="category-button">Express.js</button>
                </div>

                <!-- Video List -->
                <div class="video-list">
                    @foreach ($jobs as $job )
                    <a href="#" class="video-card">
                        <div class="thumbnail-container">
                            @if ($job->image_url)
                                <img src="{{ Storage::url($job->image_url) }}" alt="Imagen del trabajo" class="thumbnail">
                                @else
                                    <span>Imagen no disponible</span>
                                @endif
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
