<?php 

if ( isset( $_GET['page'] ) )
    $page = $_GET['page'];
else 
    $page = 'index';
    
switch ( $page ) {

    case 'about':
        
        if (isset($_GET['about'])) {
            $about = $_GET['about'];
            
            switch ($about) {
                case 1:
                    require_once('Agnieszka-Burek-Blacha.php');
                    break;
                    
                case 2:
                    
                    require_once('Ewelina-Janczy.php');
                    break;
                    
                case 3:
                    
                    require_once('Urszula-Baran.php');
                    break;
                        
                default:
                    
                    echo "Brak danych";
                    
            }
            
        }

        break;

    default:

        ?>

        <!-- Section about -->
        
        <section id="about">
           
            <div class="bar"></div>
            
            <div class="container">
                
                <div class="row">
                   
                   <!-- 1st -->
                    
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        
                        <div class="about">
                           
                            <header class="header">
                                
                                <img src="images/about_1.jpg" alt="photo">
                                
                            </header>
                            
                            <div class="content">
                                
                                <h4>Mgr</h4>
                                <h1>Agnieszka Burek-Blacha</h1>
                                
                                <p>Psycholog z wykształceniem pedagogicznym, Terapeuta metody SI (integracji sensorycznej), Specjalista ds. odżywiania i suplementacji.</p>
                                
                            </div>
                            
                            <ul class="nav">
                                <li><a href="#contact" class="scrollTo messageTo" data-msg="Agnieszka Burek-Blacha"><i class="fa fa-commenting nth-1"></i></a>
                                </li>
<!--                                <li><a href="#" class="heart"><i class="fa fa-heart"></i></a></li>-->
                            </ul>
                            
                            <div class="button">
                                
                                <a href="Agnieszka-Burek-Blacha">Biografia</a>
                                
                            </div>
                            
                        </div>
                        
                        <div class="bars"></div>
                        
                    </div>
                    
                    <!-- 2nd -->
                    
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        
                        <div class="about">
                            
                            <header class="header">
                                
                                <img src="images/about_2.jpg" alt="photo">
                                
                            </header>
                            
                            <div class="content">
                                
                                <h4>Mgr</h4>
                                <h1>Ewelina Janczy</h1>
                                
                                <p>Pedagog, Pedagog specjalny – Oligofrenopedagogik, Terapeuta pedagogiczny</p>
                                
                            </div>
                            
                            <ul class="nav">
                                <li><a href="#contact" class="scrollTo messageTo" data-msg="Ewelina Janczy"><i class="fa fa-commenting nth-2"></i></a></li>
<!--                                <li><a href="#" class="heart"><i class="fa fa-heart"></i></a></li>-->
                            </ul>
                            
                            <div class="button">
                                
                                <a href="Ewelina-Janczy">Biografia</a>
                                
                            </div>
                            
                        </div>
                        
                        <div class="bars"></div>
                        
                    </div>
                    
                    <!-- 3rd -->
                    
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        
                        <div class="about">
                            
                            <header class="header">
                                
                                <img src="images/about_3.jpg" alt="photo">
                                
                            </header>
                            
                            <div class="content">
                                
                                <h4>Mgr</h4>
                                <h1>Urszula Baran</h1>
                                
                                <p>Psycholog, Neurologopeda, Terapeuta ręki. </p>
                                
                            </div>
                            
                            <ul class="nav">
                                <li><a href="#contact" class="scrollTo messageTo" data-msg="Urszula Baran"><i class="fa fa-commenting nth-3"></i></a></li>
<!--                                <li><a href="#" class="heart"><i class="fa fa-heart"></i></a></li>-->
                            </ul>
                            
                            <div class="button">
                                
                                <a href="Urszula-Baran">Biografia</a>
                                
                            </div>
                            
                        </div>
                        
                        <div class="bars"></div>
                        
                    </div>
                    
                    <!-- End -->
                    
                </div>
                
            </div>
            
        </section> 
        
        <!-- Section schedule -->
        
        <section id="schedule">

            <div class="container-fluid">
                
                <div id="work-schedule" class="row">
                    
                    <!-- 1st -->
                    
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12"> 
                        
                        <div class="schedule nth-1 hideme">

                            <header class="header">

                                <h3>Psycholog</h3>
                                <h4>Godziny pracy</h4>

                            </header>

                            <div class="body">

                                <table class="table table-hover">

                                    <thead>

                                        <tr>
                                            <th scope="col">Dzień</th>
                                            <th scope="col">Godzina</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <th scope="row">Poniedziałek</th>
                                            <td>9:00 - 12:00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Wtorek</th>
                                            <td>9:00 - 12:00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Środa</th>
                                            <td>9:00 - 12:00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Czwartek</th>
                                            <td>telefonicznie</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Piątek</th>
                                            <td>15:30 - 19:00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Sobota</th>
                                            <td>telefonicznie</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-center">Umów się na <a href="https://www.znanylekarz.pl/agnieszka-burek-blacha/psycholog-terapeuta/rabka-zdroj">znanylekarz.pl</a></td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>
                        
                    </div>
                    
                    <!-- 2nd -->
                    
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                        
                        <div class="schedule nth-2 hideme">

                            <header class="header">

                                <h3>Pedagog</h3>
                                <h4>Godziny pracy</h4>

                            </header>

                            <div class="body">

                                <table class="table table-hover">

                                    <thead>

                                        <tr>
                                            <th scope="col">Dzień</th>
                                            <th scope="col">Godzina</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <th scope="row">Poniedziałek</th>
                                            <td>telefonicznie</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Wtorek</th>
                                            <td>16:00 - 19:30</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Środa</th>
                                            <td>telefonicznie</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Czwartek</th>
                                            <td>telefonicznie</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Piątek</th>
                                            <td>8:00 - 11:00</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Sobota</th>
                                            <td>telefonicznie</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>
                        
                    </div>
                    
                    <!-- 3rd -->
                    
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                        <div class="schedule nth-3 hideme">

                            <header class="header">

                                <h3>Logopeda</h3>
                                <h4>Godziny pracy</h4>

                            </header>

                            <div class="body">

                                <table class="table table-hover">

                                    <thead>

                                        <tr>
                                            <th scope="col">Dzień</th>
                                            <th scope="col">Godzina</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <th scope="row">Poniedziałek</th>
                                            <td>15:30 - 19:30</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Wtorek</th>
                                            <td class="pop">15:30 - 19:30* <span class="popover">(po wcześniejszym uzgodnieniu)</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Środa</th>
                                            <td>15:30 - 19:30</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Czwartek</th>
                                            <td>15:30 - 19:30</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Piątek</th>
                                            <td>telefonicznie</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Sobota</th>
                                            <td>telefonicznie</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- End -->
                    
                </div>

                <div id="tarrif-schedule" class="row">

                    <!-- 1st -->

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="schedule nth-4 hideme">

                            <header class="header">

                                <h3>Psycholog</h3>
                                <h4>Cennik</h4>

                            </header>

                            <div class="body">

                                <table class="table table-hover">

                                    <thead>

                                        <tr>
                                            <th scope="col">Usługa</th>
                                            <th scope="col">Koszt</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <th scope="row">Konsultacja psychologiczna</th>
                                            <td>50 zł / 45 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pomoc psychologiczna</th>
                                            <td>50 zł / 60 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pomoc psychologiczna</th>
                                            <td>70 zł / 90 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Wsparcie psychologiczne</th>
                                            <td>50 zł / 45 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Poradnictwo psychologiczne</th>
                                            <td>60 zł / 60 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pisemna opinia</th>
                                            <td>60 zł</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                    <!-- 2nd -->

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="schedule nth-5 hideme">

                            <header class="header">

                                <h3>Pedagog</h3>
                                <h4>Cennik</h4>

                            </header>

                            <div class="body">

                                <table class="table table-hover">

                                    <thead>

                                        <tr>
                                            <th scope="col">Usługa</th>
                                            <th scope="col">Koszt</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <th scope="row">Diagnoza pedagogiczna</th>
                                            <td>70 zł / 60 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Diagnoza pedagogiczna</th>
                                            <td>90 zł / 90 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Konsultacja pedagogiczna</th>
                                            <td>50 zł / 45 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Terapia pedagogiczna</th>
                                            <td>50 zł / 45 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Terapia pedagogiczna</th>
                                            <td>60 zł / 60 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Zajęcia wyrównawcze</th>
                                            <td>50 zł / 60 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Odrabianie lekcji</th>
                                            <td>50 zł / 60 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pisemna opinia</th>
                                            <td>60 zł</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                    <!-- 3rd -->

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">

                        <div class="schedule nth-6 hideme">

                            <header class="header">

                                <h3>Logopeda</h3>
                                <h4>Cennik</h4>

                            </header>

                            <div class="body">

                                <table class="table table-hover">

                                    <thead>

                                        <tr>
                                            <th scope="col">Usługa</th>
                                            <th scope="col">Koszt</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <th scope="row">Diagnoza logopedyczna</th>
                                            <td>70 zł / 60 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Konsultacja logopedyczna</th>
                                            <td>50 zł / 45 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Terapia logopedyczna (dzieci i dorośli)</th>
                                            <td>50 zł / 45 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Wczesna interwencja logopedyczna</th>
                                            <td>30 zł / 30 min.</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pisemna opinia</th>
                                            <td>60 zł</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                    <!-- 4th -->

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 offset-xl-4">

                        <div class="schedule nth-7 hideme">

                            <header class="header">

                                <h3>Zespół</h3>
                                <h4>Cennik</h4>

                            </header>

                            <div class="body">

                                <table class="table table-hover">

                                    <thead>

                                        <tr>
                                            <th scope="col">Usługa</th>
                                            <th scope="col">Koszt</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <th scope="row">Wizyt domowe w Nowym Targu</th>
                                            <td>ustalane indywidualnie</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pakiety dla stałych Klientów </th>
                                            <td>10 % (przy 10 wizytach – płatne z góry)</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pisemna opinia</th>
                                            <td>dla stałych klientów gratis</td>
                                        </tr>
                                        
                                        <tr>
                                            <th scope="row">Uwaga</th>
                                            <td>Nie przyjmuje na NFZ, jestśmy gabinetem prywatnym</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                    <!-- End -->

                </div>

            </div>

        </section>
        
        <!-- Section offer -->
        
        <section id="offer">
            
            <!-- Header -->
            
            <div class="container">
                
                <header class="header">
                
                    <h1 class="display-3">Nasza oferta</h1>

                </header>
                
            </div>
            
            <!-- Offer list -->
            
            <div class="container-fluid">
                
                <div class="row">
                   
                    <!-- 1st column -->
                    
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        
                        <!-- #psycholog -->
                        
                        <div class="offer" id="psycholog">
                            
                            <header class="header">
                                
                                <h3>Psycholog</h3>
                                <i class="fa fa-user-md nth-2"></i>
                                
                            </header>
                            
                            <div class="content">
                                
                                <h5>Psycholog</h5>
                                <p>poradnictwo psychologiczne</p>
                                <p>wsparcie psychologiczne</p>
                                <p>pomoc psychologiczna</p>
                                <p>profilaktyka zdrowia psychicznego</p>

                                <h5>Zajmujemy się zagadnieniami</h5>
                                <p>lęków, nerwic, stanów depresyjnych, problemów emocjonalnych, trudności wychowawczych, kryzysów</p>
                                
                            </div>
                            
                        </div>
                        
                        <!-- #profilaktyka-zdrowego-odzywiania -->
                        
                        <div class="offer" id="profilaktyka-zdrowego-odzywiania">
                            
                            <header class="header">
                                
                                <h3>Profilaktyka zdrowego odżywiania</h3>
                                <i class="fa fa-heartbeat nth-5"></i>
                                
                            </header>
                            
                            <div class="content">
                                
                                <h5>Dla dzieci oraz dorosłych</h5>
                                <p>poradnictwo w kwestii prawidłowego stylu żywienia</p>
                                <p>pomoc w ustaleniu prawidłowego jadłospisu z uwzględnieniem konkretnych schorze</p>
                                <p>(choroby układu krwionośnego, cukrzyca, choroby tarczycy)</p>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <!-- 2nd column -->
                    
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        
                        <!-- #pedagog -->
                        
                        <div class="offer" id="pedagog">
                            
                            <header class="header">
                                
                                <h3>Pedagog</h3>
                                <i class="fa fa-graduation-cap nth-1"></i>
                                
                            </header>
                            
                            <div class="content">
                                
                                <h5>Pedagog</h5>
                                <p>rozpoznawanie oraz analizowanie trudności szkolnych</p>
                                <p>terapia pedagogiczna w tym terapia specyficznych trudności w nauce (dysleksja, dysortografia, dysgrafia, dyskalkulia)</p>
                                <p>nauka efektywnych technik uczenia się, mnemotechniki</p>
                                <p>wczesna nauka czytania</p>
                                <p>zajęcia ogólnorozwojowe dla dzieci w wieku przedszkolnym i szkolnym profilaktyka trudności szkolnych</p>
                                
                            </div>
                            
                        </div>
                        
                        <!-- #oferta-zespolu -->
                        
                        <div class="offer" id="oferta-zespolu">
                            
                            <header class="header">
                                
                                <h3>Oferta zespołu</h3>
                                <i class="fa fa-users nth-6"></i>
                                
                            </header>
                            
                            <div class="content">
                                
                                <h5>Dla szkół i innych placówek oraz osób chętnych</h5>
                                <p>szkolenia tematyczne</p>
                                <p>warsztaty</p>
                                <p>grupy wsparcia</p>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <!-- 3rd column -->
                    
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        
                        <!-- #ogopeda-neurologopeda -->
                        
                        <div class="offer" id="logopeda-neurologopeda">
                            
                            <header class="header">
                                
                                <h3>Logopeda<br>&amp;<br>Neurologopeda</h3>
                                <i class="fa fa-comments nth-3"></i>
                                
                            </header>
                            
                            <div class="content">
                                
                                <h5>Logopeda &amp; neurologopeda</h5>
                                
                                <p>diagnostyka przyczyn zaburzeń mowy</p>
                                <p>terapia zaburzeń mowy powstałych z przyczyn neurologicznych</p>
                                <p>terapia zaburzeń mowy z przyczyn rozwojowych</p>
                                <p>przełamywanie barier w komunikacji</p>

                                <p>diagnoza i terapia logopedyczna w przypadku opóźnionego i zaburzonego rozwoju mowy:</p>
                                <p>Seplenienie</p>
                                <p>Zaburzenia arty</p>
                                <p>kulacji</p>
                                <p>Wady wymowy</p>
                                <p>Konsultacje i wydawanie opinii</p>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <!-- 4th column -->
                    
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        
                        <!-- #wczesne-wspomaganie-rozwoju-->
                        
                        <div class="offer">
                            
                            <header class="header" id="wczesne-wspomaganie-rozwoju">
                                
                                <h3>Wczesne wspomaganie rozwoju</h3>
                                <i class="fa fa-line-chart nth-4"></i>
                                
                            </header>
                            
                            <div class="content">
                                
                                <h5>OFERTA DLA DZIECI</h5>
                                
                                <p>stymulowanie rozwoju posychoruchowego oraz komunikacyjnego dziecka z pomocą wybranych metod (m.in. metoda SI, metoda ruchu rozwijającego W. Sherborne, Trening Umiejętności Społecznych)</p>
                                <p>systematyczna ocena postępów dziecka</p>
 
                                <h5>OFERTA DLA RODZICÓW</h5>
                                
                                <p>wsparcie w procesie akceptacji niepełnosprawności/ braku sprawności dziecka</p>
                                <p>pomoc w rozpoznawaniu oraz interpretacji zachowań dziecka</p>
                                <p>instruktaż oraz poradnictwo w związku z dalszym postępowaniem wspomagającym dziecko</p>
                                
                                <p><strong>Zarówno dla dzieci z orzeczeniami z PPP jak i dla dzieci rodziców zaniepokojonych o rozwój swojego dziecka</strong></p>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <!-- End -->
                    
                </div>
                
            </div>
            
        </section>

        <?php

}

?>