<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

=======================================================================================================================================================
# Autores
Rene Ballinas Torres
Luis Javier Castro Gomez
Juan Carlos Lopez Surian
Valeria Vazquez Mazariego

# About Empleo Fast

Empleo Fast es una aplicación web en proceso de desarrollo, diseñada con el objetivo de brindar una herramienta de búsqueda de trabajo para las personas de la región sierra de Teapa, Tabasco en donde tanto como negocios/empresas y personas/candidatos puedan tanto subir ofertas de trabajo y postularse respectivamente.


## Application development structure

# Página principal
Debe presentar información sobre las aplicación, incluyendo opciones para el registro e inicio de sesión tanto para candidatos como para empresas. Además, se deben incluir secciones dedicadas a proporcionar información sobre los desarrolladores de la aplicación.

# Interfaz Principal Sin iniciar Sesión de Candidatos
Debe presentar información sobre las oportunidades laborales disponibles, incluyendo opciones para el registro e inicio de sesión tanto para candidatos como para empresas. Además, se debe proporcionar acceso a un chatbot  de asistencia y a herramientas de filtrado de trabajos para facilitar la búsqueda de oportunidades.

#Interfaz Principal Con inicio de Sesión de Candidatos
El usuario deberá loguearse con sus datos para iniciar sesión. Una vez autentificado, podrá acceder a información sobre las oportunidades laborales disponibles y realizar búsquedas de dichas oportunidades. Además, contará con acceso a un chatbot de asistencia y a su perfil de usuario. La aplicación también permitirá a los usuarios enviar postulaciones a las oportunidades laborales disponibles y acceder a una barra de herramientas para facilitar su experiencia.

# Interfaz del Perfil del Candidato
El perfil de usuario deberá incluir secciones de nombre, foto de perfil, descripción, habilidades, redes sociales, ubicación y datos de contacto, entre otros. Además, el usuario tendrá la opción de editar su perfil y podrá subir su curriculo para postularse a las oportunidades laborales disponibles. También contará con acceso a una barra de herramientas que facilitará su navegación y experiencia en la plataforma.

# Interfaz del Perfil de la Empresa
El perfil de la empresa deberá incluir secciones para el nombre, foto de perfil, descripción, habilidades, redes sociales, ubicación y datos de contacto, entre otros. Además, el usuario tendrá la opción de editar su perfil, así como agregar y modificar ofertas laborales, y recibir las postulaciones correspondientes. También contará  con acceso a una barra de herramientas que facilitará la navegación y experiencia en la plataforma.

## Instalaciones
Se necesta el archivo Vendor, para ello ejecuta en la terminal 
```
#Bash
composer install
```
Despues se necesita crear le archo ```python .env```, para ello se necesita crear en la carpata raíz y copiar el contenido de
```
#Bash
.env.example
```
Luego se necesitara crear la APP_KEY, para ello ejecuta en la terminal
```
#Bash
php artisan key:generate
```
En caso de que comando
```
#Bash
npm run dev
```
Te mande : "vite" no se reconoce como un comando interno o externo,
programa o archivo por lotes ejecutable. Ejecuta el comando
```
#Bash
npm install
```
y
```
#Bash
npm run dev```

## Usage
```python
# Ejecutar aplicación
npm run dev
```
