<?php

$dbc = mysqli_connect('localhost', 'root', '', 'domica')
or die ('Error connecting to MySQL server');


$achternaam = $_POST['achternaam'];
$voorletter = $_POST['voorletter'];
$telefoonnummer = $_POST['telefoonnummer'];
$email = $_POST['email'];
$woonwensen_plaats = $_POST['woonwensen_plaats'];
$woonwensen_type = $_POST['woonwensen_type'];
$woonwensen_huurprijs = $_POST['woonwensen_huurprijs'];

$query = "INSERT into huurders (achternaam, voorletter, telefoonnummer, email, woonwensen_plaats, woonwensen_type, woonwensen_huurprijs) VALUES ('$achternaam', '$voorletter', '$telefoonnummer', '$email', '$woonwensen_plaats', '$woonwensen_type', '$woonwensen_huurprijs')";

mysqli_query($dbc, $query)
or die ('Error quering database');

echo 'Toegevoegd';


mysqli_close($dbc);

?>
