<?php
error_reporting(0);
$subject = "";

if(isset($_POST['subject_name'])){
    $subject = $_POST['subject_name'];
}
elseif(isset($_POST['newsubject'])){
    $subject = $_POST['newsubject'];
    $servername = "localhost";
    $username = "Mlrit@123456789";
    $password = "Mlrit@123456789";
    $dbname = "id17764402_paper_collector";

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO exam_notes (`ID`, `subjects`) VALUES (NULL, '$subject')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
if(isset($_POST['subject_name']) || isset($_POST['newsubject'])){
    $host = "localhost";
$user = "id17764402_root";
$pass = "Mlrit@123456789";
$db = "id17764402_paper_collector";
$conn = mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);

    $examtype = $_POST['exam-type'];
    $paper_date = $_POST['year-selected'];

    $original_file= $_FILES['fileofexam']['name'];
    $source_file = $_FILES['fileofexam']['tmp_name'];

    $temp = explode(".", $_FILES["fileofexam"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $destination = "EXAM-PAPERS/".$newfilename;

    move_uploaded_file($source_file,$destination);

    $query = "INSERT INTO `exam-table` (`id`, `exam_type`, `subject-name`, `date_of_exam`, `file_of_exampaper`) VALUES (NULL, '$examtype', '$subject', '$paper_date', '$newfilename');";
    $res = mysqli_query($conn,$query);
    if($res == true){
        echo "data addes successfully";
    }
    else{
        echo "error occured";
    }
}
?>