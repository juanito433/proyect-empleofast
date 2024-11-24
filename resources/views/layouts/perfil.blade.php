<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Layout Holy Grail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/layout_perfile.css')}}">
</head>

<body>
    <div class="layout">
        <x-nav />
        <aside></aside>
        <main class="rounded-lg shadow-md" style="margin-top: 70px; margin-bottom: 20px">
            <!-- Cover Photo -->
            <div class="relative">
                <div class="bg-red-500 h-44 rounded-lg">
                </div>
            </div>
            <!-- Profile Info -->
            <div class=" mx-auto bg-white" style="padding: 10px">
                <div class="flex items-center">
                    <div class="relative">
                        <img alt="Profile picture" class="rounded-full border-4 border-white"
                            src="{{ asset('images/burgerking.png') }}" width="250px" style="object-fit: cover; height: 250px;" />
                        <button class="absolute bottom-0 right-0 bg-gray-200 text-black p-2 rounded-full">
                            <i class="fas fa-camera">
                            </i>
                        </button>
                    </div>
                    <div class="ml-4"
                        style="
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    flex-direction: column;
                    align-items: center;">
                        <h1 class="text-3xl
                        font-bold">
                            Burger king
                        </h1>
                        <p class="text-gray-600">
                            Industria Alimentaria
                        </p>
                        <div class="flex mt-2">
                            Avenida Principal, 10 de Abril 300 Esq, Brisas del Golfo, 96536 Coatzacoalcos, Ver.
                        </div>
                    </div>
                </div>
                <div class="mt-4 space-x-2">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded" style="margin: 5px">
                        <i class="fas fa-plus">
                        </i>
                        Agregar Empleo
                    </button>
                    <button class="bg-gray-200 text-black px-4 py-2 rounded" style="margin: 5px">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Editar perfil
                    </button>
                </div>
                <br>
                <div>
                    <h2 class="text-2xl
                    font-bold mx-4">
                        Descripción
                    </h2>
                    <p class="text-gray-600 mx-4">
                        Burger King Corporation, también conocida como BK, es una cadena de restaurantes de comida
                        rápida
                        estadounidense especializada en la elaboración de hamburguesas con sede central en Miami,
                        Florida, y
                        subsidiaria de Restaurant Brands International, un holding canadiense con sede en Toronto al
                        que
                        también pertenece </p>
                </div>

                <br>
                <h2 class="text-2xl font-bold mx-4">Redes Sociales</h3>
                    <div class="container">

                        <button class="margen">
                            <div class="flex items-center bg-white p-2 rounded-full shadow-2xl" style="width: 250px;">
                                <img alt="insta" class="rounded-full"
                                    src="{{ asset('images/07f0d7b69ef071571e4ada2f4d6a053a-icono-de-instagram-colorido.webp') }}"
                                    width="70px" />
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
                        <button class="margen">
                            <div class="flex items-center bg-white p-2 rounded-full shadow-2xl" style="width: 250px;">
                                <img alt="facebook" class=" rounded-full"
                                    src="{{ asset('images/facebook-logo-facebook-icon-transparent-free-png.webp') }}"
                                    width="70px" />
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
                        <button class="margen">
                            <div class="flex items-center bg-white p-2 rounded-full shadow-2xl" style="width: 250px;">
                                <img alt="x" class="rounded-full"
                                    src="{{ asset('images/8e72f7331b652b842b0c271ab144d332.png') }}" width="70px" />
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
            </div>
        </main>
        <aside>

        </aside>

        <footer>
            &copy; Derechos reservados
        </footer>
    </div>

</body>

</html>