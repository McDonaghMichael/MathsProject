<?php
    session_start();
    if(isset($_SESSION["username"])) {
        require('.././database/db.php');
        $username = stripslashes($_SESSION['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $query = "DELETE FROM `users` WHERE username = '" . $username . "'";
        $result = mysqli_query($con, $query);
        if(session_destroy()) {
            header("Location: ./../");
        }
    }
?>