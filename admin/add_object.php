<?php

$dbc = mysqli_connect('localhost', 'root', '', 'domica')
or die ('Error connecting to MySQL server');


$straatnaam = $_POST['straatnaam'];
$huisnummer = $_POST['huisnummer'];
$toevoeging = $_POST['toevoeging'];
$postcode = $_POST['postcode'];
$plaats = $_POST['plaats'];
$type = $_POST['type'];
$oppervlakte = $_POST['oppervlakte'];
$slaapkamers = $_POST['slaapkamers'];
$huurprijs = $_POST['huurprijs'];
$servicekosten = $_POST['servicekosten'];
$borg = $_POST['borg'];



$query = "INSERT into objecten (straatnaam, huisnummer, toevoeging, postcode, plaats, type, oppervlakte, slaapkamers, huurprijs, servicekosten, borg) VALUES ('$straatnaam', '$huisnummer', '$toevoeging', '$postcode', '$plaats', '$type', '$oppervlakte', '$slaapkamers', '$huurprijs', '$servicekosten', '$borg')";

mysqli_query($dbc, $query)
or die ('Error quering database');

echo 'Toegevoegd';


mysqli_close($dbc);

?>
