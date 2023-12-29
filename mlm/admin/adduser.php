<?php 
session_start();

$conn=mysqli_connect("localhost","u925430035_shankartest","Aditya@0001","u925430035_testmlm");

       $sl_id=mysqli_query($conn,"select * from requestuser");					
					
						    
           while($j=mysqli_fetch_array($sl_id))
           {
              $sl_no=$j['rq_id'];
           }
           $rq_no=$sl_no+1;
        
if($conn==true){
    echo "ok done";
}
else{
    echo "no";
}
if(!empty($_POST))
{
	$date=date('d/m/y');
    date_default_timezone_set("Asia/Kolkata");
 
                  date_default_timezone_get();
                $time=date('h:i:s'); 
                $adhar=$_POST['adhar'];
                $level=$_POST['level'];
  
	$refer=$_POST['refer'];
	$userName=$_POST['userName'];
  $gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$branch=$_POST['branch'];
	$email=$_POST['email'];
    $bankname=$_POST['bankName'];
	$ifsc=$_POST['ifscCode'];
	$accnum=$_POST['accNumber'];
	$password=$_POST['password'];
	
#	$pre=substr($userId,0,6);
#	$suf=substr($userId,6,10);
#	$branch=substr($pincode,0);
#	
#	if($branch==1||$branch==2){
#	$userId=$pre."KKD".$suf;
#	}
#	if($branch==3){
#	$userId=$pre."RJY".$suf;
#	}
#	if($branch==4){
#	$userId=$pre."VSP".$suf;
#	}
#	if($branch==5){
#	$userId=$pre."VZM".$suf;
#	}
#	if($branch==6){
#	$userId=$pre."SKL".$suf;
#	}
#	if($branch==7){
#	$userId=$pre."HYD".$suf;
#	}
	

  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    // Specify the destination directory to save the uploaded file
    $targetDirectory = 'uploads/';
    $targetFile = $targetDirectory . basename($rq_no.".png");

    // Move the uploaded file to the destination directory
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFile)) {
        echo "The photo has been uploaded successfully.";
    } else {
        echo "Sorry, there was an error uploading the photo.";
    }
} else {
    echo "No photo was uploaded or an error occurred during the upload.";
}
 
	
	$sql=mysqli_query($conn,"INSERT INTO user (`sl_no`,`date`, `time`, `referId`, `userId`,`level`,`adhar`, `userName`, `gender`, `phone`, `pincode`, `email`,`bankName`,`ifscCode`,`accNumber`, `pasword`) VALUES ('$sl_num','$date','$time','$refer','$userId','$level','$adhar','$userName','$gender','$phone','$pincode','$email','$bankname','$ifsc','$accnum','$password')");
	$sql=mysqli_query($conn,"INSERT INTO `requestuser`(`rq_id`, `date`, `referId`, `time`, `adhar`, `level`, `userName`, `phone`, `branch`, `email`, `bankName`, `bankIfsc`, `accNum`, `password`, `status`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]')")
	if($sql==true)
	{
    
		
    $uid=$userId;
   
     $status=1;
   
	}
	else
	{
		$status=0;
	}
}

?>