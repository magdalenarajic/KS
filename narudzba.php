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
                                    <li><a href="index.php">MENU</a></li>
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
    <div class="container"> <br>
    <div class="row"> <br>
    <h3 >Molimo unesi ID svoje rezervacije:</h3>
                                 <form  method="post"  action="">                              
                                <div>  
                                    <input type="text" name="id"  > 
                                 <button  name ="btn" type="submit" > Potvrdi </button> <br> </div> 
                                 <br>
                            
                                 <?php
                                 if(isset($_POST['btn'])){
                                    
                                    $id = filter_input(INPUT_POST, 'id');
                                    $sql = "SELECT * FROM rezervacija WHERE id_rezervacija = " . $id;
                                    if($result = mysqli_query($con, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<div> <h3>Vaše ime: ". $row['ime'] ." </h3>";
                                                echo "<div> <h3>Email: ". $row['email'] ." </h3>";
                                                echo "<div> <h3>Broj telefona: ". $row['broj_telefona'] ." </h3>";
                                                echo "<div> <h3>Broj osoba: ". $row['broj_osoba'] ." </h3>";
                                                echo "<div> <h3>Datum: ". $row['datum'] ." </h3>";
                                                echo "<div> <h3>Vrijeme: ". $row['vrijeme'] ." </h3>";
                                                echo "<div> <h3>Hrana: ". $row['hrana'] ." </h3>";
                                                echo "<div> <h3>Broj stola: ". $row['broj_stola'] ." </h3>";
                                                echo "                        </div>";
                                            }
                                            mysqli_free_result($result);
                                        } else{
                                            echo '<h4 class="no-annot">Nema takve rezervacije.</h4>';
                                        }
                                    } }
                                    ?>
                        
                
                
                        
                                
                                


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