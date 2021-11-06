<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "paper-collector";
$conn = mysqli_connect($host,$user,$pass,$db);
// $db = mysqli_select_db($conn,$db);

$query = "INSERT INTO `notes_subject` (`ID`, `subjects`) VALUES (NULL, \'hello\');";

$res = mysqli_query($conn,$query);
    if($res){
        echo "data addes successfully";
    }
    else{
        echo "error occured";
    }
?>