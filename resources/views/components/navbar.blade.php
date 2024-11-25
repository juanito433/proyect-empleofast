<style>
    body {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    }

    nav {
        top: 0;
        left: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 1rem 0rem;
        background: #98c1d9;
        color: white;
    }

    nav img.logo {
        width: 220px;
        height: 50px;
        object-fit: cover;
    }
    nav img.perfil {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        object-fit: cover;

    }

    .info-nav {
        padding: 0 1rem;
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 26px;
    }

    .menu-dialog {
        display: flex;
        position: fixed;
        top: 100px;
        right: 20px;
        width: 250px;
        height: 450px;
        background: #3d5a80;
        z-index: 2;
        border-radius: 10px;
        padding: 1.5rem;
    }

    .menu-dialog hr {
        width: 250px;
        border: 1px solid #373738;
    }

    .menu-item {
        display: flex;
        align-items: center;
        gap: 15px;
        color: rgb(255, 253, 253);
        font-size: 18px;
        font-weight: 500;
        height: 50px;
        cursor: pointer;
    }

    .menu-item:hover {
        color: white;
    }

    .menu-item img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
    }

    .menu-item_info {
        display: flex;
        flex-direction: column;
    }

    .name {
        color: white;
        font-size: 16px;
        font-weight: 500;
    }

    .email {
        color: rgb(170, 166, 166);
        font-size: 14px;
        font-weight: 500;
    }

    .title {
        color: white;
        font-size: 20px;
        font-weight: 500;
        margin: 0;
    }

    .members-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .member-item {
        display: flex;
        align-items: center;
        padding: 0.7rem;
        gap: 15px;
        color: rgb(170, 166, 166);
        font-size: 18px;
        font-weight: 500;
        height: 50px;
        cursor: pointer;
        border-radius: 10px;
    }

    .member-item:hover {
        background: #6f6f70;
    }

    .member-item img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
    }

    .fade-in {
        animation: fadeIn 0.5s forwards;
    }

    .fade-out {
        animation: fadeOut 0.5s forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            display: none;
        }
    }

    .menu-dialog {
        display: none;
        /* Cambia el comportamiento inicial a oculto */
        opacity: 0;
        position: fixed;
        top: 100px;
        right: 20px;
        width: 250px;
        height: auto;
        background: #98c1d9;
        z-index: 2;
        border-radius: 10px;
        padding: 1.5rem;
        transition: opacity 0.5s;
    }

    .fade-in {
        display: block;
        opacity: 1;
    }

    .fade-out {
        display: none;
        opacity: 0;
    }
</style>
<nav>
    <div class="logo" style="margin-left: 50px" style="width: 300px">
        <img src="{{asset('images/logof.png')}}" alt="logo" class="logo">
    </div>
    <div class="info-nav">
        
        
        <img id="prof-pic" src="{{asset('images/perfil.webp')}}" alt="perfil" class="perfil" />
    </div>
</nav>
<div class="menu-dialog" id="menu">
    <div class="menu">
        <div class="menu-item">
            <i class="bi bi-person"></i>
            <p>My Profile</p>
        </div>
        <div class="menu-item">
            <i class="bi bi-gear"></i>
            <p>Global Settings</p>
        </div>
        <hr />
        <div class="menu-item">
            <i class="bi bi-box"></i>
            <p>Products</p>
        </div>
        <div class="menu-item">
            <i class="bi bi-box-arrow-right"></i>
            <p>Logout</p>
        </div>
        <hr />
        {{-- <span class="title">Team Members</span>
        <div class="members-list">
            <div class="member-item">
                
            </div>
            <div class="member-item">
            </div>
        </div> --}}
    </div>
</div>
<script>
    const menu = document.getElementById('menu');
const profPic = document.getElementById('prof-pic');

// Variable para rastrear el estado del menú
let isMenuVisible = false;

profPic.addEventListener('click', function (event) {
    event.stopPropagation(); // Evita que el clic en la imagen cierre el menú
    if (isMenuVisible) {
        // Oculta el menú
        menu.classList.remove('fade-in');
        menu.classList.add('fade-out');
    } else {
        // Muestra el menú
        menu.classList.remove('fade-out');
        menu.classList.add('fade-in');
    }
    isMenuVisible = !isMenuVisible;
});

document.addEventListener('click', function (event) {
    const isClickInsideMenu = menu.contains(event.target);
    const isClickOnProfPic = profPic.contains(event.target);

    if (!isClickInsideMenu && !isClickOnProfPic && isMenuVisible) {
        // Oculta el menú si se hace clic fuera
        menu.classList.remove('fade-in');
        menu.classList.add('fade-out');
        isMenuVisible = false;
    }
});

</script>
