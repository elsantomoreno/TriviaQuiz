<?php

if (session_status() === PHP_SESSION_NONE) {

  session_start();
}

if (!isset($_SESSION["points"])) $_SESSION["points"] = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  if (isset($_POST['topic'])) {
    $_SESSION['topic'] = $_POST['topic'];
  }
  if (isset($_POST['quantity'])) {
    $_SESSION['quantity'] = $_POST['quantity'];
    $numberOfquestions = $_SESSION['quantity'];
  }
  if (!isset($_SESSION['counter'])) $_SESSION['counter'] = 1;
  if (!empty($_POST["topicselected"])) {
    $correctAnswers = explode(",", $_SESSION["answer"]["correct"]);

    if (empty(array_diff($correctAnswers, $_POST["topicselected"]))) {


      $_SESSION["points"] = $_SESSION["points"] + 1;
    }
  }



  $topic = $_SESSION['topic'];


  require_once "./mysqlconnection.php";
  if (!isset($_SESSION['allquestions'])) {
    $sqlOftopic = "select * from questions where topic='$topic' limit $numberOfquestions;";
    $arrayOftopic = mysqlconnection::getSelection($sqlOftopic);
    $allquestions = $arrayOftopic->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION['allquestions'] = $allquestions;
  }

  $_SESSION['answer'] = array_shift($_SESSION['allquestions']);
}


$_SESSION["counter"] = $_SESSION["counter"] + 1;


if ($_SESSION["counter"] <= $_SESSION['quantity'] + 1) {
  header("Location:./questions.php");
} else {
  header("Location:./result.php");
}
