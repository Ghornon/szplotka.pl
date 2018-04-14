<?php 

if ( isset( $_GET['page'] ) )
    $page = $_GET['page'];
else 
    $page = 'index';
    
switch ( $page ) {

    case 'about':

        ?>

        <nav id="nav">

            <!-- Nav buttons -->

            <header class="header">

                <ul>
                    <li>Menu</li>
                    <li><label for="btn-menu">Zamknij <i class="fa fa-times"></i></label></li>
                </ul>

            </header>

            <!-- Menu -->

            <ul class="menu">
                <li><a href="./">Strona główna</a></li>
                <li class="active">
                    <a href="./">O nas</a>
                    <ul class="sub-menu">
                        <li><a href="Agnieszka-Burek-Blacha">Agnieszka Burek-Blacha</a></li>
                        <li><a href="Ewelina-Janczy">Ewelina Janczy</a></li>
                        <li><a href="Urszula-Baran">Urszula Baran</a></li>
                    </ul>
                </li>
                <li><a href="./">Harmonogram</a></li>
                <li><a href="./">Nasza oferta</a></li>
                <li><a href="#contact" class="scrollTo">Kontakt</a></li>
            </ul>

        </nav>

        <?php

        break;

    default:

        ?>

        <nav id="nav">

            <!-- Nav buttons -->

            <header class="header">

                <ul>
                    <li>Menu</li>
                    <li><label for="btn-menu">Zamknij <i class="fa fa-times"></i></label></li>
                </ul>

            </header>

            <!-- Menu -->

            <ul class="menu">
                <li class="active"><a href="#intro" class="scrollTo">Strona główna</a></li>
                <li>
                    <a href="#about" class="scrollTo">O nas</a>
                    <ul class="sub-menu">
                        <li><a href="Agnieszka-Burek-Blacha">Agnieszka Burek-Blacha</a></li>
                        <li><a href="Ewelina-Janczy">Ewelina Janczy</a></li>
                        <li><a href="Urszula-Baran">Urszula Baran</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#schedule" class="scrollTo">Harmonogram</a>
                    <ul class="sub-menu">
                        <li><a href="#work-schedule" class="scrollTo">Godziny pracy</a></li>
                        <li><a href="#tarrif-schedule" class="scrollTo">Cennik</a></li>
                    </ul>
                </li>
                <li><a href="#offer" class="scrollTo">Nasza oferta</a></li>
                <li><a href="#contact" class="scrollTo">Kontakt</a></li>
            </ul>

        </nav>

        <?php

}

?>