<?php

$dbc = mysqli_connect('localhost', 'root', '', 'domica')
or die ('Error connecting to MySQL server');


$bedrijfsnaam = $_POST['bedrijfsnaam'];
$voornaam = $_POST['voorletters'];
$achternaam = $_POST['achternaam'];
$email = $_POST['email'];
$nieuwsbrief = $_POST['nieuwsbrief'];


$query = "INSERT into verhuurders (bedrijfsnaam, voornaam, achternaam, email, nieuwsbrief) VALUES ('$bedrijfsnaam', '$voornaam', '$achternaam', '$email', '$nieuwsbrief')";

mysqli_query($dbc, $query)
or die ('Error quering database');

echo 'Toegevoegd';


mysqli_close($dbc);

?>
