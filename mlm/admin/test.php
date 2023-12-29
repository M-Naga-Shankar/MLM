<?php
include("includes/config.php");

$uid="ADITYA00003";
$check=1;
 while($uid!="ADMIN"){
   $h=mysqli_query($conn,"select * from user where userId='$uid'");		
      
     
   while($j=mysqli_fetch_array($h))
   {
      $refer= $j['referId'];
      $elevel=$j['level'];
      $earned=$j['earning'];
      if($elevel==1){
         $ecom=1150;
      }
      if($elevel==2){
         $ecom=1100;
      }
      if($elevel==3){
         $ecom=1000;
      }
      if($elevel==4){
         $ecom=900;
      }
      if($elevel==5){
         $ecom=800;
      }
      if($elevel==6){
         $ecom=700;
      }
      if($elevel==7){
         $ecom=600;
      }
      if($elevel==8){
         $ecom=500;
      }
      if($elevel==9){
         $ecom=400;
      }
      if($check==1){
         $commision1=$earned+$ecom;
         $check=0;
     
      $sql=mysqli_query($conn,"UPDATE `user` SET `earning`='$commision1' WHERE userId='$uid'");
   }
      echo "id:".$uid." level:".$level." earn:".$j['earning'];
      $h=mysqli_query($conn,"select * from user where userId='$refer'");		
      
   
      while($j=mysqli_fetch_array($h))
      {
        
      $level=$j['level'];
      $earning=$j['earning'];
      $level= substr($level,0,1);
      if($level==1){
         $com=1150;
      }
      if($level==2){
         $com=1100;
      }
      if($level==3){
         $com=1000;
      }
      if($level==4){
         $com=900;
      }
      if($level==5){
         $com=800;
      }
      if($level==6){
         $com=700;
      }
      if($level==7){
         $com=600;
      }
      if($level==8){
         $com=500;
      }
      if($level==9){
         $com=400;
      }
      
      }
      if($check==1){
      $commision=$earning+$com;
      $check=0;
   }
   else{
      $commision=$earning+$com-$ecom;
   }
   if(!empty($refer)){	
     
    echo "<p style=\"color:black; \" ".$refer;	
    echo " : ".$level." : ".$earning."<br>";	
    
  }
      $sql=mysqli_query($conn,"UPDATE `user` SET `earning`='$commision' WHERE userId='$refer'");
   }
  

$uid=$refer;
 }
    
?>
