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
require_once("../vendor/autoload.php");
try{
    $count=10000;
    $faker=\Faker\Factory::create();
    $con = new PDO("mysql:dbname=test;host=localhost","root","");
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    //  $sql='INSERT INTO table2 (name,college,score) VALUES (:name,:college,:score)';
    //  $query=$con->prepare($sql);
    //  for($i=0;$i<$count;$i++){
    //      $query->execute([
    //          ':name'=>$faker->name,
    //          ':college'=>$faker->company,
    //          ':score'=>$faker->numberBetween($min = 100, $max = 900)
    //      ]);
    //  }
    
}catch(PDOException $e){
    echo "Connection Failed:" . $e->getMessage();
}

?>