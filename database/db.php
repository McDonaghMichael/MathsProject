<?php
    $con = mysqli_connect(
        "",
        "",
        "",
        "");
    if(mysqli_connect_errno()){
        echo "There was an error while connecting to the database: " . mysqli_connect_error();
    }
?>