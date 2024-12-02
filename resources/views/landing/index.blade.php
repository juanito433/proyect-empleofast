<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>EmpleaFast</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- stylesheets css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/et-line-font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylelanding.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- preloader section -->
    <section class="preloader">
        <div class="sk-circle">
            <div class="sk-circle1 sk-child"></div>
            <div class="sk-circle2 sk-child"></div>
            <div class="sk-circle3 sk-child"></div>
            <div class="sk-circle4 sk-child"></div>
            <div class="sk-circle5 sk-child"></div>
            <div class="sk-circle6 sk-child"></div>
            <div class="sk-circle7 sk-child"></div>
            <div class="sk-circle8 sk-child"></div>
            <div class="sk-circle9 sk-child"></div>
            <div class="sk-circle10 sk-child"></div>
            <div class="sk-circle11 sk-child"></div>
            <div class="sk-circle12 sk-child"></div>
        </div>
    </section>

    <!-- home section -->
    <section id="home">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="home-thumb">
                        <h1 class="wow fadeInUp" data-wow-delay="0.4s">Hola, Somos EMPLEAFAST</h1>
                        <h3 class="wow fadeInUp" data-wow-delay="0.6s">Queremos que <strong>te unas con nostros</strong>
                            para que<strong>consigas tu</strong> siguiente trabajo!</h3>
                        <a href="selection/" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs"
                            data-wow-delay="0.8s">Registrate</a>
                        <a href="#" data-toggle="modal" data-target="#modal1"
                            class="btn btn-lg btn-success smoothScroll wow fadeInUp" data-wow-delay="1.0s">Inicia sesión</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- about section -->
    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <img src="{{asset('images/logof.png')}}" class="img-responsive wow fadeInUp" alt="About">
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="about-thumb">
                        <div class="section-title">
                            <h1 class="wow fadeIn" data-wow-delay="0.2s">Nosotros somos</h1>
                            <h3 class="wow fadeInUp" data-wow-delay="0.4s">Estudaintes de Ingeniería informática</h3>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.6s">
                            <h3>Somos estudiantes del TecNM Campus de la Región Sierra</h3>
                            <h3>Este proyecto fue realizado con el fin de mejorar las interacciones entre los empleadores y candidatos 
                                al momento de buscar trabajo.
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- feature section -->
    <section id="feature">
        <div class="container">
            <div class="row">

                <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
                    <path d="M0 0 L50 100 L100 0 Z"></path>
                </svg>

                <div class="col-md-4 col-sm-6">
                    <div class="media wow fadeInUp" data-wow-delay="0.4s">
                        <div class="media-object media-left">
                            <i class="icon icon-laptop"></i>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading">Busca Empleo</h2>
                            <p>Te ayudamos a que encuentres el trabajo de lo que tu prefieras y gustes registrandote como candidato</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="media wow fadeInUp" data-wow-delay="0.8s">
                        <div class="media-object media-left">
                            <i class="icon icon-refresh"></i>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading">Busca empleados</h2>
                            <p>Te apoyamos como empresa para que puedas postular vacantes de empleos y puedas reclutar a los que necesites registrandote como Empresa</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-8">
                    <div class="media wow fadeInUp" data-wow-delay="1.2s">
                        <div class="media-object media-left">
                            <i class="icon icon-chat"></i>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading">Interacción</h2>
                            <p>Buscamos que la interacción de la empresa a candidato sea la más optima posible para que tanto las empresas como los candidatos puedan optener beneficios</p>
                        </div>
                    </div>
                </div>

                <div class="clearfix text-center col-md-12 col-sm-12">
                    <a href="#contact" class="btn btn-default smoothScroll">Registrate</a>
                </div>

            </div>
        </div>
    </section>

    <!-- contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="section-title">
                        <h1 class="wow fadeInUp" data-wow-delay="0.3s">Candidatos</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">Si quieres comenzar a buscar empleo de inmediato puedes registrarte aqui para pasar al siginete nivel</p>
                    </div>
                    <div class="contact-form wow fadeInUp" data-wow-delay="1.0s">
                        <form id="contact-form" method="post" action="#">
                            <div class="col-md-6 col-sm-6">
                                <input name="name" type="text" class="form-control" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input name="email" type="email" class="form-control" placeholder="Your Email"
                                    required>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea name="message" class="form-control" placeholder="Message" rows="6" required></textarea>
                            </div>
                            <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
                                <input name="submit" type="submit" class="form-control submit" id="submit"
                                    value="SEND MESSAGE">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- footer section -->
    <footer>
        <div class="container">
            <div class="row">

                <svg class="svgcolor-light" preserveAspectRatio="none" viewBox="0 0 100 102" height="100"
                    width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0 L50 100 L100 0 Z"></path>
                </svg>

                <div class="col-md-4 col-sm-6">
                    <h2>EMPLEAFAST</h2>
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <p>Esta aplicación web es un poryecto el cual hacemos para que personas que no tienen empleo puedan encontrar uno en donde puedan sentir que encajan</p>
                        <p class="copyright-text">Copyright &copy; 2024 EMPLEAFAST <br>
                            Diseñado por<a rel="nofollow" href="http://www.google.com/+templatemo"
                                target="_parent" > Alumnos del ITSS</a></p>
                    </div>
                </div>

                <div class="col-md-1 col-sm-1"></div>

                <div class="col-md-4 col-sm-5">
                    <h2>Somos</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.6s">
                        Juan Carlos López Surian,<br>
                        Valeria Vazquez Mazariego<br>
                        Luis Javier Castro Gómez <br>
                        Rene Ballinas Torres
                    </p>
                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.9s"></a></li>
                        <li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="1.2s"></a></li>
                        <li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="1.4s"></a></li>
                        <li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="1.6s"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <!-- modal -->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title">Inicia Candidato</h2>
                </div>
                <form action="{{ route('sessioncandidate') }}" method="post">
                    @csrf
                    <input  type="text" name="email" class="form-control" id="email"
                        placeholder="Email">
                    <input type="text"  name="password"class="form-control" id="password"
                        placeholder="Password ">
                    <input  type="submit" class="form-control"  value="Inicia sesión">
                </form>
                <p>GRACIAS POR VISITAR NUETRA APLICACIÓN</p>
            </div>
        </div>
    </div>


    <!-- Back top -->
    <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

    <!-- javscript js -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/vegas.min.js') }}"></script>

    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
