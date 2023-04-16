<?php
session_start();
if(isset($_SESSION["username"])) unset($_SESSION["username"]);
    if(session_destroy()){
        header("Location: ../");
    }
    
?>