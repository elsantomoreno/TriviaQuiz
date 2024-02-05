<?php
if (session_status() === PHP_SESSION_NONE) {

    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>

    <div class="container">
        <header>QUIZ</header>
        <img src="./quiz.png" width="150" height="200"></img>


    </div>
    <div class="inputparm">
        <p class="total">Total points:</p>
        <p class="total"><?php echo $_SESSION["points"] ?></p>
    </div>
</body>

</html>
<?php session_destroy(); ?>