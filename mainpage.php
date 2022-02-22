<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURSES</title>

    <style>
        .header{
            color: white;
            text-align: left;
            font-size: 18px;
            background-color: black;
            margin-top: 0%;
            margin-left: 0%;
            margin-right: 0%;
            padding-top: 10px;
            padding-bottom: 5px; 
            padding-left: 40px; 

        }
        .GFG {
            background-color: white;
            border: 4px solid black;
            border-radius: 20px;
            color: black;
            /* padding: 10px 30px; */
            text-align: center;
            display: inline-block;
            font-size: 15px;
            margin: 10px 30px;
            cursor: pointer;
            width: 350px;
            height: 80px;
            margin-bottom: 30px;
            
            }
            button:hover
        {
            background-color: black;
            border: 4px solid #ffffff;
            color: white;
            width: 360px;
            height: 82px;
        }

    </style>
</head>

<?php
session_start();
?>
<body style="background-image:url('bg1.jpg');
background-repeat: no-repeat;
	background-size: 100%">
    <div class="header">
        <h1>WELCOME <?php echo $_SESSION['username'];?></h1>
    </div>
    <div class="b"align ="center"><br><br>
    
        <button class="GFG" onclick="location.href='viewcourses.php'"><h1>VIEW COURSES</h1></button><br>
        <button class="GFG" onclick="location.href='ansquiz.php'"><h1>DO QUIZZES</h1></button><br>
        <button class="GFG" onclick="location.href='results.php'"><h1>VIEW RESULTS</h1></button><br>
        <button class="GFG" onclick="location.href='logout.php'"><h1>LOGOUT</h1></button><br>
    
    </div>
</body>
</html>
