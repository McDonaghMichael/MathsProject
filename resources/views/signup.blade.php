<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/signup.css') }}" rel="stylesheet">
    <title>Maths Game | Signup</title>
</head>
<body>
    <div class="container">
        <form class="contact-container" action="">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" class="field"><br>
            <label for="e-mail">E-Mail:</label><br>
            <input type="email" id="E-Mail" name="E-Mail" class="field" ><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" class="field"><br><br>
            <label for="confirm password"> Confirm Password:</label><br>
            <input type="password" id="password" name="password" class="field"><br><br>
            <button class="submit-button" type="submit">Sign up</button>
        </form> 
    </div>  
</body>
</html>