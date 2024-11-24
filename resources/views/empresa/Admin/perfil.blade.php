<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Sidebar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
</head>

<body>
    <nav class="sidebar">
        <div class="sidebar-top-wrapper">
            <div class="sidebar-top">
                <a href="#" class="logo__wrapper">
                    <img src="{{ asset('images/images.png') }}" alt="Logo" class="logo-small">
                    <span class="sidebar-title hide">
                        Starbucks
                    </span>
                </a>
            </div>
            <div class="expand-btn">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.00979 2.72L10.3565 7.06667C10.8698 7.58 10.8698 8.42 10.3565 8.93333L6.00979 13.28"
                        stroke="#F4F6F9" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <div class="search__wrapper">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9 9L13 13M5.66667 10.3333C3.08934 10.3333 1 8.244 1 5.66667C1 3.08934 3.08934 1 5.66667 1C8.244 1 10.3333 3.08934 10.3333 5.66667C10.3333 8.244 8.244 10.3333 5.66667 10.3333Z"
                    stroke="#989EB3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <input type="search" placeholder="Search for anything...">
        </div>
        <div class="sidebar-links">
            <h2>Main</h2>
            <ul>
                <li>
                    <a href="#home" title="Home" class="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                        </svg>
                        <span class="link hide">Home</span>
                        <span class="tooltip__content">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#orders" title="Orders" class="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5"></path>
                            <path d="M12 12l8 -4.5"></path>
                            <path d="M12 12l0 9"></path>
                            <path d="M12 12l-8 -4.5"></path>
                        </svg>
                        <span class="link hide">Orders</span>
                        <span class="tooltip__content">Orders</span>
                    </a>
                </li>
                <li>
                    <a href="#documentation" title="Documentation" class="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2">
                            </path>
                        </svg>
                        <span class="link hide">Documentation</span>
                        <span class="tooltip__content">Documentation</span>
                    </a>
                </li>
                <li>
                    <a href="#map-overview" title="Map Overview" class="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-check"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M11 18l-2 -1l-6 3v-13l6 -3l6 3l6 -3v9"></path>
                            <path d="M9 4v13"></path>
                            <path d="M15 7v8"></path>
                            <path d="M15 19l2 2l4 -4"></path>
                        </svg>
                        <span class="link hide">Map Overview</span>
                        <span class="tooltip__content">Map Overview</span>
                    </a>
                </li>
                <li>
                    <a href="#statistics" title="Statistics" class="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chart-pie"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-6.8a2 2 0 0 1 -2 -2v-7a.9 .9 0 0 0 -1 -.8">
                            </path>
                            <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a1 1 0 0 1 -1 -1v-4.5"></path>
                        </svg>
                        <span class="link hide">Statistics</span>
                        <span class="tooltip__content">Statistics</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidebar-links">
            <h2>Communication</h2>
            <ul>
                <li>
                    <a href="#communication" title="Communication" class="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z">
                            </path>
                            <path d="M4 13h3l3 3h4l3 -3h3"></path>
                        </svg>
                        <span class="link hide">Communication</span>
                        <span class="tooltip__content">Communication</span>
                    </a>
                </li>
                <li>
                    <a href="#couriers" title="Couriers" class="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                        </svg>
                        <span class="link hide">Couriers</span>
                        <span class="tooltip__content">Couriers</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="sidebar-links bottom-links">
            <ul>
                <li>
                    <a href="#settings" title="Settings" class="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                            </path>
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                        </svg>
                        <span class="link hide">Settings</span>
                        <span class="tooltip__content">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#help" title="Help" class="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                            <path d="M12 16v.01"></path>
                            <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483"></path>
                        </svg>
                        <span class="link hide">Help</span>
                        <span class="tooltip__content">Help</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="divider"></div>
        <div class="sidebar__profile">
            <div class="avatar__wrapper">
                <img class="avatar" src="{{ asset('images/images.png') }}" alt="Joe Doe Picture">
                <div class="online__status"></div>
            </div>
            <section class="avatar__name hide">
                <div class="user-name">Starbucks</div>
                <div class="email">starbucks@gmail.com</div>
            </section>
            <a href="#logout" class="logout">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
                    <path d="M9 12h12l-3 -3"></path>
                    <path d="M18 15l3 -3"></path>
                </svg>
            </a>
        </div>
        </div>
    </nav>
    <main class="content" id="content">
        <div class="info1">
            <img class="float-left" src="{{ asset('images/images.png') }}" alt="">
            <h1 class="font-mono nombre_empresa">Starbucks</h1>
            <p class="font-sans">C. Colón Sn Col. Centro Teapa, Tabasco Mexico</p>
        </div>
        <div class="description margen shadow-lg">
            <h3 class="font-mono italic">Descripción</h3>
            <p class="font-sans">
                esta empresa blblalablabl bl bl b bl b lb l bl blb lb l bl b lb ll bllblblbllbblbl bl lb lb lb lb
                lblb lbbbllblblb ll lb l bbl blbllblb bl blblblbl b lbl lb lblbblblbl bl bllblblb lbblblbl lbl bbl
                bl bl bl bl lb blnks fvsd kd wl vlw kw vl dkskd j ,nn dj, jd ks vdkjs cwk dks ik d ksd k k ksk k k k
                eaksvb kw wk dksjnkwjds ckw k evksjddccks sdds ks dckws dvkw vkad iwidc sdli wsdilxcwld vli sdlkv
                wsldzvlwszdx vwiiszd xls dzxlc wszd xlkwsd xl szl l szlx lsd l f ld d fleodkfo edl fe d d fk eld fk
                edxf edo eonvoenvoe ov oe dx
            </p>
        </div>
        <div class="filosofia margen shadow-lg">
            <h3 class="font-mono italic ">Filosofia</h3>
            <div class="flex flex-row ">
                <div class="basis-1/3 hover:basis-1/2 margen shadow-2xl">
                    <h5 class="font-sans">Misión</h5>
                    <p class="font-sans">esta empresa blblalablabl bl bl b bl b lb l bl blb lb l bl b lb ll
                        bllblblbllbblbl
                        bl lb lb lb lb
                        lblb lbbbllblblb ll lb l bbl blbllblb bl blblblbl b lbl lb lblbblblbl bl bllblblb lbblblbl lbl
                        bbl
                        bl bl bl bl lb blnks fvsd kd wl vlw kw vl dkskd j ,nn dj, jd ks vdkjs cwk dks ik d ksd k k ksk k
                        k k
                        eaksvb kw wk dksjnkwjds ckw k evksjddccks sdds ks dckws dvkw vkad iwidc sdli wsdilxcwld vli
                        sdlkv
                        wsldzvlwszdx vwiiszd xls dzxlc wszd xlkwsd xl szl l szlx lsd l f ld d fleodkfo edl fe d d fk eld
                        fk
                        edxf edo eonvoenvoe ov oe dx
                    </p>
                </div>
                <div class="basis-1/3 hover:basis-1/2 margen shadow-2xl">
                    <h5 class="font-sans">Visión</h5>
                    <p class="font-sans">esta empresa blblalablabl bl bl b bl b lb l bl blb lb l bl b lb ll bllblblbllbblbl
                        bl lb lb lb lb
                        lblb lbbbllblblb ll lb l bbl blbllblb bl blblblbl b lbl lb lblbblblbl bl bllblblb lbblblbl lbl bbl
                        bl bl bl bl lb blnks fvsd kd wl vlw kw vl dkskd j ,nn dj, jd ks vdkjs cwk dks ik d ksd k k ksk k k k
                        eaksvb kw wk dksjnkwjds ckw k evksjddccks sdds ks dckws dvkw vkad iwidc sdli wsdilxcwld vli sdlkv
                        wsldzvlwszdx vwiiszd xls dzxlc wszd xlkwsd xl szl l szlx lsd l f ld d fleodkfo edl fe d d fk eld fk
                        edxf edo eonvoenvoe ov oe dx
                    </p>
                </div>
                <div class="basis-1/3 hover:basis-1/2 margen shadow-2xl">
                    <h5 class="font-sans">Valores</h5>
                    <ul class="list-none hover:list-disc">
                        <li>Respeto</li>
                        <li>Responsabilidad</li>
                        <li>Entusiasmo</li>
                        <li>Compromiso</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sociales margen shadow-lg">
            <h3 class="font-mono italic">Redes Sociales</h3>
            <button>
                <div class="flex items-center bg-white p-4 rounded-full shadow-2xl">
                    <img alt="Person wearing a hat and sunglasses, looking to the side" class="w-16 h-16 rounded-full"
                        height="64"
                        src="{{ asset('images/07f0d7b69ef071571e4ada2f4d6a053a-icono-de-instagram-colorido.webp') }}"
                        width="64" />
                    <div class="ml-4">
                        <div class="text-lg font-semibold text-gray-900">
                            Instagram
                        </div>
                        <div class="text-sm text-gray-500">
                            @StarbucksMx
                        </div>
                    </div>
                </div>
            </button>
            <button>
                <div class="flex items-center bg-white p-4 rounded-full shadow-2xl">
                    <img alt="Person wearing a hat and sunglasses, looking to the side" class="w-16 h-16 rounded-full"
                        height="64" src="{{ asset('images/facebook-logo-facebook-icon-transparent-free-png.webp') }}"
                        width="64" />
                    <div class="ml-4">
                        <div class="text-lg font-semibold text-gray-900">
                            Facebook
                        </div>
                        <div class="text-sm text-gray-500">
                            @StarbucksMx
                        </div>
                    </div>
                </div>
            </button>
            <button>
                <div class="flex items-center bg-white p-4 rounded-full shadow-2xl">
                    <img alt="Person wearing a hat and sunglasses, looking to the side" class="w-16 h-16 rounded-full"
                        height="64" src="{{ asset('images/8e72f7331b652b842b0c271ab144d332.png') }}" width="64" />
                    <div class="ml-4">
                        <div class="text-lg font-semibold text-gray-900">
                            X
                        </div>
                        <div class="text-sm text-gray-500">
                            @StarbucksMx
                        </div>
                    </div>
                </div>
            </button>
        </div>




    </main>
    </div>
    <script>
        const expand_btn = document.querySelector(".expand-btn");
        let activeIndex;
        expand_btn.addEventListener("click", () => {
            document.body.classList.toggle("collapsed");
        });
        const current = window.location.href;
        const allLinks = document.querySelectorAll(".sidebar-links a");
        allLinks.forEach((elem) => {
            elem.addEventListener("click", function() {
                const hrefLinkClick = elem.href;
                allLinks.forEach((link) => {
                    if (link.href == hrefLinkClick) {
                        link.classList.add("active");
                    } else {
                        link.classList.remove("active");
                    }
                });
            });
        });
        const searchInput = document.querySelector(".search__wrapper input");
        searchInput.addEventListener("focus", (e) => {
            document.body.classList.remove("collapsed");
        });
    </script>
</body>

</html>