<?php

    $conn = mysqli_connect('localhost', 'erik', 'lbz6X89413629!', 'cmc_smartmommy');
    if(mysqli_connect_errno()){
        echo 'Failed to connect to DB' . mysqli_connect_errno();    
    }
    
?>