<html>
    <head>
        <style>
        a{

            font-size:1.5rem;
            text-transform: uppercase;
            display: inline-block;
            margin-top:10px;

        }
        a:link {
            color: red;
        }
        a:visited {
            color: green;
        }

        a:hover {
            color: hotpink;
        }

        a:active {
            color: blue;
        }
        </style>
    </head>
<body>
<?php
error_reporting(0);
$conn = mysqli_connect("localhost","id17764402_root","Mlrit@123456789");
mysqli_select_db($conn,"id17764402_paper_collector");

if(isset($_POST['submit'])){
    $sname = $_POST['subject'];
    $paperyear = $_POST['year-selected'];
    $exam = $_POST['exam'];

    $query = "SELECT * FROM `exam-table` WHERE `subject-name`=\"$sname\" AND date_of_exam=\"$paperyear\" AND exam_type=\"$exam\";";
    $raw = mysqli_query($conn,$query);
    while($res = mysqli_fetch_array($raw)){
        ?>
        <center>
            <a href="EXAM-PAPERS/<?php echo $res['file_of_exampaper'];?>" target="_blank"><?php echo $res['subject-name'].' - '.$res['exam_type'].' - '.$res['date_of_exam'] ?></a>
        <?php
    }
}
?>
</body>
</html>