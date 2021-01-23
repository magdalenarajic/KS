<!DOCTYPE html>
<html lang="en">

<head>
<?php  

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "restoran_baza"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
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
                                    <li><a href="index.php">HOME</a></li>
                                    <li><a href="rezervacija.php">REZERVACIJA</a></li>
                                    <li><a href="index.php #menu">MENU</a></li>
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
   

    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row"> <br>
                <h2 class="block-title text-center">
                    Rezervacija	</h2>
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
					
                        </div>
                        <h4 class="form-title">REZERVIRAJ SADA</h4>
                        <p>MOLIMO POPUNI SVA POLJA. HVALA!</p>
                        <form  method="post" class="reservations-box" action="">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="ime"  placeholder="Ime" required="required">
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="email"  placeholder="E-Mail" required="required">
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="broj_telefona"  placeholder="Broj telefona" required="required">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="broj_osoba"  placeholder="Broj osoba" required="required">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="datum" id="date-picker" placeholder="Datum" required="required" >
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="vrijeme" id="time" placeholder="Vrijeme" required="required">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-box">
                                    <label for="hrana" type="text" name="hrana">Hrana:</label>
                                    <select type="text" name="hrana" required="required">
                                    <option value=""></option>
                                    <option value="Pršut">Pršut</option>
                                    <option value="Ovčji sir">Ovčji sir</option>
                                    <option value="Kokošja juha">Kokošja juha</option>
                                    <option value="Pileća salata">Pileća salata</option>
                                    <option value="Rissoto s povrćem">Rissoto s povrćem</option>
                                    <option value="Zagrebački odrezak">Zagrebački odrezak</option>
                                    <option value="Lava cake">Lava cake</option>
                                    <option value="Palačinke s marmeladom">Palačinke s marmeladom</option>
                                    <option value="Palačinke s nutellom">Palačinke s nutellom</option>
                                   </select>
                            </div>
                            
                            </div>
                            <!-- end col --> <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <label for="broj_stola" type="text" name="broj_stola" required="required">Broj stola:</label>
                                    <select type="text" name="broj_stola"  placeholder="Broj stola" required="required">
                                    <option value=""></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                   </select>
                                </div>
                            </div>
                            <!-- end col -->
                            

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button  name ="btn" type="submit" value="Rezerviraj" >Rezerviraj </button>
                                    
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button  type="submit" value="Prikazi narudzbu" ><a href ="narudzba.php">Prikaži narudžbu</a> </button>
                                    
                                </div>
                            </div>
                            <?php
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
                             $insert_query = "INSERT INTO rezervacija(ime, email,broj_telefona,broj_osoba,datum,vrijeme,hrana,broj_stola) values ('$ime', '$email','$broj_telefona', '$broj_osoba','$datum', '$vrijeme', '$hrana', '$broj_stola')";
                             $stmt = $con->prepare($insert_query);
                             $isValid = true;
                             $stmt->execute();
                             $stmt->close();
 
                             mysqli_query($con,$insert_query);
                            if ($insert_query == TRUE){
                            $last_id = $con->insert_id;
                            echo "Uspjesno ste rezervirali.Vaš broj rezervacije je: " . $last_id;
                             }
       
                             }
                       
                             ?>
                             <?php
                            }
                            ?>
                            
                          
                            <!-- end col -->
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
            
            <div class="shema">
                <img width="250" src="images/shema.jpg " >
            </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->
   
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