<?php require ('config/config.php'); ?> 

<?php require ('config/db.php'); ?>
<?php 
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	$query = 'SELECT * FROM carousels WHERE id= '.$id;
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
                <div class="col-xs-12 col-md-6 col-md-offset-3 carousel slide fixed-height">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner center" role="listbox">
                            <div class="item active">
                                <div class="thumbnail thumbnail-sm">
                                    <img class="responsive-img center-block" src="/img/2017/05/leeshoek(1).jpg">
                                    <div class="caption text-center">
                                        Heerlijk rustig lezen
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumbnail thumbnail-sm">
                                    <img class="responsive-img center-block" src="/img/2017/05/leeshoek(2).jpg">
                                    <div class="caption text-center">
                                        Wat een mooie kussens!
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumbnail thumbnail-sm">
                                    <img class="responsive-img center-block" src="/img/2017/05/leeshoek(3).jpg">
                                    <div class="caption text-center">
                                        Ook heel mooi!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>               
            </div>
        <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3 center adsense">
                <p class="text-center"><small class="text-center">Advertentie</small></P>
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
        </div>
        <br>
        <?php include 'footer.php'; ?>
    </body>
</html>
