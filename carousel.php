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
                <div class="col-xs-12 center"><h4><?php echo $article['title']; ?></h4></div>
                <div class="col-xs-12 col-md-6 col-md-offset-3 carousel slide">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div  class="carousel-inner center" role="listbox">
                            <div class="item active">
                                <img class="responsive-img center-block" src="/img/2017/05/leeshoek(1).jpg">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        Heerlijk rustig lezen
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <img class="responsive-img center-block" src="/img/2017/05/leeshoek(2).jpg">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        Wat een mooie kussens!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                    
                    
                    
<!--                    <ul class="slides">
                        <li>
                            <img  src="http://dev.smartmommy.nl/img/2017/05/leeshoek(2).jpg">
                        </li>

                    </ul>-->
                    
<!--                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-image">
                                <img class="carousel-image center"  src="/img/2017/05/leeshoek(2).jpg">
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>-->
<!--                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-image">
                                <img class="carousel-image center"  src="/img/2017/05/leeshoek(3).jpg">
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <div class="card-image">
                                <img class="carousel-image center"  src="/img/2017/05/leeshoek(4).jpg">
                            </div>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                            </div>
                        </div>
                    </div>-->
                </div>               
            </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
                <a class="left" href="#carousel-example-generic" role="button" data-slide="prev">
                    <button type="button" class="btn btn-primary">vorige</button>
                </a>
                <a class="right" href="#carousel-example-generic" role="button" data-slide="next">
                    <button type="button" class="btn btn-primary pull-right">volgende</button>
                </a>
            </div>
        </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>
