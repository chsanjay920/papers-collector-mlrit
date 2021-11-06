<?php
$conn = mysqli_connect("localhost","id17764402_root","b<fp)bKv{v2]!VZl");
mysqli_select_db($conn,"id17764402_paper_collector");

if(isset($_POST['submit'])){
    //$sname = $_POST['subject'];
    $branch = $_POST['branch'];
    $paperyear = $_POST['year-selected'];
    $exam = $_POST['exam'];
    $query = "SELECT * FROM `exam-table` WHERE `branch`=\"$branch\" AND date_of_exam=\"$paperyear\" AND exam_type=\"$exam\";";
    $raw = mysqli_query($conn,$query);
    while($res = mysqli_fetch_array($raw)){
        ?>
        <embed src="EXAM-PAPERS/<?php echo $res['file_of_exampaper'];?>" type="application/pdf" width="700" height="600">
        <?php
    }
}
?>