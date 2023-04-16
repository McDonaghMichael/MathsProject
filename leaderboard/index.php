<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Maths Game | Leaderboard</title>
</head>
<body>
    <?php include "../extras/navbar.php"; ?>
    <div class="container">
        <table class="table-container">
            <tr>
            <td class="top-table">Place</td>
            <td class="top-table">Username</td>
            <td class="top-table">Score</td>
            </tr>

            <?php
                
                require('.././database/db.php');
                $query = "SELECT `username`, `score` FROM `users` ORDER BY convert(`score`, UNSIGNED INTEGER) DESC;";
                $result = mysqli_query($con, $query) or die(mysql_error());
                $counter = 1;
                
                foreach($result as $data)
                    {
                        if($counter > 20) break;
                        echo '<tr class="table-content">';
                            echo '<td>';
                                echo ''.$counter.'';
                            echo '</td>';
                            echo '<td>';
                                echo ''.$data['username'].'';
                            echo '</td>';
                            echo '<td>';
                                echo $data['score'];
                            echo '</td>';
                        echo '</tr>';
                        $counter++;
                    }
                    include "../extras/footer.php";
            ?>
        </table>
    </div>

    <?php 
    
    ?>
</body>
</html>
