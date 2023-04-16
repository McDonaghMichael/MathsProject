<?php 
if(session_id() === "") session_start();
echo '

<nav class="navbar">

   <div class="logo">Maths Quiz</div>
        <ul class="nav-links">

            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>

            <div class="menu">

            ';

            if(isset($_SESSION["username"])) {
            echo '<li><a href="../">Start Quiz</a></li>';
            }
            echo '
            <li><a href="../leaderboard">Leaderboard</a></li>

            ';

            if(!isset($_SESSION["username"])) {
                echo '<li><a href="../signup">Register</a></li>';
                echo '<li><a href="../login">Login</a></li>';
            }else{
                echo '<li><a href="../dashboard">Dashboard</a></li>';
                echo '<li><a href="../scripts/logout">Logout</a></li>';
            }


           echo '

            <li><a href="https://github.com/McDonaghMichael/MathsProject">Source Code</a></li>

            </div>

            </ul>

  </nav>' ?>