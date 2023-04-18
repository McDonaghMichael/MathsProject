<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Maths Game | Signup</title>
</head>
<body>
<?php

    // Imports the navigation bar
    include "../extras/navbar.php"; 

    require('.././database/db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header("Location: ../index.php");
    } else {
?>
    <div class="container">
        <form class="contact-container" action="" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" class="field"><br>
            <label for="e-mail">E-Mail:</label><br>
            <input type="email" id="email" name="email" class="field" ><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" class="field"><br><br>
            <label for="confirm password"> Confirm Password:</label><br>
            <input type="password" id="password" name="password" class="field"><br><br>
            <p class="inter-page-link"><a href="../login/">Already have an account? Login here!</a></p>
            <button class="submit-button" type="submit">Sign up</button>
        </form> 
    </div>  
    <?php 
    // Imports the footer
    include "../extras/footer.php";
    ?>
<?php
    }
?> 
</body>
</html>
