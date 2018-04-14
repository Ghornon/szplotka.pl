<!DOCTYPE html>
<html lang="pl">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <meta name="keywords" content="szplotka, pl, gabinet, logopeda, pedagog, psycholog, neurologopeda, zdrowie">
    <meta name="description" content="Szplotka.pl - gabinet logopedyczno-pedagogiczny">

    <meta property="og:image" content="images/ogimage.jpg" />

    <!-- Text/css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Hind|Kalam|Lato:900" rel="stylesheet">

    <link href="css/style.css<?php echo "?" . time(); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    
    <!-- Title -->
    <title>Szplotka.pl</title>

</head>

<body class="">

    <!------------------------------------------------------------------
    ╔═══╦╗───────────────╔╗───────╔╗───────────────────────────────╔╗───
    ║╔═╗║║───────────────║║─────╔╦╝╚╗──────────────────────────────║║───
    ║╚═╝║║╔══╦══╦══╦══╗╔═╝╠══╦═╗║╠╗╔╝╔══╦══╦══╦╗─╔╗╔╗╔╦╗─╔╗╔══╦══╦═╝╠══╗
    ║╔══╣║║║═╣╔╗║══╣║═╣║╔╗║╔╗║╔╗╬╝║║─║╔═╣╔╗║╔╗║║─║║║╚╝║║─║║║╔═╣╔╗║╔╗║║═╣
    ║║──║╚╣║═╣╔╗╠══║║═╣║╚╝║╚╝║║║║─║╚╗║╚═╣╚╝║╚╝║╚═╝║║║║║╚═╝║║╚═╣╚╝║╚╝║║═╣
    ╚╝──╚═╩══╩╝╚╩══╩══╝╚══╩══╩╝╚╝─╚═╝╚══╩══╣╔═╩═╗╔╝╚╩╩╩═╗╔╝╚══╩══╩══╩══╝
    ───────────────────────────────────────║║─╔═╝║────╔═╝║──────────────
    ───────────────────────────────────────╚╝─╚══╝────╚══╝──────────────
    
    *    Proudly supported by:
    *		unsplash.com
    *       getbootstrap.com
    *		google.com/fonts
    *       daneden.github.io/animate.css/
    *       fontawesome.io
    
    ------------------------------------------------------------------->
    
    <!-- Section Preloader -->

    <div id="preloader">
        
        <div class="loader"></div>
        
    </div>
    
    <!-- Menu button -->
    
    <input type="checkbox" name="btn-menu" id="btn-menu">
    
    <!-- Section Intro -->
    
    <section id="intro">
        
        <!-- Intro topbar -->

        <header class="topbar container">

            <div class="row">

                <div class="logo col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">

<!--                    <img src="images/logo.png" alt="logo">-->

                </div>

                <div class="menu col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">

                    <label for="btn-menu"><h4>Menu</h4> <span class="hamburger"></span></label>

                </div>

            </div>

        </header>

        <!-- Main content -->

        <div class="intro">

<!--            <h1 class="display-1">Szplotka.pl</h1>-->
            <img src="images/logo.png" alt="logo">
            <h2>Prywatny gabinet wspierania rozwoju dzieci, młodzieży oraz osób dorosłych</h2>

        </div>

        <!-- Address -->

        <address class="map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2585.430769626756!2d19.96647921589217!3d49.608483055551886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47160a812dafbe35%3A0x22cbbb8071e35c9f!2sPoniatowskiego+6%2C+34-700+Rabka-Zdr%C3%B3j!5e0!3m2!1spl!2spl!4v1522152650398"></iframe>

        </address>

    </section>
    
    <!-- Section nav -->
    
    <?php require_once('./templates/nav.php'); ?>
    
    <!-- Section topbar -->
    
    <section id="topbar">
        
        <div class="container-fluid">
            
            <div class="row">
                
                <!-- Logo image -->
                
                <div class="logo col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">

                    <a href="./"><img src="images/logo.png" alt="logo"></a>

                </div>
                
                <!-- Logo text -->
                
<!--
                <header class="header col-xl-4 col-lg-4 col-md-4 d-none d-sm-none d-md-block text-center">

                    <h2>Szplotka.pl</h2>

                </header>
-->
                
                <!-- Nav button -->
                
                <div class="menu col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 text-right">

                    <label for="btn-menu"><h5>Menu</h5> <span class="hamburger"></span></label>

                </div>

            </div>
            
        </div>
        
    </section>
    
    <!-- Section banner -->
    
    <section id="banner">
        
        <div class="container">
            
            <div class="row">
                
                <!-- Offer list -->
                
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                
                    <ul class="offer">
                        <li><a href="#pedagog" class="scrollTo">Pedagog <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#psycholog" class="scrollTo">Psycholog <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#logopeda-neurologopeda" class="scrollTo">Logopeda / Neurologopeda <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#wczesne-wspomaganie-rozwoju" class="scrollTo">Wczesne wspomaganie rozwoju <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#profilaktyka-zdrowego-odzywiania" class="scrollTo">Profilaktyka zdrowego odżywiania <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#oferta-zespolu" class="scrollTo">Oferta zespołu <i class="fa fa-angle-right"></i></a></li>
                    </ul>

                </div>
                
                <!-- Banner -->
                
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 wrapper">

                    <div class="row">
                        
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            
                            <div class="banner nth-0">
                                
                                <img src="images/banner_1.jpg" alt="banner">
                                <h3 class="rotate">Psycholog</h3>
                                
                            </div>
                            
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            
                            <div class="row">
                                
                                <div class="col-12">
                                    
                                    <div class="banner nth-1">
                                        
                                        <img src="images/banner_2.jpg" alt="banner">
                                        <h3>Logopeda</h3>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                
                                <div class="col-12">
                                    
                                    <div class="banner nth-1">
                                       
                                        <img src="images/banner_3.jpg" alt="banner">
                                        <h3>Pedagog</h3>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>

                </div>
                
                <!-- End -->
                
            </div>
            
        </div>
        
    </section>
    
    <!-- Main -->
    
    <main id="main">
        
        <?php require_once('./templates/main.php'); ?>
        
    </main>
    
    <!-- Section contact -->
    
    <section id="contact">
        
        <div class="container">
            
            <div class="row">
               
                <!-- Form -->
               
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    
                    <form action="mail.php" class="contact-form" id="contact-form" method="post">
                        
                        <input type="text" name="name" id="name" placeholder="Imię i nazwisko">
                        <input type="email" name="email" id="email" placeholder="E-mail">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Wiadomość"></textarea>
                        <button id="send" class="button">Wyślij</button>
                        
                    </form>
                    
                </div>
                
                <!-- Address map -->
                
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    
                    <address class="map">
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2585.430769626756!2d19.96647921589217!3d49.608483055551886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47160a812dafbe35%3A0x22cbbb8071e35c9f!2sPoniatowskiego+6%2C+34-700+Rabka-Zdr%C3%B3j!5e0!3m2!1spl!2spl!4v1522152650398"></iframe>
                        
                    </address>
                    
                </div>
                
                <!-- End -->
                
            </div>
            
        </div>
        
        
    </section>
    
    <!-- Footer -->

    <footer id="footer">

        <p>Szplotka.pl by <a href="http://buttonstudio.net/">ButtonStudio.net</a> 2018 &copy; All rights reserved!</p>

    </footer>
    
    <!-- Footer -->
    
    <div id="modal">
        
        <header class="header">
            
            Status wiadomości
            
        </header>
        
        <div class="body">
            
            Lorem ipsum dolor sit amet.
            
        </div>
        
    </div>
    
    <!-- Scripts -->
    
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="js/main.js"></script>
    <script src="js/Button.js"></script>
    <script src="js/Mail.js"></script>
    <script src="js/sticky.js"></script>
    <script src="js/scrollTo.js"></script>

</body>

</html>