<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | 1 | Execoore | Technology And Business Template</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/glide.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/content-box.css">
    <link rel="stylesheet" href="css/contact-form.css">
    <link rel="stylesheet" href="css/media-box.css">
    <link rel="stylesheet" href="css/skin.css">
    <link rel="icon" href="media/favicon.png">
</head>
<body>
    <div id="preloader"></div>
    <nav class="menu-top-logo menu-fixed" data-menu-anima="fade-in">
        <div class="container">
            <div class="menu-brand">
                <a href="#">
                    <img class="logo-default scroll-hide" src="media/Transparent_White.png" alt="logo" />
                    <img class="logo-retina scroll-hide" src="media/Transparent_White.png" alt="logo" />
                    <img class="logo-default scroll-show" src="media/Transparent_White.png" alt="logo" />
                    <img class="logo-retina scroll-show" src="media/Transparent_White.png" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul id="main-menu">
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Acerca de</a>
                    </li>
                    <li>
                        <a href="#">Preguntas Frecuentes</a>
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                </ul>
                <div class="menu-right">
                    <ul class="lan-menu">
                        <li>
                            <a href="#"><img src="media/en.png" alt="lang" />EN </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <i class="scroll-top-btn scroll-top show"></i>
    <footer class="light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Execoore</h3>
                    <p>Full suite enable teams to develop unique search and discovery experiences.</p>
                    <div class="icon-links icon-social icon-links-grid social-colors">
                        <a class="facebook"><i class="icon-facebook"></i></a>
                        <a class="twitter"><i class="icon-twitter"></i></a>
                        <a class="instagram"><i class="icon-instagram"></i></a>
                        <a class="pinterest"><i class="icon-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3>Resources</h3>
                    <ul class="icon-list icon-line">
                        <li><a href="#">Partners and advertising</a></li>
                        <li><a href="#">About us and the company</a></li>
                        <li><a href="#">Services and projects</a></li>
                        <li><a href="#">Contact us online</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="text-list text-list-line">
                        <li><b>Address</b><hr /><p>139 Baker St, E1 7PT, London</p></li>
                        <li><b>Email</b><hr /><p>contacts@example.com</p></li>
                        <li><b>Phone</b><hr /><p>(02) 123 333 444</p></li>
                        <li><b>Opening hours</b><hr /><p>8am-5pm Mon - Fri</p></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <span>© 2019 Execoore - Technology And Business Template Handmade by <a href="https://schiocco.com" target="_blank">schiocco.com</a>.</span>
                <span><a href="#">Contact us</a> | <a href="#">Privacy policy</a></span>
            </div>
        </div>
        <link rel="stylesheet" href="media/icons/iconsmind/line-icons.min.css">
        <script src="scripts/jquery.min.js"></script>
        <script src="scripts/main.js"></script>
        <script src="scripts/parallax.min.js"></script>
        <script src="scripts/glide.min.js"></script>
        <script src="scripts/magnific-popup.min.js"></script>
        <script src="scripts/tab-accordion.js"></script>
        <script src="scripts/imagesloaded.min.js"></script>
        <script src="scripts/progress.js" async></script>
        <script src="scripts/custom.js" async></script>
        <script src="scripts/contact-form/contact-form.js" async></script>
    </footer>
</body>
</html>