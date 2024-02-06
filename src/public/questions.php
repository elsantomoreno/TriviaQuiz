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

        <div class="questions-container-1">
            <header>Selected topic: <?php echo $_SESSION['topic'] ?></header>

        </div>
        <p id="pquestion" style="max-width:380px;"><?php echo $_SESSION["answer"]["question_text"] ?></p>

        <div class="questions-container-2">

            <form action=" ./utilities.php" method="post">
                <div class="checkbox-1">
                    <label for="answer_1"><?php echo $_SESSION["answer"]["answer_1"] ?></label><br>
                    <input type="checkbox" id="answer_1" name="topicselected[]" value=1>
                </div>
                <div class="checkbox-1">
                    <label for="answer_2"><?php echo $_SESSION["answer"]["answer_2"] ?></label><br>
                    <input type="checkbox" id="answer_2" name="topicselected[]" value=2>
                </div>
                <?php if (!empty($_SESSION["answer"]["answer_3"])) { ?>
                    <div class="checkbox-1">
                        <label for="answer_3"><?php echo $_SESSION["answer"]["answer_3"] ?></label>
                        <input type="checkbox" id="answer_3" name="topicselected[]" value=3>
                    </div>
                <?php } ?>
                <?php if (!empty($_SESSION["answer"]["answer_4"])) { ?>
                    <div class="checkbox-1">
                        <label for="answer_4"><?php echo $_SESSION["answer"]["answer_4"] ?></label>
                        <input type="checkbox" id="answer_4" name="topicselected[]" value=4>
                    </div>
                <?php } ?>
                <?php if (!empty($_SESSION["answer"]["answer_5"])) { ?>
                    <div class="checkbox-1">
                        <label for="answer_5"><?php echo $_SESSION["answer"]["answer_5"] ?></label>
                        <input type="checkbox" id="answer_5" name="topicselected[]" value=5>
                    </div>
                <?php } ?>
                <div class="buttonsubmmit">
                    <input id="buttonsubmmit" type="submit" value="continue">
                </div>
            </form>
        </div>

    </main>

</body>

</html>