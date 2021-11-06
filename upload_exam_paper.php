<?php
$host = "localhost";
$user = "id17764402_root";
$pass = "b<fp)bKv{v2]!VZl";
$db = "id17764402_paper_collector";
$conn = mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);

if($_FILES['fileofexam']){
    $subject_name = $_POST['subject_name'];
    $examtype = $_POST['exam-type'];
    $branch = $_POST['branch'];
    $paper_date = $_POST['year-selected'];
    
    $original_file= $_FILES['fileofexam']['name'];
    $source_file = $_FILES['fileofexam']['tmp_name'];

    $temp = explode(".", $_FILES["fileofexam"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $destination = "EXAM-PAPERS/".$newfilename;

    move_uploaded_file($source_file,$destination);

    $query = "INSERT INTO `exam-table` (`id`, `exam_type`, `subject-name`, `date_of_exam`, `file_of_exampaper`,`branch`) VALUES (NULL, '$examtype', '$subject_name', '$paper_date', '$newfilename','$branch');";
    $res = mysqli_query($conn,$query);
    if($res == true){
        echo "<center><h1>Added successfully</h1></center>";
    }
    else{
        echo "<center><h1>error occured</h1></center>";
    }
}
?>