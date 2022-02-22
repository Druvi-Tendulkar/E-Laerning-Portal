<?php

session_start();

if(isset($_POST['mysql']))
{
    $course = $_POST['mysql'];
}

if(isset($_POST['c']))
{
    $course = $_POST['c'];
}

if(isset($_POST['cpp']))
{
    $course = $_POST['cpp'];
}

if(isset($_POST['os']))
{
    $course = $_POST['os'];
}

if(isset($_POST['java']))
{
    $course = $_POST['java'];
}

if(isset($_POST['python']))
{
    $course = $_POST['python'];
}

if(isset($_POST['ds']))
{
    $course = $_POST['ds'];
}

if(isset($_POST['ai']))
{
    $course = $_POST['ai'];
}

if(isset($_POST['wt']))
{
    $course = $_POST['wt'];
}

if(isset($_POST['nn']))
{
    $course = $_POST['nn'];
}

$_SESSION['course']= $course;
// echo $course;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECTED COURSE</title>

    <style>
        body{
            font-size: 25px;
            color: white;
            text-shadow: 0 0 10px black, 0 0 10px black;
            /* font-weight: bold; */
        }
        .header{
            text-align: center;
            font-size: 50px; 
            background-color: white;
            width: 100%;
            /* padding-right: 200px; */
            padding-left: 5px; 
            padding-top: 15px; 
            padding-bottom: 15px; 

            margin-top: 45px;

        }
        #navbar{
            /* z-index: 9; */
            background-color: black;
            text-align: center;
            position: fixed;
            width: 100%;
            padding: 5px;
            margin-left: 0px;
            top: 0;
            padding: 8px;
            margin-top: 1px;
        }
        h2{
            text-decoration: underline;
        }
        
        a{
            color: white;
            padding: 40px;
            text-decoration: none;
        }
        a:hover, a:focus, a:active{
            text-decoration: underline;
        }

        /* a:hover, a:focus, a:active{
            text-decoration: underline;
        } */

        #desc, #video, #pcourse, #textbk{
            margin-top: 0px;
        }
        /* #desc{
            display:block;
            margin-top: -20px;
            content: " ";
            height: 25px;
            visibility: hidden;
        } */
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
            margin-left: 35%;
            
        }
        button:hover
        {
            background-color: black;
            border: 4px solid #ffffff;
            color: white;
            width: 360px;
            height: 82px;
        }
        .s{
            color:black;
            text-shadow: 0 0 0 black;
        }
        #desc{
            background-color: rgba(39, 35, 35, 0.829);
        }
        .im{
            height: 400px;
            width: 400px;
            margin-left: 35%;
        }
    </style>
</head>

<body style="background-image:url('bg1.jpg');
	background-size: 100%; ">

    <div class="s" style:"color:black;">
    <h1 class="header"><?php
    echo $course;
    // echo $course;
    ?>
    </div>
    </h1>
    <div id="navbar">
    <nav>
        <a type="button" onclick="a()" href="#desc">CONTENT</a>
        <a type="button" href="#video">VIDEO</a> 
        <a type="button" href="#pcourse">COURSES</a>
        <a type="button" href="#textbk">TEXTBOOKS</a>
    </nav>
    </div>

    <?php
    $con = mysqli_connect("localhost:3307", "root");
    mysqli_select_db($con, 'wtproject');

    $qa="SELECT * FROM courses where course='$course'";
    // var_dump($qa);
    $query = mysqli_query($con, $qa);
    $rowcount = mysqli_num_rows($query);

    for($i=1; $i<=$rowcount; $i++)
    {
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
    ?>

    <div id="desc">
        <h2>COURSE: <?php echo $course ?></h2>
    <?php echo $row["c_desc"] ?>
       
          </div>

    <div id="video">
    <h2>VIDEO LINK</h2>
    <image src="vid_icon.png" class="im"><br>
    <button class="GFG" onclick="location.href='<?php echo $row['video'] ?>'" ><h1>WATCH NOW</h1></button>

    
    </div>

    <div id="pcourse">
        <h2>COURSE LINK</h2>
        <image src="c_icon.png" class="im"><br>
        <button class="GFG" onclick="location.href='<?php echo $row['c_link'] ?>'"><h1>WATCH NOW</h1></button>
    </div>

    <div id="textbk">
    <h2>TEXTBOOK LINK</h2>
    <image src="b_icon.png" class="im"><br>
    <button class="GFG" onclick="location.href='<?php echo $row['textbook'] ?>'"><h1>WATCH NOW</h1></button>

        
    </div>

    <?php
    }
    ?>
</body>
</html>



<!-- CREATE TABLE courses(id INT(20) PRIMARY KEY AUTO_INCREMENT, course VARCHAR(50) NOT NULL, c_desc VARCHAR(700) NOT NULL, video VARCHAR(60), c_link VARCHAR(60), textbook VARCHAR(60)); -->