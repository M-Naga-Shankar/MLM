<?php
include("includes/config.php");

$uid="ADITYA00002";
$count1=1;
$count3=0;
function team($uid,$conn){

  $h=mysqli_query($conn,"SELECT * FROM user where referId='$uid'");	
  $total=mysqli_num_rows($h);
     
      	echo "".$uid;
        if(empty($total)){
          echo "stop<br>";
         
            return;
        }
        else{
            while($j=mysqli_fetch_array($h))
            {
              echo "ok";
               $memberId= $j['userId'];
           
               $GLOBALS['count1']= $GLOBALS['count1']+1;            
               team($memberId,$conn);
     echo "".$count3;
    
    }
            }
        
    }
 
   team($uid,$conn);
    echo "total : ".$count1;
?>


