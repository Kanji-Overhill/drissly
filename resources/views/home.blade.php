<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drissly</title>
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
                        <a href="#inicio">{{ __('messages.index_1') }}</a>
                    </li>
                    <li>
                        <a href="#about_us">{{ __('messages.index_2') }}</a>
                    </li>
                    <li>
                        <a href="#services">{{ __('messages.index_3') }}</a>
                    </li>
                    <li>
                        <a href="#preguntas">{{ __('messages.index_4') }}</a>
                    </li>
                    <li>
                        <a href="#contacto">{{ __('messages.index_5') }}</a>
                    </li>
                </ul>
                <div class="menu-right">
                    <ul class="lan-menu">
                        @if (app()->getLocale() == 'en')
                            <li>
                                <a href="{{ url('locale/es') }}"><img src="media/es.png" alt="lang" />ES </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ url('locale/en') }}"><img src="media/en.png" alt="lang" />EN </a>
                            </li>
                        @endif
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
                    <h3>Drissly</h3>
                    <p>{{ __('messages.index_6') }}</p>
                    
                </div>
                <div class="col-lg-4">
                    <h3>Menu</h3>
                    <ul class="icon-list icon-line">
                        <li><a href="#inicio">{{ __('messages.index_1') }}</a></li>
                        <li><a href="#about_us">{{ __('messages.index_2') }}</a></li>
                        <li><a href="#services">{{ __('messages.index_3') }}</a></li>
                        <li><a href="#preguntas">{{ __('messages.index_4') }}</a></li>
                        <li><a href="#contact">{{ __('messages.index_5') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="text-list text-list-line">
                        <li><b>{{ __('messages.index_8') }}</b><hr /><p>Bosque de Palmitos 17, <br>Colonia Lomas de Bezares, <br>Alcaldia Miguel Hidalgo, C.P. 11,920.</p></li>
                        <li><b>Email</b><hr /><p>arturo@drissly.com</p></li>
                        <li><b>{{ __('messages.index_9') }}</b><hr /><p></p></li>
                        <li><b>Horario</b><hr /><p>9:00 a 18:00 horas Lun - Vie</p></li>
                    </ul>
                </div>
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