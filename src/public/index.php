<?php
if (session_status() === PHP_SESSION_NONE) {

  session_start();
}
$sqlquerry = "select distinct topic from questions;";
include './mysqlconnection.php';
$result = mysqlconnection::getSelection($sqlquerry);




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Import Bootstrap 5.1.3 CSS and JS -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

  <link rel="stylesheet" href="./style.css" />


</head>

<body>

  <div class="container">
    <header>QUIZ</header>
    <img src="./quiz.png" width="100" height="150"></img>
  </div>
  <div class="inputparm">
    <div class="inputparm-label-form">
      <div class="inputparm-label">
        <label id="topicid" for="topic">Choose your topic for your quiz and number of questions?</label>
      </div>
      <div class="inputparm-form">
        <form id="indexform" action="./utilities.php" method="post">
          <div class="selectcontainer">
            <label for="selectid" style="font-size: 30px;">Topic:</label>
            <select id="selectid" name="topic">
              <?php
              if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                  $row = $row['topic'];
                  echo "<option value='$row'>$row</option>";
                }
              } ?>
            </select>
          </div>
          <div class="numberquestion">
            <label for="quantity" style="font-size: 30px;">Number:</label>
            <input type="number" id="quantity" name="quantity" min="1" max="100" required>

          </div>
          <input id="indexbutton" type="submit" value="Start">


        </form>
      </div>
    </div>
  </div>


</body>

</html>