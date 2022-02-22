<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header{
            color: white;
            text-align: left;
            font-size: 18px;
            background-color: black;
            margin-top: 0%;
            margin-bottom: 5%;
            margin-left: 0%;
            margin-right: 0%;
            padding-top: 10px;
            padding-bottom: 5px; 
            padding-left: 40px; 

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
            width: 350px;
            height: 80px;
            margin-bottom: 50px;
            margin-left: 4%;
            
        }
        input[type=submit]:hover
        {
            background-color: black;
            border: 4px solid #ffffff;
            color: white;
            width: 360px;
            height: 82px;
        }
    </style>
    
</head>
<body style="background-image:url('bg1.jpg');
background-repeat: no-repeat;
	background-size:100%">
    <div class="header">
    <h1>COURSES</h1>
    </div>

    <form method="post" action="course.php">
        <input type="submit" name="mysql" value="MYSQL">
        <input type="submit" name="c" value="C PROGRAMMING">
        <input type="submit" name="cpp" value="C++ PROGRAMMING">
        <input type="submit" name="os" value="OPERATING SYSTEMS">
        <input type="submit" name="java" value="JAVA PROGRAMMING">
        <input type="submit" name="python" value="PYTHON PROGRAMMING">
        <input type="submit" name="ds" value="DATA SCIENCE">
        <input type="submit" name="ai" value="ARTIFICIAL INTELLIGENCE">
        <input type="submit" name="wt" value="WEB TECHNOLOGY">
        <!-- <input type="submit" name="nn" value="NEURAL NETWORKS"> -->
    </form>
</body>
</html>