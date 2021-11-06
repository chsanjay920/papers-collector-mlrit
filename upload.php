<!DOCTYPE html>
<html lang="en">
    <style>
        img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}
    </style>
<?php
error_reporting(0);
    $host = "localhost";
    $user = "id17764402_root";
    $pass = "Mlrit@123456789";
    $db = "id17764402_paper_collector";
    $conn = mysqli_connect($host,$user,$pass);
    mysqli_select_db($conn,$db);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload document </title>
    <link rel="stylesheet" href="uploadcss.css">
</head>
<body>
    <div class="header">
        <h1>
        UPLOAD DOCUMENTS
        </h1>
    </div>
    <div class="field">
        <input type="radio" onchange="showform(this.value)" name="type" id="" value="papers"><label>EXAM  PAPERS</label> &#160;
        <input type="radio" onchange="showform(this.value)" name="type" id="" value="notes"><label>NOTES </label>&#160;
    </div><br><br>
    <div class="notesuploadform" style="display: none;">
        <form action="upload_notes.php" method="post" enctype="multipart/form-data">
            <label for="fname">choose a branch : </label>
                <select name="branch" id="branch">
                    <?php
                        $query = "SELECT branch FROM `branch`;";
                        $res=mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_array($res)) {
                            echo "<option value='" . $row['branch'] ."'>" . $row['branch'] ."</option>";
                        }
                    ?>
                </select><br><br>
            <label for="fname">choose a subject : </label>
            <select name="subject" id="subject" novalidate>
            <option value="none" selected disabled >Select an Option</option>
                <?php
                    $query = "SELECT subjects FROM `notes_subject`;";    
                    $res=mysqli_query($conn,$query);
                    while ($row = mysqli_fetch_array($res)) {
                        echo "<option value='" . $row['subjects'] ."'>" . $row['subjects'] ."</option>";
                    }
                ?>
            </select>&#160;
            <div class="buttons">
                <button type="button" onclick="displayaddsubject1()">add new subject</button>
            </div>
            <br><br>
            <div class="addsubjectnotes" id="addsubjectnotes" style="display:none">
                <label for="newsubject">subject name : </label>
                <input type="text" name="newsubject" id="subject_name" novalidate><br><br>
            </div>
            <label for="unitname">Title : </label>
            <input type="text" name="unitname" id="unitname" required><br><br>
            <label for="document"> upload document</label><br><br>
            <input type="file" name="document" id="documnet" required><br><br>
            <input type="submit" value="submit">
        </form>
    </div>
    <div class="exampaperuploadform" style="display: none;">
        <form action="upload_exam_paper.php" method="post" enctype="multipart/form-data">
            <label for="exam-type">choose exam type</label>
            <select name="exam-type" id="exam-type">
                <option value="mid-1">mid-1</option>
                <option value="mid-2">mid-2</option>
                <option value="semister">semister(regular)</option>
                <option value="supply">supplimentry</option>
            </select><br><br>
            <label for="subject_name">subject name : </label>
            <select name="subject_name" id="subject" novalidate>
            <option value="none" selected disabled >Select an Option</option>
                <?php
                    $query = "SELECT subjects FROM `exam_notes`;";    
                    $res=mysqli_query($conn,$query);
                    while ($row = mysqli_fetch_array($res)) {
                        echo "<option value='" . $row['subjects'] ."'>" . $row['subjects'] ."</option>";
                    }
                ?>
            </select>&#160;
            <div class="buttons">
            <button type="button" onclick="displayaddsubject2()">add new subject</button><br><br>
            </div>
            <div class="addsubject" id="addsubject" style="display:none">
                <label for="newsubject">subject name : </label>
                <input type="text" name="newsubject" id="subject_name" novalidate><br><br>
            </div>
            
            <label for="fname">choose a year : </label>
                <select name="year-selected" id="year-selected">
                    <option value="2020-2021">2018-2019</option>
                    <option value="2021-2022">2019-2020</option>
                    <option value="2020-2021">2020-2021</option>
                    <option value="2021-2022">2021-2022</option>
                </select><br><br>
            <label for="fileofexam">uplaod document</label><br><br>
            <input type="file" name="fileofexam" id="fileofexam"><br><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
<script>
    function showform(name){
        if(name=="notes"){
            document.getElementsByClassName('notesuploadform')[0].style.display="block";
            document.getElementsByClassName('exampaperuploadform')[0].style.display="none";
        }
        else{
            document.getElementsByClassName('notesuploadform')[0].style.display="none";
            document.getElementsByClassName('exampaperuploadform')[0].style.display="block";
        }
    }
    function displayaddsubject1(){
        var x = document.getElementById('addsubjectnotes');
        if(x.style.display=="block"){
            x.style.display="none";
        }
        else{
            x.style.display="block";
        }
    }
    function displayaddsubject2(){
        var x = document.getElementsByClassName('addsubject')[0];
        if(x.style.display=="block"){
            x.style.display="none";
        }
        else{
            x.style.display="block";
        }
    }
</script>
</html>