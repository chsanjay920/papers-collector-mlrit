<?php
error_reporting(0);
$subject = "";

if(isset($_POST['subject'])){
    $subject = $_POST['subject'];
}
elseif(isset($_POST['newsubject'])){
    $servername = "localhost";
    $username = "id17764402_root";
    $password = "Mlrit@123456789";
    $dbname = "id17764402_paper_collector";
    $subject = $_POST['newsubject'];

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO notes_subject (`ID`, `subjects`) VALUES (NULL, '$subject')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
if(isset($_POST['subject']) || isset($_POST['newsubject'])){
    $host = "localhost";
    $user = "id17764402_root";
    $pass = "Mlrit@123456789";
    $db = "id17764402_paper_collector";
    $conn = mysqli_connect($host,$user,$pass);
    mysqli_select_db($conn,$db);
    
    $branch = $_POST['branch'];
    $unit_description = $_POST['unitname'];
    $original_file= $_FILES['document']['name'];
    $source_file = $_FILES['document']['tmp_name'];

    $temp = explode(".", $_FILES["document"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $destination = "Notes/".$newfilename;

    move_uploaded_file($source_file,$destination);

    $query = "INSERT INTO `notes_table` (`id`, `name_of_subject`, `decription_of_notes`, `notes_file`,`branch`) VALUES (NULL, '$subject', '$unit_description', '$newfilename', '$branch');";
    $res = mysqli_query($conn,$query);
    if($res == true){
        echo "data addes successfully";
    }
    else{
        echo "error occured";
    }
}

?>
