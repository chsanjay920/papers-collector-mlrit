<?php
$conn = mysqli_connect("localhost","id17764402_root","b<fp)bKv{v2]!VZl");
mysqli_select_db($conn,"id17764402_paper_collector");

if(isset($_POST['submit'])){ 
    $branch = $_POST['branch']; 
    $query = "SELECT * FROM `notes_table` WHERE  branch=\"$branch\";";
    $raw = mysqli_query($conn,$query);
    
    while($res = mysqli_fetch_array($raw)){
        ?>
        <embed src="Notes/<?php echo $res['notes_file'];?>" type="application/pdf" width="700" height="600">
        <?php
    }
}
?>