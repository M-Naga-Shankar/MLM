<?php 
session_start();
include("includes/config.php");
$active=2;
$status=11;
$uid=$_SESSION['uid'];
if(!empty($_POST))
{
	$date=date('d/m/y');
    date_default_timezone_set("Asia/Kolkata");
 
                  date_default_timezone_get();
                $time=date('h:i:s'); 
	$refer=$uid;
	$userId=$_POST['userId'];
	$userName=$_POST['userName'];
	$phone=$_POST['phone'];
	$pincode=$_POST['pincode'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql=mysqli_query($conn,"INSERT INTO `user`(`date`, `time`, `referId`, `userId`, `userName`, `phone`, `pincode`, `email`, `pasword`) VALUES ('$date','$time','$refer','$userId','$userName','$phone','$pincode','$email','$password')");
	if($sql==true)
	{
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>MLM</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

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
  font-size: 28px;
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
  <text x="30%" y="50%" dy=".35em" text-anchor="middle">
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
    <!--     <label for="show" class="show-btn">Add User</label> <?php if($status==1){ ?>  <label class="show-btn" style="margin-left:150px; background:#00D100; color:white;"> Added Successfully </label> <?php } elseif($status==0){ ?> <label class="show-btn" style="margin-left:150px; background:rgba(255,0,4,1.00); color:white;">Adding UnSuccessful </label><?php } ?>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <form action="" METHOD="POST">
               <div class="data">
                  <label  >User ID</label>
                  <input type="text" name="userId" readonly required value=<?php echo "".uniqid("AD"); ?> >
               </div>
			   <div class="data">
                  <label>User Name</label>
                  <input type="text" name="userName" required>
               </div>
			   <div class="data">
                  <label>Phone</label>
                  <input type="text" name="phone" required>
               </div>
			   <div class="data">
                  <label>Pincode</label>
                  <input type="text" name="pincode" required>
               </div>
               <div class="data">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="optional">
               </div>
			   <div class="data">
                  <label>Password</label>
                  <input type="password" name="password" required>
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
				</li> -->
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM user where referId='$uid'");	
					$totalPosts=mysqli_num_rows($result);
					if(empty($totalPosts)){
						$totalPosts=0;
					}
						 echo "".$totalPosts; ?> </h3>
						<p>Total Users</p>
					</span>
				</li>
			
			</ul>


			<div class="table-data" style=" overflow: scroll; max-height:40%; ">
				<div class="order">
					<div class="head">
						<h3>Total Users</h3>
					<form action="" method="GET">	<input type="text" name="search" style="height:30px; width:150px; border-radius:10px; font-size:20px; padding:5px;" placeholder="Search Id" > <BUTTON type="submit" style="background:transparent;  border:none; padding:5px; height: 30px;"><i style="font-size:30px;" class='bx bx-search' ></button></i>
					
					</div>
					<table >
						<thead>
							<tr>
								
								<th>User ID</th>
								<th>User Name</th>
								<th>Phone </th>
							
							</tr>
						</thead>
						<tbody><?php
						date_default_timezone_set("Asia/Kolkata");
						$date=date('d/m/y');
						
						$h=mysqli_query($conn,"SELECT * FROM user where referId='$uid' ORDER BY date DESC,time DESC;");
						if(!empty($_GET)){
							$search=$_GET['search'];
							if(!empty($search)){
							$h=mysqli_query($conn,"select  * from user where userId='$search' and referId='$uid'");
						}
						}
						    
	while($j=mysqli_fetch_array($h))
	{
       
		?>
        <tr>
                  
                    <td><?php echo $j['userId'];?></td>
        <td><?php echo $j['userName'];?></td>
        <td><?php echo $j['phone'];?></td>
    
        </tr>
     <?php 
   
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
