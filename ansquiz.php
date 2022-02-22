<?php

session_start();

$con = mysqli_connect('localhost:3307', 'root');

mysqli_select_db($con, 'wtproject');

// $course = $_SESSION['course'];
// $quiz = $_POST['quiz'];
// echo $quiz;

// $q = "SELECT course FROM courses WHERE id='$quiz' ";
// $query = mysqli_query($con, $q);

// while($row = $query -> fetch_assoc())
// {
//     $sel = $row['course'];
// }


// $qa = "SELECT * FROM quiz WHERE course='$sel'";
// // var_dump($qa);
// $qaquery = mysqli_query($con, $qa);
// // var_dump($qaquery);
// $rowcount = mysqli_num_rows($qaquery);
// // echo $rowcount;

// for($i=1; $i<=$rowcount; $i++)
// {
//     $row = mysqli_fetch_array($qaquery, MYSQLI_ASSOC);
// 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <style>
        body{
            font-size: 25px;
            color: white;
            text-shadow: 0 0 10px black, 0 0 10px black;
            /* font-weight: bold; */
        }
        .ques{
            margin-top: 0%;
        }
        input[type=submit] {
            background-color: white;
            border: 4px solid black;
            border-radius: 20px;
            color: black;
            /* padding: 10px 30px; */
            /* text-align: center; */
            display: inline-block;
            font-size: 27px;
            font-weight: bold;
            margin: 10px 30px;
            cursor: pointer;
            width: 250px;
            height: 80px;
            margin-bottom: 50px;
            margin-left: 35%;
            
        }
        input[type=submit]:hover
        {
            background-color: black;
            border: 4px solid #ffffff;
            color: white;
            width: 260px;
            height: 82px;
        }
        .header{
            color: white;
            text-align: left;
            font-size: 40px;
            background-color: black;
            margin-top: 0%;
            margin-left: 0%;
            margin-right: 0%;
            padding-top: 30px;
            padding-bottom: 30px; 
            padding-left: 40px; 
            text-align: center;

        }
    </style>
</head>
<body style="background-image:url('bg1.jpg');
	background-size:100%">
    <h1 class="header">QUIZ</h1>


    <form action="post_ans.php" method="post">
        <?php
            for($i=1;$i<6;$i++){
                $l = 1;
                  
                $ansid = $i;

                $sql1 = "SELECT * FROM `questions` WHERE `qid` = $i ";
                $result1 = mysqli_query($con, $sql1);
                if (mysqli_num_rows($result1) > 0) {
                    while($row1 = mysqli_fetch_assoc($result1)) {
                     	?>				
                    <br>
                  <div class="ques">
                     <br>
                     <p>  <?php echo $i ." : ". $row1['questions']; ?> </p>
                    
                     <?php
                        $sql = "SELECT * FROM `answers` WHERE `ans_id` = $i";
                        	$result = mysqli_query($con, $sql);
                        		if (mysqli_num_rows($result) > 0) {
                        						while($row = mysqli_fetch_assoc($result)) {
                        	?>	
                           
                     <div class="card-block">
                        <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $ansid; ?>" value="<?php echo $row['aid']; ?>" > <?php echo $row['answer']; ?> 
                        <br>
                     </div>
                     <?php
                        
                        } } 
                        $ansid = $ansid + $l;
                        } }}
                        
                     ?>
                  </div>

                  <br>
                  <input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>
               </form>
    
 


</body>
</html>



<!-- CREATE TABLE questions(qid int(250) auto_increment not null primary key, course varchar(200), questions varchar(250), ans_id int(250)); -->
<!-- CREATE TABLE answers(aid int(250) auto_increment not null primary key, answer varchar(250), ans_id int(250)); -->
<!-- CREATE TABLE results(uid int(250) auto_increment not null primary key, username varchar(250), totalques int(250), answerscorrect int(250)); -->

