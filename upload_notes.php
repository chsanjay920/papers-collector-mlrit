<?php
$host = "localhost";
$user = "id17764402_root";
$pass = "b<fp)bKv{v2]!VZl";
$db = "id17764402_paper_collector";
$conn = mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);
if($_FILES['document']){
    $branch = $_POST['branch'];
    $subject_name = $_POST['subject_name'];
    $unit_description = 0; //$_POST['unitnumber'];
    
    $original_file= $_FILES['document']['name'];
    $source_file = $_FILES['document']['tmp_name'];

    $temp = explode(".", $_FILES["document"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $destination = "Notes/".$newfilename;

    move_uploaded_file($source_file,$destination);

    $query = "INSERT INTO `notes_table` (`id`, `name_of_subject`, `decription_of_notes`, `notes_file`,`branch`) VALUES (NULL, '$subject_name', '$unit_description', '$newfilename','$branch');";
    $res = mysqli_query($conn,$query);
    if($res == true){
        echo "<center><h1>Added successfully</h1></center>";
    }
    else{
        echo "<center><h1>error occured</h1></center>";
    }
}
?>
