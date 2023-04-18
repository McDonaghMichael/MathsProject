<?php
include("./scripts/auth_session.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Maths Game | Home</title>
</head>
<body>
    <?php include "./extras/navbar.php"; ?>
    <div class="quiz-container" id="quiz">
        <div class="quiz-header">
            <h2 id="question">Question Text</h2>
            <div class="row">
                <div class="col-md-6 col-sm-12 mt-4">
                    <div class="question-button">
                        <button type="button" name="answer" id="a-btn" class="answer">
                            <span id="a_text">Answer A</span>
                        </button>
                    </div>        
                </div>
                <div class="col-md-6 col-sm-12 mt-4">
                    <div class="question-button">
                        <button type="button" name="answer" id="b-btn" class="answer">
                            <span id="b_text">Answer B</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-4">
                    <div class="question-button">
                        <button type="button" name="answer" id="c-btn" class="answer">
                            <span id="c_text">Answer C</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 mt-4">
                    <div class="question-button">
                        <button type="button" name="answer" id="d-btn" class="answer">
                            <span id="d_text">Answer D</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/quiz.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <?php include "./extras/footer.php"; ?>
</body>
</html>