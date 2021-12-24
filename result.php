<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>勝活</title>
<link rel="stylesheet" href="./reset.css">
<link rel="stylesheet" href="./result.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
</head>
<body>
<h1><span>お疲れ様でした</span></h1>
<div class="result">

        <h2>①</h2>     
       <?php


         $nam1 = $_POST['nam1'];
         $nam2 = $_POST['nam2'];
         $nam3 = $_POST['nam3'];
         $nam4 = $_POST['nam4'];
         $nam5 = $_POST['nam5'];
         $nam6 = $_POST['nam6'];
         $nam7 = $_POST['nam7'];

             
              
             


       
            $add1 = $nam1 + $nam2 + $nam3 + $nam4+ $nam5 + $nam6 + $nam7;
            echo ("結果: " . $add1);
        
        ?>
        <h2>②</h2>

        <?php

          $nam8 = $_POST['nam8'];
          $nam9 = $_POST['nam9'];
          $nam10 = $_POST['nam10'];
          $nam11 = $_POST['nam11'];
          $nam12 = $_POST['nam12'];
          $nam13 = $_POST['nam13'];
          $nam14 = $_POST['nam14'];

         



          $add2 = $nam8 + $nam9 + $nam10 + $nam11 + $nam12 + $nam13 + $nam14;
          echo ("結果: " . $add2);

        

        ?>
        <h2>③</h2>
        <?php
          $nam15 = $_POST['nam15'];
          $nam16 = $_POST['nam16'];
          $nam17 = $_POST['nam17'];
          $nam18 = $_POST['nam18'];
          $nam19 = $_POST['nam19'];
          $nam20 = $_POST['nam20'];
          $nam21 = $_POST['nam21'];

          



          $add3 = $nam15 + $nam16 + $nam17 + $nam18 + $nam19 + $nam20 + $nam21;
          echo ("結果: " . $add3);

       
        ?>
        <h2>④</h2>

        <?php
          $nam22 = $_POST['nam22'];
          $nam23 = $_POST['nam23'];
          $nam24 = $_POST['nam24'];
          $nam25 = $_POST['nam25'];
          $nam26 = $_POST['nam26'];
          $nam27 = $_POST['nam27'];
          $nam28 = $_POST['nam28'];

          
          

          $add4 = $nam22 + $nam23 + $nam24 + $nam25 + $nam26 + $nam27 + $nam28;
          echo ("結果: " . $add4);

        ?>
        <form action='input.php' method='POST'>
<div class="bottun">
             <input type="submit" value="お問合せ">
            </div>
            </form>
</div>
</body>
</html>


