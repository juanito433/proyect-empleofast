<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menu Example</title>
    <style>
        :root {
            --notification: #0349B4;
            --nav-bg: #ffffff;
            --border-lighter: #0D1117;
            --border-darker: #454C54;
            --github-button-hover: #8B949E;
            --background: #171B20;
            --color: #010409;
            --github: #C9D1D9;
            --nav-bg-hover: #D1D9E0;
            --navbar-height: 4rem;
        }

        body {
            font-family: "Segoe UI",
                "Noto Sans", sans-serif;
            font-size: 16px;
            user-select: none;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .menu__wrapper {
            display: flex;
            position: fixed;
            flex-direction: row;
            justify-content: space-between;
            width: 100vw;
            z-index: 2;
            gap: 1.5rem;
            background: var(--nav-bg);
            height: var(--navbar-height);
            padding: 0px 1rem;
            border-bottom: 1px solid var(--border-darker);
            align-items: center;
        }

        .logo__wrapper {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .page__title {
            color: var(--color);
            padding: 0.5rem 0.75rem;
            align-items: center;
            font-weight: 700;
            border-radius: 0.5rem;
            transition: all 0.45s ease-in-out;
            text-decoration: none;
        }

        .page__title:hover {
            background: var(--nav-bg-hover);
        }

        .notification-mark {
            width: 0.5rem;
            height: 0.5rem;
            top: -0.2rem;
            right: -0.2rem;
            border-radius: 50%;
            position: absolute;
            background: var(--notification);
        }

        @media (max-width: 400px) {
            .page__title {
                display: none;
            }
        }

        .logo {
            width: 4rem;
            height: 4rem;
            cursor: pointer;
        }

        .logo svg {
            fill: var(--color);
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
            margin-left: auto;
            align-items: center;
            flex-wrap: nowrap;
        }

        .action-button {
            position: relative;
            display: grid;
            grid-auto-columns: max-content;
            width: 2rem;
            height: 2rem;
            color: var(--color);
            background: transparent;
            border: 1px solid var(--border-darker);
            border-radius: 6px;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .action-button:hover {
            background: var(--nav-bg-hover);
        }

        .action-button svg {
            fill: var(--color);
        }

        .avatar-profile {
            cursor: pointer;
            height: 2rem;
            width: 2rem;
            outline: 1px solid var(--border-darker);
            object-fit: cover;
            border-radius: 50%;
        }

        .navigation__menu {
            background: var(--nav-bg);
            z-index: 3;
            border-left: 1px solid var(--border-darker);
            height: 100vh;
            opacity: 1;
            display: flex;
            width: 100%;
            flex-direction: column;
            padding: 0.75rem;
            right: 1;
            top: 0;
            border-radius: 0.5rem 0 0 0.5rem;
            position: fixed;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            animation: fadeInAnimation ease-in-out 0.5s forwards;
        }

        .navigation__menu__items {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            list-style-type: none;
            margin: 0;
            margin-top: 1rem;
            padding: 0;
            color: var(--nav-bg-hover);
        }

        .navigation__menu__items>li {
            display: flex;
            gap: 0.625rem;
            border-radius: 0.25rem;
            font-size: 0.875rem;
            height: 2.25rem;
            border-radius: 0.4rem;
            align-items: center;
            white-space: nowrap;
            color: var(--color);
            padding: 0px 0.5rem;
            border: 1px solid var(--nav-bg);
        }

        .navigation__menu__items>li:not(.separator) {
            cursor: pointer;
        }

        .navigation__menu__items>li:not(.separator):hover {
            background: var(--nav-bg-hover);
            color: var(--color);
            border: 1px solid var(--border-darker);
        }

        .navigation__menu__items>li>svg {
            min-width: 1rem;
            fill: var(--color);
        }

        .navigation__menu__items>.separator {
            display: flex;
            align-items: center;
            height: 0.4rem;
            padding: 0;
        }

        .navigation__menu__items>.separator>hr {
            border: 0.5px solid var(--border-darker);
            width: 100%;
        }

        .avatar-wrapper {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .avatar-wrapper .avatar-profile {
            width: 2.5rem;
            height: 2.5rem;
        }

        .avatar-name-wrapper {
            display: flex;
            flex-direction: column;
        }

        .avatar-name-alias {
            color: var(--color);
            font-weight: 600;
            white-space: nowrap;
        }

        .avatar-name {
            color: var(--color);
            font-size: 0.75rem;
            white-space: nowrap;
        }

        .close-button {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 0.4rem;
            margin-left: auto;
            cursor: pointer;
            height: 2rem;
            width: 2rem;
        }

        .close-button:hover {
            background: var(--nav-bg-hover);
        }

        .close-button svg {
            height: 1rem;
            width: 1rem;
            fill: var(--color);
        }

        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
                visibility: hidden;
                max-width: 0;
            }

            100% {
                opacity: 1;
                visibility: visible;
                max-width: 20rem;
            }
        }

        .none {
            display: none;
        }

        .hide {
            animation: fadeOutAnimation ease-in-out 0.5s forwards;
        }


        @keyframes fadeOutAnimation {
            0% {
                opacity: 1;
                max-width: 20rem;
                visibility: visible;
            }

            100% {
                opacity: 0;
                max-width: 0;
                visibility: hidden;
            }
        }
    </style>
</head>

<body>
    <nav class="menu__wrapper">
        <div class="logo__wrapper">
            <a href="#" title="Logo" class="logo">
                {{-- <svg height="32" aria-hidden="true" viewBox="0 0 16 16" version="1.1" width="32"
                    data-view-component="true">
                    <path
                        d="M8 0c4.42 0 8 3.58 8 8a8.013 8.013 0 0 1-5.45 7.59c-.4.08-.55-.17-.55-.38 0-.27.01-1.13.01-2.2 0-.75-.25-1.23-.54-1.48 1.78-.2 3.65-.88 3.65-3.95 0-.88-.31-1.59-.82-2.15.08-.2.36-1.02-.08-2.12 0 0-.67-.22-2.2.82-.64-.18-1.32-.27-2-.27-.68 0-1.36.09-2 .27-1.53-1.03-2.2-.82-2.2-.82-.44 1.1-.16 1.92-.08 2.12-.51.56-.82 1.28-.82 2.15 0 3.06 1.86 3.75 3.64 3.95-.23.2-.44.55-.51 1.07-.46.21-1.61.55-2.33-.66-.15-.24-.6-.83-1.23-.82-.67.01-.27.38.01.53.34.19.73.9.82 1.13.16.45.68 1.31 2.69.94 0 .67.01 1.3.01 1.49 0 .21-.15.45-.55.38A7.995 7.995 0 0 1 0 8c0-4.42 3.58-8 8-8Z">
                    </path>
                </svg> --}}
                <img src="{{ asset('images/logo.png') }}" alt="Perfil"
                    style="border-radius: 50%; object-fit: cover; width: 55px; height: 55px;">
            </a>
            <a href="#" class="page__title">
                Profile
            </a>
        </div>
        <div class="action-buttons">
            <button class="action-button">
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16"
                    data-view-component="true" class="octicon octicon-issue-opened Button-visual">
                    <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0 6.5 6.5 0 0 0-13 0Z"></path>
                </svg>
            </button>
            <button class="action-button">
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16"
                    data-view-component="true" class="octicon octicon-git-pull-request Button-visual">
                    <path
                        d="M1.5 3.25a2.25 2.25 0 1 1 3 2.122v5.256a2.251 2.251 0 1 1-1.5 0V5.372A2.25 2.25 0 0 1 1.5 3.25Zm5.677-.177L9.573.677A.25.25 0 0 1 10 .854V2.5h1A2.5 2.5 0 0 1 13.5 5v5.628a2.251 2.251 0 1 1-1.5 0V5a1 1 0 0 0-1-1h-1v1.646a.25.25 0 0 1-.427.177L7.177 3.427a.25.25 0 0 1 0-.354ZM3.75 2.5a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5Zm0 9.5a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5Zm8.25.75a.75.75 0 1 0 1.5 0 .75.75 0 0 0-1.5 0Z">
                    </path>
                </svg>
            </button>
            <button class="action-button">
                <span class="notification-mark"></span>
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16"
                    data-view-component="true" class="octicon octicon-inbox color-fg-muted mr-0">
                    <path>
                        
                    </path>
                </svg>
            </button>
            <img id="avatar-navbar" class="avatar-profile" src="{{ asset('images/burgerking.png') }}" alt="Profile">
        </div>
    </nav>
    <div class="navigation__menu none">
        <div class="avatar-wrapper">
            <img class="avatar-profile" src="{{ asset('images/burgerking.png') }}" alt="Profile">
            <div class="avatar-name-wrapper">
                <div class="avatar-name-alias">Burger King</div>
                <div class="avatar-name">Perfil Empresarial</div>
            </div>
            <div class="close-button">
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16"
                    data-view-component="true" class="octicon octicon-x">
                    <path
                        d="M3.72 3.72a.75.75 0 0 1 1.06 0L8 6.94l3.22-3.22a.749.749 0 0 1 1.275.326.749.749 0 0 1-.215.734L9.06 8l3.22 3.22a.749.749 0 0 1-.326 1.275.749.749 0 0 1-.734-.215L8 9.06l-3.22 3.22a.751.751 0 0 1-1.042-.018.751.751 0 0 1-.018-1.042L6.94 8 3.72 4.78a.75.75 0 0 1 0-1.06Z">
                    </path>
                </svg>
            </div>
        </div>
        <ul class="navigation__menu__items">
            <li>
                &#128640; Maximizing the reward function
            </li>
            <li class="separator">
                <hr>
            </li>
            <li>
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16"
                    data-view-component="true" class="octicon octicon-person">
                    <path
                        d="M10.561 8.073a6.005 6.005 0 0 1 3.432 5.142.75.75 0 1 1-1.498.07 4.5 4.5 0 0 0-8.99 0 .75.75 0 0 1-1.498-.07 6.004 6.004 0 0 1 3.431-5.142 3.999 3.999 0 1 1 5.123 0ZM10.5 5a2.5 2.5 0 1 0-5 0 2.5 2.5 0 0 0 5 0Z">
                    </path>
                </svg>
                Your Profile
            </li>
            <li class="separator">
                <hr>
            </li>
            <li>
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16"
                    data-view-component="true" class="octicon octicon-repo">
                    <path
                        d="M2 2.5A2.5 2.5 0 0 1 4.5 0h8.75a.75.75 0 0 1 .75.75v12.5a.75.75 0 0 1-.75.75h-2.5a.75.75 0 0 1 0-1.5h1.75v-2h-8a1 1 0 0 0-.714 1.7.75.75 0 1 1-1.072 1.05A2.495 2.495 0 0 1 2 11.5Zm10.5-1h-8a1 1 0 0 0-1 1v6.708A2.486 2.486 0 0 1 4.5 9h8ZM5 12.25a.25.25 0 0 1 .25-.25h3.5a.25.25 0 0 1 .25.25v3.25a.25.25 0 0 1-.4.2l-1.45-1.087a.249.249 0 0 0-.3 0L5.4 15.7a.25.25 0 0 1-.4-.2Z">
                    </path>
                </svg>
                Your repositories
            </li>
            <li>
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16"
                    data-view-component="true" class="octicon octicon-project">
                    <path
                        d="M1.75 0h12.5C15.216 0 16 .784 16 1.75v12.5A1.75 1.75 0 0 1 14.25 16H1.75A1.75 1.75 0 0 1 0 14.25V1.75C0 .784.784 0 1.75 0ZM1.5 1.75v12.5c0 .138.112.25.25.25h12.5a.25.25 0 0 0 .25-.25V1.75a.25.25 0 0 0-.25-.25H1.75a.25.25 0 0 0-.25.25ZM11.75 3a.75.75 0 0 1 .75.75v7.5a.75.75 0 0 1-1.5 0v-7.5a.75.75 0 0 1 .75-.75Zm-8.25.75a.75.75 0 0 1 1.5 0v5.5a.75.75 0 0 1-1.5 0ZM8 3a.75.75 0 0 1 .75.75v3.5a.75.75 0 0 1-1.5 0v-3.5A.75.75 0 0 1 8 3Z">
                    </path>
                </svg>
                Your projects
            </li>
            <li>
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16"
                    data-view-component="true" class="octicon octicon-organization">
                    <path
                        d="M1.75 16A1.75 1.75 0 0 1 0 14.25V1.75C0 .784.784 0 1.75 0h8.5C11.216 0 12 .784 12 1.75v12.5c0 .085-.006.168-.018.25h2.268a.25.25 0 0 0 .25-.25V8.285a.25.25 0 0 0-.111-.208l-1.055-.703a.749.749 0 1 1 .832-1.248l1.055.703c.487.325.779.871.779 1.456v5.965A1.75 1.75 0 0 1 14.25 16h-3.5a.766.766 0 0 1-.197-.026c-.099.017-.2.026-.303.026h-3a.75.75 0 0 1-.75-.75V14h-1v1.25a.75.75 0 0 1-.75.75Zm-.25-1.75c0 .138.112.25.25.25H4v-1.25a.75.75 0 0 1 .75-.75h2.5a.75.75 0 0 1 .75.75v1.25h2.25a.25.25 0 0 0 .25-.25V1.75a.25.25 0 0 0-.25-.25h-8.5a.25.25 0 0 0-.25.25ZM3.75 6h.5a.75.75 0 0 1 0 1.5h-.5a.75.75 0 0 1 0-1.5ZM3 3.75A.75.75 0 0 1 3.75 3h.5a.75.75 0 0 1 0 1.5h-.5A.75.75 0 0 1 3 3.75Zm4 3A.75.75 0 0 1 7.75 6h.5a.75.75 0 0 1 0 1.5h-.5A.75.75 0 0 1 7 6.75ZM7.75 3h.5a.75.75 0 0 1 0 1.5h-.5a.75.75 0 0 1 0-1.5ZM3 9.75A.75.75 0 0 1 3.75 9h.5a.75.75 0 0 1 0 1.5h-.5A.75.75 0 0 1 3 9.75ZM7.75 9h.5a.75.75 0 0 1 0 1.5h-.5a.75.75 0 0 1 0-1.5Z">
                    </path>
                </svg>
                Your organizations
            </li>
            <li>
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16"
                    data-view-component="true" class="octicon octicon-globe">
                    <path
                        d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM5.78 8.75a9.64 9.64 0 0 0 1.363 4.177c.255.426.542.832.857 1.215.245-.296.551-.705.857-1.215A9.64 9.64 0 0 0 10.22 8.75Zm4.44-1.5a9.64 9.64 0 0 0-1.363-4.177c-.307-.51-.612-.919-.857-1.215a9.927 9.927 0 0 0-.857 1.215A9.64 9.64 0 0 0 5.78 7.25Zm-5.944 1.5H1.543a6.507 6.507 0 0 0 4.666 5.5c-.123-.181-.24-.365-.352-.552-.715-1.192-1.437-2.874-1.581-4.948Zm-2.733-1.5h2.733c.144-2.074.866-3.756 1.58-4.948.12-.197.237-.381.353-.552a6.507 6.507 0 0 0-4.666 5.5Zm10.181 1.5c-.144 2.074-.866 3.756-1.58 4.948-.12.197-.237.381-.353.552a6.507 6.507 0 0 0 4.666-5.5Zm2.733-1.5a6.507 6.507 0 0 0-4.666-5.5c.123.181.24.365.353.552.714 1.192 1.436 2.874 1.58 4.948Z">
                    </path>
                </svg>
                Your Enterprises
            </li>
            <li>
                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16"
                    data-view-component="true" class="octicon octicon-star">
                    <path
                        d="M8 .25a.75.75 0 0 1 .673.418l1.882 3.815 4.21.612a.75.75 0 0 1 .416 1.279l-3.046 2.97.719 4.192a.751.751 0 0 1-1.088.791L8 12.347l-3.766 1.98a.75.75 0 0 1-1.088-.79l.72-4.194L.818 6.374a.75.75 0 0 1 .416-1.28l4.21-.611L7.327.668A.75.75 0 0 1 8 .25Zm0 2.445L6.615 5.5a.75.75 0 0 1-.564.41l-3.097.45 2.24 2.184a.75.75 0 0 1 .216.664l-.528 3.084 2.769-1.456a.75.75 0 0 1 .698 0l2.77 1.456-.53-3.084a.75.75 0 0 1 .216-.664l2.24-2.183-3.096-.45a.75.75 0 0 1-.564-.41L8 2.694Z">
                    </path>
                </svg>
                Your Stars
            </li>
        </ul>
    </div>
    <script>
        const button = document.getElementById('avatar-navbar');
        const closeButton = document.querySelector('.close-button');
        const navigationMenu = document.querySelector('.navigation__menu');

        button.addEventListener('click', () => {
            navigationMenu.classList.remove('none');
            navigationMenu.classList.remove('hide');
        });

        closeButton.addEventListener('click', () => {
            navigationMenu.classList.add('hide');
        });
    </script>
</body>

</html>
