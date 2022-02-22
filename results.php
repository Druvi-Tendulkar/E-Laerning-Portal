<?php
session_start();
// require 'add_proj.php';
// session_register_('username');
$con = mysqli_connect("localhost:3307", "root");
mysqli_select_db($con, 'wtproject');

$user = $_SESSION['username'];
$qa="SELECT * FROM results WHERE username = '$user' ";
$query = mysqli_query($con, $qa);
$rowcount = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW RESULTS</title>
    <style>
        *{
            /* background-color: black; */
            color: white;
            text-align: center;
            font-weight: bold;
        }
        table{
            margin-left:17%;
            width: 70%;
            border: 4px solid white;
            background-color: rgba(39, 35, 35, 0.829);
        }
        th{
            height: 40px;
            font-size: 18px;
            /* padding: 4px; */
            border: 2px solid white;
            background-color:black;
        }
        tr, td{
            height: 50px;
            text-align: center;
            font-size: 20px;
            /* padding: 4px; */
            border: 2px solid white;
        }
        .header{
            color: white;
            text-align: center;
            font-size: 35px;
            margin-top: 0%;
            margin-left: 0%;
            margin-right: 0%;
            padding-top: 10px;
            padding-bottom: 8px; 
            padding-left: 40px; 

        }
        
    </style>
</head>
<body style="background-image:url('bg1.jpg');
background-repeat: no-repeat;
	background-size:100%">
    <h1 class="header" >VIEW RESULTS</h1>
    <?php
    if($rowcount>0){
        ?>
<table border='2'>
    <tr>
        <th><h1>SR. NO.</h1></th>
        <th><h1>TOTAL QUESTIONS</h1></th>
        <th><h1>SCORE</h1></th>
    </tr>

<?php

for($i=1; $i<=$rowcount; $i++)
{
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
 
<tr>
<td><?php echo $row["uid"] ?></td>
<td><?php echo $row["totalques"] ?></td>
<td><?php echo $row["answerscorrect"] ?></td>
</tr> 

<?php
}
    }
else{
    echo "NO PROJECTS ADDED YET!!";
}
?>



</table>
</body>
</html>
