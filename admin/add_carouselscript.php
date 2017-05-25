<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
<?php require ('config/config.php'); ?> 
<?php require ('config/db.php'); ?>

<?php

//functie om een print beter uit te lezen op de webpagina
function pr($array) {

    echo "<pre>\n";
    print_r($array);
    echo "</pre>";
}

//krijg je geen superglobal melding meer in netbeans
//$myPostArgs = filter_input_array(INPUT_POST);

if (isset($_POST['title'])) {
    $titel = $_POST['title'];
}

if (isset($_POST['category_id'])) {
    $category = $_POST['category_id'];
}
if (isset($_POST['body'])) {
    $body = $_POST['body'];
}

pr($_POST);

$query = "INSERT into carousels (title, category, body) VALUES ('$titel', '$category', '$body')";



mysqli_query($conn, $query)
        or die('Error quering database1');

echo '';

$carouselid = mysqli_insert_id($conn);
$target_dir = "/home/erik/dev.smartmommy.nl/admin/uploads/carousel_media/$carouselid";
mkdir($target_dir);

for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

    $target = $target_dir . '/' . basename($_FILES['images']['name'][$i]);

    if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $target)) {
        print "Image uploaded ";
        $query_image = "INSERT into carousels_media (image, carousel_id) VALUES ('$target', $carouselid)";

        mysqli_query($conn, $query_image)
                or die('Error quering database');
    } else {
        print "Problem";
        //print_r(error_get_last());
    }
}

$featured_image = $_FILES['featured_image']['name'];


$target_featureddir = "/home/erik/dev.smartmommy.nl/admin/uploads/carousel_featured/$carouselid";
mkdir($target_featureddir);

$target_featured = $target_featureddir . '/' . basename($_FILES['featured_image']['name']);

$query_featured = "INSERT into carousels_featured (featured, carousel_id) VALUES ('$target_featured', $carouselid)";

if (move_uploaded_file($_FILES['featured_image']['tmp_name'], $target_featured)) {
    print "Featured uploaded";
} else {
    $msg = "Problem";
}

mysqli_query($conn, $query_featured)
        or die('Error quering database featured');





mysqli_close($conn);
?>
