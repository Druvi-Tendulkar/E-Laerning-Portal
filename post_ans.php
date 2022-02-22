<?php

session_start();

$con = mysqli_connect('localhost:3307', 'root');

mysqli_select_db($con, 'wtproject');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit</title>
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
        .GFG {
            background-color: white;
            border: 4px solid black;
            border-radius: 20px;
            color: black;
            /* padding: 10px 30px; */
            text-align: center;
            display: inline-block;
            font-size: 15px;
            margin: 60px 30px;
            cursor: pointer;
            width: 250px;
            height: 80px;
            margin-bottom: 30px;
            
            }
            button:hover
        {
            background-color: black;
            border: 4px solid #ffffff;
            color: white;
            width: 260px;
            height: 82px;
        }
        h1{
            color: black;
        }
    </style>

</head>
<body style="background-image:url('bg1.jpg');
	background-size:100%">
  <div>
      <br>
     <h2 style="font-size:40px;"> QUIZ SCORE</h2>
     <br>
   <table border="2">
       <tr>
           <th colspan="2" > <h2 > Results </h2></th>
           
       </tr>
       <tr>
               <td>
                   Questions Attempted
               </td>

          <?php
      $counter = 0;
      $Resultans = 0;
         if(isset($_POST['submit'])){
         if(!empty($_POST['quizcheck'])) {
         // Counting number of checked checkboxes.
         $checked_count = count($_POST['quizcheck']);
         // print_r($_POST);
         ?>

         <td>
         <?php
         echo "Out of 5, You have attempt ".$checked_count." option."; ?>
         </td>
     
           
         <?php
         // Loop to store and display values of individual checked checkbox.
         $selected = $_POST['quizcheck'];
         
         $q1= " select ans_id from questions ";
         $ansresults = mysqli_query($con,$q1);
         $i = 1;
         while($rows = mysqli_fetch_array($ansresults)) { 
             $flag = $rows['ans_id'] == $selected[$i];
             
                     if($flag){	
                        //  $counter++;
                         $Resultans++;
                     }			
                 $i++;		
             }
             ?>
             
         
         <tr>
             <td>
                 Your Total score
             </td>
             <td colspan="2">
         <?php 
             echo " Your score is ". $Resultans.".";
             }
             else{
             echo "<b>Please Select Atleast One Option.</b>";
             }
             } 
           ?>
           </td>
         </tr>

         <?php 

         $name = $_SESSION['username'];
         $finalresult = " insert into results(username,totalques, answerscorrect) values ('$name','5','$Resultans') ";
         $queryresult= mysqli_query($con,$finalresult); 
         // if($queryresult){
         // 	echo "successssss";
         // }
         ?>


   </table>

       <button class="GFG" onclick="location.href='logout.php'"><h1> LOGOUT</h1> </button>
   </div>
</body>
</html>
