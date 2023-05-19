<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style1.css">
    <link rel="stylesheet" href="./assets/css/entete.css" />
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> --}}

    @yield('style')
    <title>@yield('title') </title>
</head>

<body>
    <div id="wrap" class="ifnti_header">
        <header>
            <div class="inner relative">
                <a class="logo" href="{{ route('p1') }}"><img src="./assets/img/ifnti.png" alt="LOGO"></a>
                <a id="menu-toggle" class="button dark" href="#"><i class="fas fa-bars" aria-hidden="true"></i></a>
                <nav id="navigation">
                    <ul id="main-menu">
                        <li class="current-menu-item"><a href="{{ route('p1') }}">Accueil</a></li>
                        <li class="parent">
                            <a href="{{ route('p3') }}" id="have_submenu">IFNTI <i class="fas fa-plus" id="plus"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('p7') }}"> Projet étudiants</a></li>
                                <li><a href="{{ route('p6') }}">Equipe</a></li>
                                <li><a href="{{ route('p8') }}">Diplomés</a></li>
                                <li>
                                    <a class="parent" href="{{ route('p4') }}">MAtiere</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('p5') }}">Matières générales</a></li>
                                        
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="parent">
                            <a href="{{ route('p11') }}" id="have_submenu">Admission<i class="fas fa-plus" id="plus"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('p13') }}">Frais</a></li>
                                <li><a href="{{ route('p2') }}">Formation</a></li>
                                <li><a href="{{ route('p11') }}">Procedure inscription</a></li>
                                <li><a href="{{ route('p12') }}">Concours</a></li>
                               
                            </ul>
                        </li>
                        <li><a href="{{ route('p9') }}">Actualités</a></li>
                        <li><a href="{{ route('p10') }}" class="bouton-head contact-btn">Contact</a></li>
                    </ul>

                </nav>

                <div class="clear"></div>
            </div>
        </header>
    </div>
    <main class="page">
        <div class="main-content">
            @yield('content')
        </div>

        <footer class="ifnti-footer">

            <div class="footer-content">
                <div class="cont-foot">
                    <div class="col-3">
                        <h1 class="logo">IFNTI</h1>
                        <p class="pp">
                            Un cadre calme et boisé, <br>
                            propice aux études
                        </p>
                    </div>
                    <div class="col-3">
                        <h5>Information contact</h5>
                        <p>
                            <i class="fa fa-phone-alt me-3"
                                style="transform: rotateZ(90deg);
                    "></i><a
                                href="tel:+228 90 91 81 41  ">+228 90 91 81 41</a>

                        </p>
                        <p><i class="fas fa-envelope"></i><a href="mailto:info@siteweb.com">info@siteweb.com</a>
                        </p>
                    </div>
                    <div class="col-3">
                        <h5>Partenaire</h5>
                        <a class="btn btn-link" href="">Knowbridge</a>
                        <a class="btn btn-link">ITplex</a>
                        <a class="btn btn-link">La Dcc</a>
                        <a class="btn btn-link">Sara Consulte</a>
                    </div>
                    <div class="col-3">
                        <h5>Accueil</h5>
                        <a class="btn btn-link" href="{{ route('p3') }}">Apropos</a>
                        <a class="btn btn-link" href="{{ route('p11') }}">Admission</a>
                        <a class="btn btn-link" href="{{ route('p9') }}">Actualité</a>
                        <a class="btn btn-link" href="{{ route('p3') }}">Apropos</a>
                        <a class="btn btn-link" href="{{ route('p2') }}">Support</a>
                    </div>
                </div>

                <div class="footer-bottom">
                    <p class="cpr">copyright &copy; 2023 | All Rights Reserved <a href="#">IFNTI (Institut de
                            formation aux normes et technologies de l informatique)</a> </p>
                    <div class="footer-menu">
                        <ul class="f-menu">
                            <li><a href=""><img class="element" src="./assets/img/icons8-facebook-48.png"
                                        alt=""></a></li>
                            <li><a href=""><img class="element" src="./assets/img/icons8-instagram-48.png"
                                        alt=""></a></li>
                            <li><a href="https://www.linkedin.com/school/ifnti/?originalSubdomain=tg"
                                    target="_blank"><img class="element"
                                        src="./assets/img/icons8-linkedin---in-logo-used-for-professional-networking,-24.png"
                                        alt=""></a></li>
                            <li><a href="https://www.youtube.com/@ifntisokode-licenceinforma7120" target="_blank"><img
                                        class="element" src="./assets/img/icons8-lecture-de-youtube.svg"
                                        alt=""></a></li>
                            <li><a href="https://www.tiktok.com/@ifnti_sokode" target="_blank"><img class="element"
                                        src="./assets/img/icons8-tic-tac.svg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <script type="text/javascript" src="./assets/js/jquery.js"></script>
    <script type="text/javascript" src="./assets/js/function.js"></script>
    <script src="{{asset('assets/js/header.js')}}"></script>
    @yield('script')

</body>

</html>
