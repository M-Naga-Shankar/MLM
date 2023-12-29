<?php  
$str = "sonoo";  
$str1=md5($str);  
$str2= md5($str1);  
echo "<br>".$str;  
echo "<br>".$str1;  
echo "<br>out ".$str2."<br>";  
echo md5($str);  
if (md5($str) == "ea866df636e6d5b4b7c9ab7b596cdd4c")  
    {  
        echo "<br>Hello javatpoint";  
         exit;  
     }  
?>  