<?php 
session_start();
if(!isset($_SESSION['uid']))
{
  header("location:../index.php");
}
include("includes/config.php");
$active=3;
$status=11;
$uid=$_SESSION['uid'];
if(!empty($_POST))
{

	$date=date('d/m/y');
    date_default_timezone_set("Asia/Kolkata");
 
                  date_default_timezone_get();
                $time=date('h:i:s'); 

	$type=$_POST['title'];
	$posts=$_POST['posts'];
	$postId=uniqid("MS");
	$phone=$_POST['phone'];
  $feed=$_POST['feedback'];
	$sql=mysqli_query($conn,"INSERT INTO `posts`(`date`, `time`, `userId`,`postId`, `type`, `post`, `phone`,`feedback`) VALUES ('$date','$time','$uid','$postId','$type','$posts','$phone','$feed')");

	if($sql==true)
	{
		$status=1;
		
	}
	else
	{
		$status=0;
	
	}
}
$r=mysqli_query($conn,"SELECT COUNT(date) FROM posts where userId='$uid'");	
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
	margin-top:-35px;
}
input[type="checkbox"]{
  display: none;
}
.container{
  display: none;
  background: #fff;
  width: 350px;
  padding: 30px;
  box-shadow: 0 0 8px rgba(0,0,0,0.1);
  margin-left:-150px;
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
width:auto;
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
  70%  {fill: rgba(72,138,20,0); stroke: #A020F0; }
  80%  {fill: rgba(72,138,20,0); stroke:#A020F0; stroke-width: 3; }
  100% {
    fill: #A020F0; stroke:  #A020F0; 
    stroke-dashoffset: -25%; stroke-dasharray: 50% 0; stroke-width: 0;
  }
}
						</style>
				<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

<svg >
  <text x="42%" y="50%" dy=".40em" text-anchor="middle">
  Remender
  </text>
</svg>  
					<h1></h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Remender</a>
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
         <label  for="show" class="show-btn" style="width:150px;   ">New Remender</label> 
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <form action="" METHOD="POST">
               
			   <div class="data">
                  <label>Type</label>
                    <select name="title" style="height:inherit; width:inherit; font-size:15px;">
    <option value="New_Client">New Client</option>
    <option value="Follow_Back">Follow Back</option>
  </select>
               </div>
			   <div class="data">
                  <label>Post (Message)</label>
                  <input type="text" name="posts" required>
               </div>
<div class="data">
                  <label>Client Phone Number</label>
                  <input type="number" name="phone" placeholder="XXXXXXXXXX" pattern="[0-9]{10}" required>
               </div>
               <div class="data">
                  <label>Feedback</label>
                  <input type="text" name="feedback" required>
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
					$result=mysqli_query($conn,"SELECT * FROM posts where userId='$uid'");	
					$totalPosts=mysqli_num_rows($result);
						 echo "".$totalPosts; ?> </h3>
						<p>Total Posts</p>
					</span>
				</li>
			
			</ul>


			<div class="table-data" style=" overflow: scroll; max-height:350px; ">
				<div class="order">
					<div class="head">
						<h3>Total Remenders</h3>
					<form action="" method="GET">	<input type="text" name="Search" style="height:30px; width:150px; border-radius:10px; font-size:20px; padding:5px;" placeholder="search date" > <BUTTON type="submit" style="background:transparent;  border:none; padding:5px; height: 30px;"><i style="font-size:30px;" class='bx bx-search' ></button></i>
					
					</div>
					<table >
						<thead>
							<tr>
								
              <th style="font-size:15px; padding: 10px;">Date</th>
								<th style="font-size:15px; padding: 10px;">Type</th>
								<th style="font-size:15px; padding: 10px;">Message</th>
								<th style="font-size:15px; padding: 10px;">Phone</th>
                <th style="font-size:15px; padding: 10px;">Feedback</th>
								
								<th style="font-size:15px; padding: 10px;">Delete</th>
							</tr>
						</thead>
						<tbody><?php
						date_default_timezone_set("Asia/Kolkata");
						$date=date('d/m/y');
						
						$h=mysqli_query($conn,"select  * from posts where userId= '$uid' ");
						if(!empty($_GET)){
							$search=$_GET['search'];
							if(!empty($search)){
							$h=mysqli_query($conn,"select  * from posts where date='$search'");
						}
						}
						    
	while($j=mysqli_fetch_array($h))
	{
       
		?>
        <tr>
                  
        <td style="font-size:15px; padding:10px;"><?php echo $j['date'];?></td>
        <td style="font-size:15px;  padding:10px;"><?php echo $j['type'];?></td>
        <td style="font-size:15px;  padding:10px;"><?php echo $j['post'];?></td>
         <td style="font-size:15px; padding:10px;"><?php if(!empty($j['phone'])){ echo $j['phone']; }else{ echo "----------"; } ?></td>
         <td style="font-size:15px; padding:10px;"><?php echo $j['feedback'];?></td>
     
     
         
    <td><a href="delete.php?del1=<?php echo $j['postId'];?>" onClick="return confirm('Are you sure?')" style="text-decoration:none;font-size:15px;color:white; background: rgba(255,0,4,1.00); padding:8px; border-radius:5px;">Delete</a></td> 
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
