<?php
include("../scripts/auth_session.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Maths Game | Dashboard</title>
</head>
<body>
<?php include "../extras/navbar.php"; ?>
    <h1 class="header"><?php echo $_SESSION['username']; ?>'s Dashboard</h1>
        <p><a href="../scripts/delete_account.php">delete account</a></p>
    </div>
    <?php include "../extras/footer.php"; ?>
</body>
</html>