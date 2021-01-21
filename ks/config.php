<?php 

$success_message = "";

$ime = filter_input(INPUT_POST, 'ime');
$email = filter_input(INPUT_POST, 'email');
$broj_telefona = filter_input(INPUT_POST, 'broj_telefona');
$broj_osoba = filter_input(INPUT_POST, 'broj_osoba');
$datum = filter_input(INPUT_POST, 'datum');
$vrijeme = filter_input(INPUT_POST, 'vrijeme');
$hrana = filter_input(INPUT_POST, 'hrana');
$broj_stola = filter_input(INPUT_POST, 'broj_stola');

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "restoran_baza"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
    }
    else {
        $sql = "INSERT INTO rezervacija(ime, email,broj_telefona,broj_osoba,datum,vrijeme,hrana,broj_stola) values ('$ime', '$email','$broj_telefona', '$broj_osoba','$datum', '$vrijeme', '$hrana', '$broj_stola')";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $stmt->close();
    
        $success_message = "Vaš račun je uspješno napravljen!";
    }
    
        
        
    
?>




