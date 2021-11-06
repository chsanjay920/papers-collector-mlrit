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
    $query = "SELECT * FROM `notes_table` WHERE name_of_subject=\"$sname\";";
    $raw = mysqli_query($conn,$query);
    while($res = mysqli_fetch_array($raw)){
        ?>
        <center>
        <a href="Notes/<?php echo $res['notes_file'];?>" target="_blank"> <?php echo $res['name_of_subject'].' - '.$res['decription_of_notes']?></a></center>
        <?php
    }
}
?>
</body>
</html>


