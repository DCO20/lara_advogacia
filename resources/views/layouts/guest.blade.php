<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Lara Advogacia</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website Template" name="keywords">
        <meta content="Law Firm Website Template" name="description">

        <!-- Favicon -->
        <link href="{{ url(asset('assets/img/favicon.ico')) }}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ url(mix('assets/css/animate.min.css')) }}" rel="stylesheet">
        <link href="{{ url(mix('assets/css/owl.carousel.min.css')) }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ url(mix('assets/css/style.css')) }}" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="{{ route('home')}}">
                                    <h1>DCO</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2>8:00 - 17:00</h2>
                                    <p>Horário de funcionamento de segunda a sexta</p>
                                </div>
                                <div class="text">
                                    <h2>+123 456 7890</h2>
                                    <p>Ligue para nós para uma consulta gratuita</p>
                                </div>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="/#home" class="nav-item nav-link active">Home</a></li>
                                <a href="/#about" class="nav-item nav-link">Sobre</a></li>
                                <a href="/#service" class="nav-item nav-link">Serviços</a>
                                <a href="/#team" class="nav-item nav-link">Time</a>
                                <a href="/#blog" class="nav-item nav-link">Blog</a>
                                <a href="/#contact" class="nav-item nav-link">Contato</a>
                                <div class="ml-auto">
                                    @if(Route::has('login'))
                                    @auth
                                        @if(Auth::user()->utype === 'admin')
                                        <div class="dropdown ml-auto" style="text-decoration: none">
                                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Ola: {{Auth::user()->name}}
                                            </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <ul class="submenu curency" style="list-style: none">
                                                        <li class="menu-item" >
                                                            <a href=""><i class="fas fa-home"></i> Painel</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Sair</a>
                                                        </li>
                                                        <form id="logout-form" method="POST" action="{{route('logout')}}" >
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        @else
                                        <div class="dropdown ml-auto">
                                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Ola: {{Auth::user()->name}}
                                            </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <ul class="submenu curency" style="list-style: none">
                                                        <li class="menu-item mt-2" >
                                                            <a href=""><i class="fas fa-home"></i> Painel</a>
                                                        </li>
                                                        <li class="menu-item mt-2">
                                                            <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Sair</a>
                                                        </li>
                                                        <form id="logout-form" method="POST" action="{{route('logout')}}" >
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif
                                </div>
                                @else
                                <div class="ml-auto">
                                    <a class="btn" href="/login">Login</a>
                                </div>
                                @endif
                                @endif
                            </div>
                        </nav>
                    </div>
                </div>
            
            
           {{$slot}}


            <!-- Footer Start -->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                                <h2>Sobre</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Áreas de Prática</h2>
                                <p>Lei Civil</p>
                                <p>Lei Familiar</p>
                                <p>Lei Educacional</p>
                                <p>Direito Trabalhista</p>
                                <p>Direito Empresarial</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Páginas</h2>
                                <a href="">Sobre</a>
                                <a href="">Time</a>
                                <a href="">Blog</a>
                                <a href="">Contato</a>
                                <a href="">Login</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Entrar em contato</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Brasil, Brasil</p>
                                <p><i class="fa fa-phone-alt"></i>+123 456 7890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Termos de uso</a>
                        <a href="">Politica</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>&copy; Todos os direitos reservados. <?= date('Y')?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ url(mix('assets/js/easing.min.js')) }}"></script>
        <script src="{{ url(mix('assets/js/owl.carousel.min.js')) }}"></script>
        <script src="{{ url(mix('assets/js/isotope.pkgd.min.js')) }}"></script>

        <!-- Template Javascript -->
        <script src="{{ url(mix('assets/js/main.js')) }}"></script>
    </body>
</html>
