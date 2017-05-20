<?php require('config/db.php'); ?>
<?php 
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	$query = 'SELECT * FROM articles WHERE id= '.$id;
	$result = mysqli_query($conn, $query);
	$article = mysqli_fetch_assoc($result);
	mysqli_free_result($result);
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'header.php'; ?>
    <body>
        <div class="container">
        <?php include 'menu.php'; ?>
            <div class="row">
                <div class="col-xs-12 center"><h4>NIJNTJE DANSENDE BLOKJES</h4></div>
                <div class="col-xs-12 col-md-6 col-md-offset-3">
                    <div id="review-carousel" class="carousel slide" data-ride="review-carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#review-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#review-carousel" data-slide-to="1"></li>
                            <li data-target="#review-carousel" data-slide-to="2"></li>
                            <li data-target="#review-carousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/2017/05/Nijntje-dansende-blokjes-1.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img src="img/2017/05/Nijntje-dansende-blokjes-2.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img src="img/2017/05/Nijntje-dansende-blokjes-3.jpg" alt="...">
                            </div>
                            <div class="item">
                                <img src="img/2017/05/Nijntje-dansende-blokjes-4.jpg" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-md-offset-2">
                        <h3>Nijntje dansende blokjes spel</h3>
                    </div>
                    <div class="col-xs-12 col-md-4 text-right">
                        <h3>Adviesprijs €24,95</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-md-2 col-md-offset-2"><img src="img/2017/05/Nijntje-dansende-blokjes--150x150.jpg" alt=""/></div>
                    <div class="col-xs-6 col-md-2"><img src="img/2017/05/cijfer-rondje.JPG" alt=""/></div>
                    <div class="col-xs-12 col-md-4">
                        <dl>
                            <dt class="text-success">Pluspunten</dt>
                            <dd>- Eindeloos speelplezier</dd>
                            <dd>- Memorie in een nieuw jasje</dd>
                            <dd>- Spannend en uitdagend spel</dd>
                        </dl>
                        <br>
                        <dl>
                            <dt class="text-danger">Minpunten</dt>
                            <dd>- Eindeloos speelplezier</dd>
                            <dd>- Memorie in een nieuw jasje</dd>
                            <dd>- Spannend en uitdagend spel</dd>
                        </dl>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2 center">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- SM2 top banner -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-9427996168948323"
                             data-ad-slot="4161807427"
                             data-ad-format="auto"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-offset-2">
                            <p class="text-justify">Nijntje dansende blokjes is het traditionele memorie spelletje, maar dan in een nieuw jasje gestopt. Dit spannende en uitdagende spel is geschikt voor kinderen vanaf ongeveer 3 jaar. Bij dit spel gaat het om snelheid en het herkennen van de plaatjes. De blokjes gaan dansen als dit spel aangezet wordt. Stoppen de blokken met dansen dan is het belangrijk zo snel mogelijk 2 dezelfde blokken te pakken. Dit spel kan op 4 verschillende niveau’s gespeeld worden, dit is natuurlijk afhankelijk van de leeftijd van je kindje en hoe snel je kindje al is. Je kunt het dus steeds moeilijker maken voor je kindje.

                            <br><br><strong class="text-success">Nijntje dansende blokjes spel een spannend en uitdagend spel voor het hele gezin…</strong><br><br>

                            Het spel is nog verder uit te breiden om niet alleen met de blokken te spelen maar ook met de kaartjes erbij. Met de kaartjes erbij wordt het een stuk lastiger. Nu moet je kindje op zoek naar de 2 blokjes die op het kaartjes afgebeeld staan. Wie uiteindelijk aan het einde van het spel de meeste blokken heeft is de winnaar.

                            Bij het Nijntje dansende blokjes spel is het belangrijk snel te kiezen. En de juiste blokken te pakken. Je kindje heeft namelijk maar 4 seconden om de juiste blokken te pakken voor het spel weer gaat dansen. Dit maakt het Nijntje dansende blokjes spel zeer spannend en uitdagend. Het is namelijk nooit het zelfde. Zij jullie klaar voor dit super gezellige spel om samen te spelen.

                            <br><br><strong class="text-success">Dit spel is geschikt voor kinderen vanaf 3 jaar…</strong><br><br>

                            Het Nijntje dansende blokjes spel is geschikt vanaf 3 jaar en is te spelen met 2 tot 4 spelers. Dit spel werkt op 3 AA batterijen. Niet inbegrepen dus welk belangrijk hier rekening mee te houden.

                            <br><br><strong class="text-success">De eerste die de meeste blokken bij elkaar heeft verzameld is de winnaar…</strong><br><br>

                            Is dit niet het spelletje dat je zocht? Wij hebben nog meer spelletjes op de site staan, waar wij inmiddels ervaringen van ouders hebben mogen ontvangen.</p>
                    </div>
                </div>
                <row>
                    <div class="col-xs-12 col-md-8 col-md-offset-2 center">
                        <button class="btn btn-primary btn-lg btn-block">Nu kopen!</button>
                    </div>
                </row>
            </div>
        </div>
    </body>
    
    