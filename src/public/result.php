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


    <main>
        <div class="index-container-1">
            <header>QUIZ</header>

        </div>
        <div class="result-container-2">
            <p>QUIZ FINISHED</p>

        </div>
        <div class="result-container-1">
            <p class="totaltext"><?php echo $_SESSION['mark'] ?></p>
            <p class="total">Total points:</p>
            <p class="total"><?php echo $_SESSION["points"] ?></p>
        </div>
    </main>
</body>

</html>
<?php session_destroy(); ?>