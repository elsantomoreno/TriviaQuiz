<?php
class mysqlconnection{
    public static function getSelection($sqlquerry){
   $db_host = getenv("DB_HOST");
   $db_name = getenv("DB_NAME");
   $db_user = getenv("DB_USER");
   $db_pass = getenv("DB_PASSWORD");
   
   
   try {
       $dbConnection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
       $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
      $resultsofquerry=$dbConnection->prepare($sqlquerry);
      $resultsofquerry->execute();
  

   
    } catch (PDOException $e) {
       echo $e->getMessage();
   }
   return $resultsofquerry;
}
}