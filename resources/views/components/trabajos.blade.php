@vite(['resources/css/trabajos.css'])
<link rel="stylesheet" href="{{ asset('css/trabajos.css') }}">

<div class="container shadow-md">
    @for ($i = 0; $i < 10; $i++)
        <div class="card">
            <div class="img">
                <img src="{{ asset('images/burgerking.png') }}">
            </div>
            <div class="top-text">
                <div class="name">
                    Nombre del trabajo
                </div>
                <p>
                    Empresa
                </p>
            </div>
            <div class="bottom-text">
                <div class="text">
                    SObre que trata el trabajo
                </div>
                <div class="text">
                    Tiempo de trabajo
                </div>
                <div class="text">
                    Habilidades necesarias o requetriadas para el trabajo
                    <ul><li>Saber algo</li>
                    <li>Saber algo</li>
                    <li>Saber algo</li>
                    <li>Saber algo</li></ul>
                </div>
                <div class="btn">
                    <a href="#">Read more</a>
                </div>
            </div>
        </div>
    @endfor

</div>
