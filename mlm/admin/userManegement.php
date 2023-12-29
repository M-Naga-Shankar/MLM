<?php 
session_start();
if(!isset($_SESSION['aid']))
{
  header("location:../index.php");
}
include("includes/config.php");
$active=3;
$status=11;

if(!empty($_POST))
{
	$date=date('d/m/y');
    date_default_timezone_set("Asia/Kolkata");
 
                  date_default_timezone_get();
                $time=date('h:i:s'); 
                $sl_num=$_POST['sl_num'];
                $level=$_POST['level'];
  $adhar=$_POST['adhar'];
	$refer=$_POST['refer'];
	$userId=$_POST['userId'];
	$userName=$_POST['userName'];
  $gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$pincode=$_POST['pincode'];
	$email=$_POST['email'];
    $bankname=$_POST['bankName'];
	$ifsc=$_POST['ifscCode'];
	$accnum=$_POST['accNumber'];
	$password=$_POST['password'];
	$pre=substr($userId,0,6);
	$suf=substr($userId,6,10);
	$branch=substr($pincode,0);
	
	if($branch==1||$branch==2){
	$userId=$pre."KKD".$suf;
	}
	if($branch==3){
	$userId=$pre."RJY".$suf;
	}
	if($branch==4){
	$userId=$pre."VSP".$suf;
	}
	if($branch==5){
	$userId=$pre."VZM".$suf;
	}
	if($branch==6){
	$userId=$pre."SKL".$suf;
	}
	if($branch==7){
	$userId=$pre."HYD".$suf;
	}
	

  if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    // Specify the destination directory to save the uploaded file
    $targetDirectory = 'uploads/';
    $targetFile = $targetDirectory . basename($userId.".png");

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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=1200" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>MLM</title>
	<style>
		
.show-btn{
  background: #fff;
  padding: 10px 20px;
  font-size: 20px;
  font-weight: 500;
  
  cursor: pointer;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
.show-btn, .container{
	background: #fff;
  padding: 10px 20px;
  font-size: 20px;
  font-weight: 500;
 
  cursor: pointer;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
.show-btn, .container{
  position: absolute;
	margin-top:-20px;
}
input[type="checkbox"]{
  display: none;
}
.container{
  display: none;
  background: #fff;
  width: 410px;
  padding: 30px;
  box-shadow: 0 0 8px rgba(0,0,0,0.1);
}
#show:checked ~ .container{
  display: block;
}
.container .close-btn{
  position: absolute;
  right: 20px;
  top: 15px;
  font-size: 18px;
  cursor: pointer;
}
.container .close-btn:hover{
  color: #3498db;
}
.container .text{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
}
.container form{
  margin-top: -20px;
}
.container form .data{
  height: 45px;
  width: 100%;
  margin: 40px 0;
}
form .data label{
  font-size: 18px;
}
form .data input{
  height: 100%;
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  border: 1px solid silver;
}
form .data input:focus{
  border-color: #3498db;
  border-bottom-width: 2px;
}
form .forgot-pass{
  margin-top: -8px;
}
form .forgot-pass a{
  color: #3498db;
  text-decoration: none;
}
form .forgot-pass a:hover{
  text-decoration: underline;
}
form .btn{
  margin: 30px 0;
  height: 45px;
  width: 100%;
  position: relative;
  overflow: hidden;
}
form .btn .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  z-index: -1;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  transition: all 0.4s;
}
form .btn:hover .inner{
  left: 0;
}
form .btn button{
  height: 100%;
  width: 100%;
  background: none;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
}
form .signup-link{
  text-align: center;
}
form .signup-link a{
  color: #3498db;
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
}
	</style>
</head>
<body>


	<!-- SIDEBAR -->
<?php include 'includes/header.php'; ?>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<?php include('includes/nav.php'); ?>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
        <style>
						svg {
  font-family: 'Russo One', sans-serif;
height:50px;
width:500px;
padding:0;
}
svg text {
  text-transform: uppercase;
  animation: stroke 5s infinite alternate;
  stroke-width: 2;
  stroke: #ffffff;
  font-size: 40px;
  letter-spacing: 4px;
}
@keyframes stroke {
  0%   {
    fill: rgba(72,138,20,0); stroke: #A020F0;
    stroke-dashoffset: 25%; stroke-dasharray: 0 50%; stroke-width: 2;
  }
  70%  {fill: rgba(72,138,20,0); stroke:#A020F0; }
  80%  {fill: rgba(72,138,20,0); stroke:#A020F0; stroke-width: 3; }
  100% {
    fill: #A020F0; stroke: #A020F0; 
    stroke-dashoffset: -25%; stroke-dasharray: 50% 0; stroke-width: 0;
  }
}
						</style>
				<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

<svg >
  <text x="44%" y="50%" dy=".35em" text-anchor="middle">
  User Manegment
  </text>
</svg> 
					<ul class="breadcrumb">
						<li>
							<a href="#">User Manegment</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-user-plus' ></i>
					<span class="text">
					<div class="center">				
         <input type="checkbox" id="show">
         <label for="show" class="show-btn">Add User</label> <?php if($status==1){ ?>  <label class="show-btn" style="margin-left:150px; background:#00D100; color:white;"> Added Successfully </label> <?php } elseif($status==0){ ?> <label class="show-btn" style="margin-left:150px; background:rgba(255,0,4,1.00); color:white;">Adding UnSuccessful </label><?php } ?>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <form action="" METHOD="POST" enctype="multipart/form-data">
              <div class="data">
                  <label>Refer Id</label>
                    <select name="refer" style="height:inherit; width:inherit; font-size:15px;">
                    	<?php
					
						$h=mysqli_query($conn,"select  * from user  ORDER BY sl_no");					
					
						    
	while($j=mysqli_fetch_array($h))
	{
       
		?>
    <option ><?php echo "".$j['userId']; ?></option>
  <?php  } ?>
  </select>
             <?php 
           $sl_id=mysqli_query($conn,"select * from user");					
					
						    
           while($j=mysqli_fetch_array($sl_id))
           {
              $sl_no=$j['sl_no'];
           }
           $sl_num1=$sl_no+1;
             
             $len= strlen($sl_no);
              for ($x = 0; $x <5-$len; $x++) {
                 $id.="0";
                }
                $sl_ids=$id.$sl_num1;
                 ?>

               </div>
              <div class="data">
                  <label>Adhar Number</label>
                  <input type="text"  min="0" name="adhar" max="12" placeholder="xxxx-xxxx-xxxx" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" required>
               </div>
              
                  <input type="hidden"  name="sl_num" value="<?php echo $sl_num1; ?>">
               
               <div class="data">
                
                  <label>User ID</label>
                  <input type="text" name="userId" value="<?php echo "ADITYA".$sl_ids; ?>" required readonly>
               </div>
			   <div class="data">
         <label>Designation</label>
                    <select name="level" style="height:inherit; width:inherit; font-size:15px;">
                    <option style="height:inherit; width:inherit; font-size:15px;">1_Royal_Director</option>
                    <option style="height:inherit; width:inherit; font-size:15px;">2_Marketing_Director</option>
    <option style="height:inherit; width:inherit; font-size:15px;">3_President</option>
    <option style="height:inherit; width:inherit; font-size:15px;">4_Vice_President</option>
    <option style="height:inherit; width:inherit; font-size:15px;">5_General_Manager</option>
    <option style="height:inherit; width:inherit; font-size:15px;">6_Assistant_General_Manager</option>
    <option style="height:inherit; width:inherit; font-size:15px;">7_Marketing_Manager</option>
        
  </select>
              </div>
              <div class="data">
                  <label>User Name</label>
                  <input type="text" name="userName" required>
               </div>
               <div class="data">
                  <label>Gender</label>
                  <select name="gender" style="height:inherit; width:inherit; font-size:15px;">
                    <option style="height:inherit; width:inherit; font-size:15px;">Male</option>
                    <option style="height:inherit; width:inherit; font-size:15px;">Female</option>
        
  </select>
               </div>
			   <div class="data">
                  <label>Phone</label>
                  <input type="text" name="phone" max="12" placeholder="" pattern="[0-9]{10}"required>
               </div>
			   <div class="data">
                  <label>Branch</label>
                  <select name="pincode" style="height:inherit; width:inherit; font-size:15px;">
                    <option style="height:inherit; width:inherit; font-size:15px;">1_Kakinada</option>
                    <option style="height:inherit; width:inherit; font-size:15px;">2_Kakinada</option>
    <option style="height:inherit; width:inherit; font-size:15px;">3_Rajahmundry</option>
    <option style="height:inherit; width:inherit; font-size:15px;">4_Visakhapatnam</option>
    <option style="height:inherit; width:inherit; font-size:15px;">5_Vizianagaram</option>
    <option style="height:inherit; width:inherit; font-size:15px;">6_Srikakulam</option>
    <option style="height:inherit; width:inherit; font-size:15px;">7_Hyderabad</option>
        
  </select>
               </div>
               <div class="data">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="optional">
               </div>
               <div class="data">
                  <label>Photo</label>
                  <center>
                  <input type="file" style="" name="photo" required></center>
               </div>
              
			
                 <div class="data">
                  <label>Bank Name</label>
                  <input type="text" name="bankName"  placeholder="optional">
               </div>
                 <div class="data">
                  <label>Ifsc Code</label>
                  <input type="text" name="ifscCode"  placeholder="optional">
               </div>
                  <div class="data">
                  <label>Account Number</label>
                  <input type="text" name="accNumber"  placeholder="optional">
               </div>
                 <div class="data">
                  <label>Password</label>
                  <input type="password" name="password" required>
               </div>
               <div class="data">
                  <label>Term & Conditions</label>
                  <input type="checkbox" value="nono" name="tc">
               </div>
               <div class="btn">
                  <div class="inner"></div>
                  <button type="submit" style="margin-top:5px; background:#00D100;">Save</button>
               </div>
            </form>
</div>
      </div>
		
						<p></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM user");	
					$totalPosts=mysqli_num_rows($result);
					if(empty($totalPosts)){
						$totalPosts=0;
					}
						 echo "".$totalPosts; ?> </h3>
						<p>Total Users</p>
					</span>
				</li>
			
			</ul>


			<div class="table-data" style=" overflow: scroll; max-height:450px; ">
				<div class="order">
					<div class="head">
						<h3>Total Users</h3>
					<form action="" method="GET">	<input type="text" name="search" style="height:30px; border-radius:10px; font-size:20px; padding:5px;" placeholder="search by Id" > <BUTTON type="submit" style="background:transparent;  border:none; padding:5px; height: 30px;"><i style="font-size:30px;" class='bx bx-search' ></button></i>
					
					</div>
					<table >
						<thead>
							<tr>
								<th>Refer ID</th>
								<th>User ID</th>
                <th>Level</th>
                <th>Adhar</th>
								<th>User Name</th>
								<th>Phone </th>
                <th>Location </th>
								<th>Details</th>
							</tr>
						</thead>
						<tbody><?php
						date_default_timezone_set("Asia/Kolkata");
						$date=date('d/m/y');
						
						$h=mysqli_query($conn,"select  * from user ORDER BY sl_no ASC ");
						if(!empty($_GET)){
							$search=$_GET['search'];
						if(!empty($search)){
						    	 $result=mysqli_query($conn,"SELECT * FROM user where sl_no='$search'");	
					
		
      	while($j=mysqli_fetch_array($result))
	{
	    $uid=$j['userId'];
    }
							
							$fi=mysqli_query($conn,"select  * from user where userId='$uid'");
              while($j=mysqli_fetch_array($fi))
	{
       
		?>
        <tr>
                    <td><?php echo $j['referId'];?></td>
                    <td><?php echo $j['userId'];?></td>
                    <td><?php echo $j['level'];?></td>
                    <td><?php echo $j['adhar'];?></td>
        <td><?php echo $j['userName'];?></td>
        <td><?php echo $j['phone'];?></td>
        <td><?php echo $j['pincode'];?></td>
    <td><a href="client_msg.php?uid=<?php echo $j['userId'];?>" onClick="return confirm('Are you sure?')" style="text-decoration:none;font-size:15px;color:white; background:#00D100; padding:8px; border-radius:5px;">All Details</a></td> 
        </tr>
        </tr>
     <?php 
   
 }
            function team($uid,$conn){
   
              $h=mysqli_query($conn,"SELECT * FROM user where referId='$uid'");	
  
              $total=mysqli_num_rows($h);
                 
                  
                    if(empty($total)){
                  
                     
                        return  $GLOBALS['count1'];
                    }
                    else{
                        while($j=mysqli_fetch_array($h))
                        {
                          ?>
                          <tr>
                          <td><?php echo $j['referId'];?></td>
                          <td><?php echo $j['userId'];?></td>
                          <td><?php echo $j['level'];?></td>
                          <td><?php echo $j['adhar'];?></td>
              <td><?php echo $j['userName'];?></td>
              <td><?php echo $j['phone'];?></td>
              <td><?php echo $j['pincode'];?></td>
          <td><a href="client_msg.php?uid=<?php echo $j['userId'];?>" onClick="return confirm('Are you sure?')" style="text-decoration:none;font-size:15px;color:white; background:#00D100; padding:8px; border-radius:5px;">All Details</a></td> 
              </tr>
              </tr>
           <?php 
                           $memberId= $j['userId'];
                       
                           $GLOBALS['count1']= $GLOBALS['count1']+1;            
                           $GLOBALS['count3']=team($memberId,$conn);
             
                  
                }
                        }
                    
                }
             
                $count1= team($search,$conn);
                echo "".$count3;}
						}else{
						    
	while($j=mysqli_fetch_array($h))
	{
       
		?>
        <tr>
                    <td><?php echo $j['referId'];?></td>
                    <td><?php echo $j['userId'];?></td>
                    <td><?php echo $j['level'];?></td>
                    <td><?php echo $j['adhar'];?></td>
        <td><?php echo $j['userName'];?></td>
        <td><?php echo $j['phone'];?></td>
        <td><?php echo $j['pincode'];?></td>
    <td><a href="client_msg.php?uid=<?php echo $j['userId'];?>" onClick="return confirm('Are you sure?')" style="text-decoration:none;font-size:15px;color:white; background:#00D100; padding:8px; border-radius:5px;">All Details</a></td> 
        </tr>
        </tr>
     <?php 
   
 }
}
 ?>					
						</tbody>
					</table>
				</div>
				
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>
