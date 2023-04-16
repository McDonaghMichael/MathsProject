<?php
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
    <?php include "../extras/navbar.php"; ?>

    <h1 class="score-heading" id="score">Score: 0</h1>

    <form method='POST' name='result' id="result-num-form">
    <input type="number" name="result-num" id="result-num">
    <input type="submit" value="submit">
    </form>
    

    <?php

$_SESSION['score'] = $_REQUEST["result-num"];
    
    if(isset($_SESSION["score"])) {
      
      $score = $_SESSION['score'];
  
      require('.././database/db.php');
      $username = stripslashes($_SESSION['username']);
      $username = mysqli_real_escape_string($con, $username);
      $query = "UPDATE users SET score = '$score' WHERE username = '$username'";
      $result = mysqli_query($con, $query);
    }
        
    ?>
    <script src="../js/results.js">
      
    </script>

    <?php include "../extras/footer.php"; ?>

</body>
</html>
