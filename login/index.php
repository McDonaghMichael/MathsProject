<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Maths Game | Login</title>
</head>
<body>
<?php

    include "../extras/navbar.php";
    require('.././database/db.php');
    
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
        } else {
            echo "
                  <h1 class='notice'>Incorrect Username/password.</h3><br/>
                  
<div class='container'>  
        <form method='post' name='login' class='login-container'>
        <label for='username'>Username:</label><br>
        <input type='text' class='field' id='username' name='username' autofocus='true'><br><br>
        <label for='password'>Password:</label><br>
        <input type='password' class='field' id='password' name='password'><br><br>
        <p class='inter-page-link'><a href='../signup/'>New User? Register here!</a></p>
        <button class='submit-button' type='submit'>Login</button>
        </form> 
    </div>  ";
        }
    } else {
?>
    <div class="container">  
        <form method="post" name="login" class="login-container">
        <label for="username">Username:</label><br>
        <input type="text" class="field" id="username" name="username" autofocus="true"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" class="field" id="password" name="password"><br><br>
        <p class="inter-page-link"><a href="../signup/">New User? Register here!</a></p>
        <button class="submit-button" type="submit">Login</button>
        </form> 
    </div>  

<?php
    }
?>
    </div>  
</body>
</html>
