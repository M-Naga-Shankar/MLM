<?php 
session_start();
$status=11;
include("admin/includes/config.php");
if(!empty($_POST))
{
  $state=$_POST['state'];
	if($state==0){
    $uid=$_POST['uid'];
    $upass=$_POST['upass'];
    $sql=mysqli_query($conn,"select * from user where userId='$uid' and pasword='$upass'");
    
if(mysqli_num_rows($sql)==1){
  $_SESSION['uid']=$uid;
  header("location:user/dashboard.php");
}
else{
  $status=0;
}
  }
  if($state==1){
    $aid=$_POST['aid'];
    $aid=sha1($aid);
    $apass=$_POST['apass'];
    $apass=sha1($apass);
    $sql=mysqli_query($conn,"select * from admin where adminId='$aid' and password='$apass'");
    
if(mysqli_num_rows($sql)==1){
  $_SESSION['aid']=$aid;
  header("location:admin/dashboard.php");
}
else{
  $status=1;
  echo "error";
}
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" METHOD="POST" class="sign-in-form">
          <?php if($status==0){ ?> <label class="show-btn" style="background: #4481eb;; color:white; padding: 15px; border-radius:5px;">Incorrect User Id or Password  </label> <br><?php } ?>
            <h2 class="title">          <style>
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
  <text x="48%" y="50%" dy=".35em" text-anchor="middle">
  User Login
  </text>
</svg>  </h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
            <input type="hidden" name="state" value=0>
              <input type="text" name="uid" placeholder="User ID" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="upass" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
           
          </form>
          <form action="" METHOD="POST" class="sign-up-form" >
          <?php if($status==1){ ?> <label class="show-btn" style="background: #4481eb; color:white; padding: 15px; border-radius:5px;">Incorrect Admin Id or Password </label> <br> <?php } ?>
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
  font-size: 20px;
  letter-spacing: 4px;
}
@keyframes stroke {
  0%   {
    fill: rgba(72,138,20,0); stroke: #00FF00;
    stroke-dashoffset: 25%; stroke-dasharray: 0 50%; stroke-width: 2;
  }
  70%  {fill: rgba(72,138,20,0); stroke:#00FF00; }
  80%  {fill: rgba(72,138,20,0); stroke:#00FF00; stroke-width: 3; }
  100% {
    fill: #00FF00; stroke: #00FF00; 
    stroke-dashoffset: -25%; stroke-dasharray: 50% 0; stroke-width: 0;
  }
}
						</style>
				<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

<svg >
  <text x="48%" y="50%" dy=".35em" text-anchor="middle">
  Admin Login
  </text>
</svg>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="hidden" name="state" value=1>
              <input type="text" name="aid" placeholder="Admin ID" />
            </div>
           
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="apass" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
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
  font-size: 35px;
  letter-spacing: 4px;
}
@keyframes stroke {
  0%   {
    fill: rgba(72,138,20,0); stroke: #0000FF;
    stroke-dashoffset: 25%; stroke-dasharray: 0 50%; stroke-width: 2;
  }
  70%  {fill: rgba(72,138,20,0); stroke:#0000FF; }
  80%  {fill: rgba(72,138,20,0); stroke:#0000FF; stroke-width: 3; }
  100% {
    fill: #0000FF; stroke: #0000FF; 
    stroke-dashoffset: -25%; stroke-dasharray: 50% 0; stroke-width: 0;
  }
}
						</style>
				<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

<svg >
  <text x="48%" y="50%" dy=".35em" text-anchor="middle">
  Admin Login
  </text>
</svg>  
            <p>
             Admin have to login here...  Hey! admin tap here...
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Admin
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
         
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
  font-size: 35px;
  letter-spacing: 4px;
}
@keyframes stroke {
  0%   {
    fill: rgba(72,138,20,0); stroke: #0000FF;
    stroke-dashoffset: 25%; stroke-dasharray: 0 50%; stroke-width: 2;
  }
  70%  {fill: rgba(72,138,20,0); stroke:#0000FF; }
  80%  {fill: rgba(72,138,20,0); stroke:#0000FF; stroke-width: 3; }
  100% {
    fill: #0000FF; stroke: #0000FF; 
    stroke-dashoffset: -25%; stroke-dasharray: 50% 0; stroke-width: 0;
  }
}
						</style>
				<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

<svg >
  <text x="48%" y="50%" dy=".35em" text-anchor="middle">
  User Login
  </text>
</svg>  
            <p>
             User have to login here... Hey! User tap here... 
            </p>
            <button class="btn transparent" id="sign-in-btn">
             User
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
