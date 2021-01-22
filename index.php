<!DOCTYPE html>
<html lang="en">

<head>
<?php  

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "restoran_baza"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);


$success_message = "";
if(isset($_POST['btn'])){

$ime = filter_input(INPUT_POST, 'ime');
$email = filter_input(INPUT_POST, 'email');
$broj_telefona = filter_input(INPUT_POST, 'broj_telefona');
$broj_osoba = filter_input(INPUT_POST, 'broj_osoba');
$datum = filter_input(INPUT_POST, 'datum');
$vrijeme = filter_input(INPUT_POST, 'vrijeme');
$hrana = filter_input(INPUT_POST, 'hrana');
$broj_stola = filter_input(INPUT_POST, 'broj_stola');


// Check connection
$isValid = false;

if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
    }
    else {
        $sql = "INSERT INTO rezervacija(ime, email,broj_telefona,broj_osoba,datum,vrijeme,hrana,broj_stola) values ('$ime', '$email','$broj_telefona', '$broj_osoba','$datum', '$vrijeme', '$hrana', '$broj_stola')";
        $stmt = $con->prepare($sql);
        $isValid = true;
        $stmt->execute();
        $stmt->close();
       
    }

if($isValid=true){
        $success_message = "Vaš račun je uspješno napravljen!";
        }
}
?>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <title>Aurora</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

   

</head>

<body>
 
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Navigacijska traka</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="images/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav ">
                                    <li class="active"><a href="#banner">HOME</a></li>
                                    <li><a href="rezervacija.php">REZERVACIJA</a></li>
                                    <li><a href="#menu">MENU</a></li>
                                    <li><a href="narudzba.php">NARUDŽBA</a></li>
                                    <li><a href="#footer">KONTAKT</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <?php 
            // Display Success message
            if(!empty($success_message)){
            ?>
              <?= $success_message ?>
            <?php
            }
            ?>
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h2>Rezervirajte stol u našem restoranu </h2>
                            <h2>Pronađite odgovarajuće mjesto </h2>
                            <p>Isprobajte ukusnu hranu</p>
                            <div class="book-btn">
                                <a href="rezervacija.php" class="table-btn hvr-underline-from-center">Rezervirajte stol</a>
                            </div>
                            
                        </div>
                    </div>
              
                </div>
             
            </div>
        
        </div>
  
    </div>
 

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> O nama </h2>
                        <h3>Počelo je prilično jednostavno, kao ovako...</h3>
                        <p> U restoranu Aurora u mogućnosti smo organizirati vaše vjenčanje ili neku drugu svečenu prigodu ili poslovni ručak tako da ostane u nezaboravnom sjećanju. </p>

                        <p>   Kapacitet restorana Aurora je cca 100 osoba. </p>

                        <p> Proslavite sa svojim prijateljima i rodbinom najljepše trenutke u našem restoranu uz prigodnu ponudu.Želimo vam prijateljsku dobrodošlicui i nadamo se da ćete uživati ​​u ponudi i atmosferi koju vam nudi Aurora restoran. Svaki segment pripremljen je koristeći najfinije sastojke na raspolaganju da bi zadovoljio vaše zahtjeve. </p>
                    </div>
                </div>
               
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="images/about-main.jpg" alt="About Main Image">
                            <img class="about-inset" src="images/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
              
            </div>
         
        </div>
    
    </div>

    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						NAŠ MENU
					</h2>
                        
                    </div>
                    <div class="tab-menu">
                        <div class="slider slider-nav">
                            <div class="tab-title-menu">
                                <h2>PREDJELA</h2>
                                <p> <i class="flaticon-canape"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>GLAVNA JELA</h2>
                                <p> <i class="flaticon-dinner"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DESERTI</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                            
                        </div>
                        <div class="slider slider-single">
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/menu-item-thumbnail-01.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>PRŠUT</h3>
                                            <p>
                                                100 g
                                            </p>
                                        </div>
                                        <span class="offer-price">7 KM</span>
                                    </div>
                                </div>
                            
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/menu-item-thumbnail-02.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>OVČJI SIR</h3>
                                            <p>
                                                100 g
                                            </p>
                                        </div>
                                        <span class="offer-price">7,5 KM</span>
                                    </div>
                                </div>
                         
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/menu-item-thumbnail-03.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>KOKOŠJA JUHA</h3>
                                            <p>
                                                Domaća
                                            </p>
                                        </div>
                                        <span class="offer-price">5 KM</span>
                                    </div>
                                </div>
                             
                            </div>
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/menu-item-thumbnail-04.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>PILEĆA SALATA</h3>
                                            
                                        </div>
                                        <span class="offer-price">12 KM</span>
                                    </div>
                                </div>
                           
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/menu-item-thumbnail-05.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>RISSOTO S POVRĆEM</h3>
                                            
                                        </div>
                                        <span class="offer-price">10 KM</span>
                                    </div>
                                </div>
                           
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/menu-item-thumbnail-06.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>ZAGREBAČKI ODREZAK </h3>
                        
                                        </div>
                                        <span class="offer-price">15 KM</span>
                                    </div>
                                </div>
                     
                            </div>
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/menu-item-thumbnail-07.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>LAVA CAKE</h3>
                                            
                                        </div>
                                        <span class="offer-price">6 KM</span>
                                    </div>
                                </div>
                          
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/menu-item-thumbnail-08.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>PALAČINKE S MARMELADOM</h3>
                                            
                                        </div>
                                        <span class="offer-price">3 KM</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="images/menu-item-thumbnail-09.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>PALAČINKE S NUTELLOM</h3>
                                           
                                        </div>
                                        <span class="offer-price">4 KM</span>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>
                
                </div>
                
            </div>
            
        </div>
        
    </div>
    
   
    <div id="footer" class="footer-main">
        <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="ft-title color-white text-center"> Kontaktirajte nas </h2>
                            <p> Obratite nam se za bilo kakve informacije.</p>
                        </div>

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-news -->
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="images/logo.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>Radno vrijeme </h3>
                                <ul>
                                    <li>
                                        <p>Ponedjeljak - Subota </p>
                                        <span> 08:00 - 00:00 </span>
                                    </li>
                                    <li>
                                        <p>Nedjelja </p>
                                        <span>  10:00 - 22:00 </span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>Adresa</h3>
                                <ul>
                                    <li><a href="#">Splitska 12</a></li>
                                    <li><a href="#">88000 Mostar</a></li>
                                    <li><a href="#">BiH</a></li>
                                    
                                </ul>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Email</h3>
                                <p>
                                info@aurora.com 
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Telefon </h3>

                                <p> +63765765 </p>>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Helena Zeko i Magdalena Rajić <a href="#" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    


    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>