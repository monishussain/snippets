<?php

// Define needed credentials.
// define("HOST","localhost");  
// define("USER",'root');  
// define("PASS",'');
// define("DB",'test');  

// // Establish Connection.
// $conn = mysqli_connect(HOST, USER, PASS) or die ('Error connecting to Database.');  
// $connection = mysqli_select_db(DB);  

ob_start();
date_default_timezone_set("Asia/Kolkata");
try{
    $con = new PDO("mysql:dbname=test;host=localhost","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}catch(PDOException $e){
    echo "Connection Failed:" . $e->getMessage();
}

?>