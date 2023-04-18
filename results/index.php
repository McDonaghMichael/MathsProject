<?php
// Checks if the user is logged in
include("../scripts/auth_session.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Maths Game | Result</title>
</head>

<body>
    <?php
    // Imports the navigation bar
    include "../extras/navbar.php"; 
    ?>

    <h1 class="score-heading" id="score">Score: 0</h1>


    <?php

        /**
         * Updates the score of the player accordingly
         */
        $score = $_GET['score'];
        $_SESSION["score"] = $score;
        
        if(isset($_SESSION["score"])) {
            require('.././database/db.php');
            $username = stripslashes($_SESSION['username']);
            $username = mysqli_real_escape_string($con, $username);
            $query = "UPDATE users SET score = '$score' WHERE username = '$username'";
            $result = mysqli_query($con, $query);
        }
        
    ?>

    <script src="../js/results.js">
    </script>

    <?php 
    // Imports the footer
    include "../extras/footer.php";
    ?>

</body>

</html>