<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>勝活</title>
<link rel="stylesheet" href="./reset.css">
<link rel="stylesheet" href="./keisan.css">
</head>
<body>

  
<h1><span>ようこそ</span></h1>
    <div class="naiyou">
        
        <form action='result.php' method='POST'>
        
         <input type="hidden" $nickname1="nickname1" value="<?php echo $nickname1; ?>">
         <input type="hidden" $nickname2="nickname2" value="<?php echo $nickname2; ?>">
         <input type="hidden" $nickname3="nickname3" value="<?php echo $nickname3; ?>">
         <input type="hidden" $nickname4="nickname4" value="<?php echo $nickname4; ?>">
            <div class="member">
                <h3>①</h3>

             <?php
              $nickname1=$_POST['nickname1'];
             print $nickname1;
             print '様';
             ?>

             <p><b>1戦目</b></p>
             <input type ="text" name = "nam1" ><br>
             <p><b>2戦目</b></p>
             <input type ="text" name = "nam2" ><br>
			 <p><b>3戦目</b></p>
             <input type ="text" name = "nam3" ><br>
			 <p><b>4戦目</b></p>
             <input type ="text" name = "nam4" ><br>
			 <p><b>5戦目</b></p>
             <input type ="text" name = "nam5" ><br>
             <p><b>6戦目</b></p>
             <input type ="text" name = "nam6" ><br>
			 <p><b>7戦目</b></p>
             <input type ="text" name = "nam7" ><br>
            </div>


            <div class="member">
            <h3>②</h3>
             <?php
              $nickname2=$_POST['nickname2'];
              print $nickname2;
              print '様';
             ?>
            
             <p><b>1戦目</b></p>
             <input type ="text" name = "nam8" > <br>
             <p><b>2戦目</b></p>
             <input type ="text" name = "nam9" ><br>
			 <p><b>3戦目</b></p>
             <input type ="text" name = "nam10" ><br>
			 <p><b>4戦目</b></p>
             <input type ="text" name = "nam11" ><br>
			 <p><b>5戦目</b></p>
             <input type ="text" name = "nam12" ><br>
             <p><b>6戦目</b></p>
             <input type ="text" name = "nam13" ><br>
			 <p><b>7戦目</b></p>
             <input type ="text" name = "nam14" ><br>
            </div>   

            <div class="member">
            <h3>③</h3>
             <?php
              $nickname3=$_POST['nickname3'];
              print $nickname3;
              print '様';
             ?>
            
             <p><b>1戦目</b></p>
             <input type ="text" name = "nam15" > <br>
             <p><b>2戦目</b></p>
             <input type ="text" name = "nam16"> <br>
			 <p><b>3戦目</b></p>
             <input type ="text" name = "nam17" ><br>
			 <p><b>4戦目</b></p>
             <input type ="text" name = "nam18" ><br>
			 <p><b>5戦目</b></p>
             <input type ="text" name = "nam19" ><br>
             <p><b>6戦目</b></p>
             <input type ="text" name = "nam20" ><br>
			 <p><b>7戦目</b></p>
             <input type ="text" name = "nam21" ><br>
            </div>   

            <div class="member">
            <h3>④</h3>
             <?php
              $nickname4=$_POST['nickname4'];
              print $nickname4;
              print '様';
             ?>
            
             <p><b>1戦目</b></p>
             <input type ="text" name = "nam22" ><br>
             <p><b>2戦目</b></p>
             <input type ="text" name = "nam23" ><br>
			 <p><b>3戦目</b></p>
             <input type ="text" name = "nam24" ><br>
			 <p><b>4戦目</b></p>
             <input type ="text" name = "nam25" ><br>
			 <p><b>5戦目</b></p>
             <input type ="text" name = "nam26" ><br>
             <p><b>6戦目</b></p>
             <input type ="text" name = "nam27" ><br>
			 <p><b>7戦目</b></p>
             <input type ="text" name = "nam28" ><br>
            </div>   
            <div class="bottun">
            <br><br><input type="submit" value="お疲れ様でした">
            </div>
         
       </form>
       
   </div>

</body>
</html>
