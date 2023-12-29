<?php 
session_start();
if(!isset($_SESSION['aid']))
{
  header("location:../index.php");
}
$active=6;
$status=11;
include("includes/config.php");
date_default_timezone_set("Asia/Kolkata");
						$date=date('d/m/y');
            $h=mysqli_query($conn,"select  * from admin");
            while($j=mysqli_fetch_array($h))
            {
              $adminId=$j['adminId'];
              $password=$j['password'];
            }
        
            if(!empty($_POST))
            {
              
              $adminId=$_POST['adminId'];
              $password=$_POST['password'];
              $sql=mysqli_query($conn,"UPDATE `admin` SET `adminId`='$adminId',`password`='$password'");
              if($sql==true)
              {
                $status=1;
                $h=mysqli_query($conn,"select  * from admin");
            while($j=mysqli_fetch_array($h))
            {
              $adminId=$j['adminId'];
              $password=$j['password'];
            }
        
             
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

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>MLM</title>
	<style>
.wrapper,
.wrapper .img-area,
.social-icons a,
.buttons button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #000000,
               3px 3px 5px #ceced1;
}
.wrapper{
  position: relative;
  width: 350px;
  padding: 30px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-image: url('img/8.jpg');
	background-repeat: no-repeat;
	background-size: cover;
}
.wrapper .icon{
  font-size: 17px;
  color: #31344b;
  position: absolute;
  cursor: pointer;
  opacity: 0.7;
  top: 15px;
  height: 35px;
  width: 35px;
  text-align: center;
  line-height: 35px;
  border-radius: 50%;
  font-size: 16px;
}
.wrapper .icon i{
  position: relative;
  z-index: 9;
}
.wrapper .icon.arrow{
  left: 15px;
}
.wrapper .icon.dots{
  right: 15px;
}
.wrapper .img-area{
  height: 150px;
  width: 150px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.img-area .inner-area{
  height: calc(100% - 25px);
  width: calc(100% - 25px);
  border-radius: 50%;
}
.inner-area img{
  height: 100%;
  width: 100%;
  border-radius: 50%;
  object-fit: cover;
}
.wrapper .name{
  font-size: 23px;
  font-weight: 500;
  color: #31344b;
  margin: 10px 0 5px 0;
}
.wrapper .about{
  color: #44476a;
  font-weight: 400;
  font-size: 16px;
}
.wrapper .social-icons{
  margin: 15px 0 25px 0;
}
.social-icons a{
  position: relative;
  height: 40px;
  width: 40px;
  margin: 0 5px;
  display: inline-flex;
  text-decoration: none;
  border-radius: 50%;
}
.social-icons a:hover::before,
.wrapper .icon:hover::before,
.buttons button:hover:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  border-radius: 50%;
  background: #ecf0f3;
  box-shadow: inset -3px -3px 7px #ffffff,
              inset 3px 3px 5px #ceced1;
}
.buttons button:hover:before{
  z-index: -1;
  border-radius: 5px;
}
.social-icons a i{
  position: relative;
  z-index: 3;
  text-align: center;
  width: 100%;
  height: 100%;
  line-height: 40px;
}
.social-icons a.fb i{
  color: #4267B2;
}
.social-icons a.twitter i{
  color: #1DA1F2;
}
.social-icons a.insta i{
  color: #E1306C;
}
.social-icons a.yt i{
  color: #ff0000;
}
.wrapper .buttons{
  display: flex;
  width: 100%;
  justify-content: space-between;
}
.buttons button{
  position: relative;
  width: 100%;
  border: none;
  outline: none;
  padding: 12px 0;
  color: #31344b;
  font-size: 17px;
  font-weight: 400;
  border-radius: 5px;
  cursor: pointer;
  z-index: 4;
}
.buttons button:first-child{
  margin-right: 10px;
}
.buttons button:last-child{
  margin-left: 10px;
}
.wrapper .social-share{
  display: flex;
  width: 100%;
  margin-top: 30px;
  padding: 0 5px;
  justify-content: space-between;
}
.social-share .row{
  color: #31344b;
  font-size: 17px;
  cursor: pointer;
  position: relative;
}
.social-share .row::before{
  position: absolute;
  content: "";
  height: 100%;
  width: 2px;
  background: #e0e6eb;
  margin-left: -25px;
}
.row:first-child::before{
  background: none;
}
.social-share .row i.icon-2{
  position: absolute;
  left: 0;
  top: 50%;
  color: #31344b;
  transform: translateY(-50%);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s ease;
}
.row:nth-child(1):hover i.fa-heart,
.row:nth-child(2):hover i.fa-comment{
  opacity: 1;
  pointer-events: auto;
}
	</style>
  	<style>
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');


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
	<?php include 'includes/header.php' ?>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
    <?php include('includes/nav.php'); ?>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
    <?php 	$fetchData=mysqli_query($conn,"SELECT * FROM admin");	
        while($j=mysqli_fetch_array($fetchData))
        {
          $userName=$j['adminId'];
          
        }
        ?>
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
  <text x="34%" y="50%" dy=".40em" text-anchor="middle">
  Profile
  </text>
</svg> 
					<ul class="breadcrumb">
						<li>
							<a href="#">Profile</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

      <div class="wrapper" style="margin-top:30px;">
    <div class="img-area">
      <div class="inner-area">
      <img src="uploads/ADITYAKKD00001.png" alt="">
      </div>
    </div>
    <div class="icon arrow"><i class="fas fa-arrow-left"></i></div>
    <div class="icon dots"><i class="fas fa-ellipsis-v"></i></div>
    <div class="name"><?php echo "SRI ADITYA"; ?></div>
    <div class="about">Admin</div>  

    <div class="social-share">
      <div class="row">

	  <Center>
	  <span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM user where date='$date'");	
					$totalPosts=mysqli_num_rows($result);
					if(empty($totalPosts)){
						$totalPosts=0;
					}
						 echo "".$totalPosts; ?> </h3>
						 </span>
        <i class="fas fa-user-plus"></i>    <span>New Usezrs</span>
		</Center>
      </div>
      <div class="row">
   
					<span class="text">
            <center>
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM user");	
					$totalPosts=mysqli_num_rows($result);
					if(empty($totalPosts)){
						$totalPosts=0;
					}
						 echo "".$totalPosts; ?> </h3> <i class="fas fa-users"></i> <span>
						Total Users</span>

					</span>
        </span>
        
      </div>
    </div>
    <br>
    <div class="buttons">
  
  <span class="text"  style="background:#ffff;">
      <div class="center"  style="background:#ffff;">				
     
     <input type="checkbox" id="show"  style="background:#ffff;">
     <label for="show" style="margin-left:30%; margin-top:2%; padding:10px; width:100px; height:50px;   text-align: center;" class="show-btn">Edit</label> <?php if($status==1){ ?>  <label class="show-btn" style="margin-left:50px; margin-top:80px; background:#00D100; color:white;"> Successfully Edited </label> <?php } elseif($status==0){ ?> <label class="show-btn" style="margin-left:50px; margin-top:80px; background:rgba(255,0,4,1.00); color:white;">Edit UnSuccessful </label><?php } ?>
     <div class="container" style="background:#ffff;">
        <label for="show" class="close-btn fas fa-times" title="close"></label>
      
        <form action="" METHOD="POST">
           
    
     <div class="data">
              <label>Admin ID</label>
              <input type="text" name="adminId" required value=<?php echo "".$adminId; ?>>
           </div>
           <div class="data">
              <label>PassWord</label>
              <input type="text" name="password" required value=<?php echo "".$password; ?>>
           </div>
           <div class="btn">
              <div class="inner"></div>
              <button type="submit" style="margin-top:5px; background:#00D100;">Save</button>
           </div>
        </form>
</div>
  </div>
  <br>
  <br>
  <br>
  <br>

  <br>
        <p></p>
      </span>
</div>
        </div>
  </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>
<!-- wabili2205@saeoil.com
Mvr@001 -->