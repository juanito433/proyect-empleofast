@vite(['resources/css/layout_perfile.css'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Layout Holy Grail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />


</head>

<body>
    <div class="grid">


        <x-nav />

        <aside>

        </aside>
        <main>
            <!-- Cover Photo -->
            <div class="relative">
                <div class="bg-red-500 h-64">
                </div>
                <button class="absolute bottom-4 right-4 bg-white text-black px-4 py-2 rounded shadow">
                    <i class="fas fa-camera">
                    </i>
                    Agregar foto de portada
                </button>
            </div>
            <!-- Profile Info -->
            <div class="container mx-auto px-4 py-4">
                <div class="flex items-center">
                    <div class="relative">
                        <img alt="Profile picture" class="rounded-full w-36 h-36 border-4 border-white" height="150"
                            src="{{ asset('images/burgerking.png') }}" width="150" style="object-fit: cover" />
                        <button class="absolute bottom-0 right-0 bg-gray-200 text-black p-2 rounded-full">
                            <i class="fas fa-camera">
                            </i>
                        </button>
                    </div>
                    <div class="ml-4">
                        <h1 class="text-2xl font-bold">
                            Burgerking
                        </h1>
                        <p class="text-gray-600">
                            Industria Alimentaria
                        </p>
                        <div class="flex mt-2">
                            Avenida Principal, 10 de Abril 300 Esq, Brisas del Golfo, 96536 Coatzacoalcos, Ver.
                        </div>
                    </div>
                </div>
                <div class="mt-4 flex space-x-2">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">
                        <i class="fas fa-plus">
                        </i>
                        Agregar a historia
                    </button>
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Editar perfil
                    </button>
                    <button class="bg-gray-200 text-black px-4 py-2 rounded">
                        <i class="fas fa-ellipsis-h">
                        </i>
                    </button>
                </div>
            </div>


        </main>
        <aside>

        </aside>

        <footer>
            l lw
        </footer>
    </div>

</body>

</html>
