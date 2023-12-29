<?php 
session_start();
if(!isset($_SESSION['aid']))
{
  header("location:../index.php");
}
$active=3;
if(!isset($_SESSION['CUID']))
{
$_SESSION['CUID']=$_GET['uid'];

}
$_SESSION['CUID1']=$_GET['uid'];
if(!empty($_SESSION['CUID1'])){
  $_SESSION['CUID']=$_SESSION['CUID1'];
}
$uid=$_SESSION['CUID'];
include("includes/config.php");
date_default_timezone_set("Asia/Kolkata");
            $date=date('d/m/y');
            $h=mysqli_query($conn,"select  * from user where userId='$uid'");
            while($j=mysqli_fetch_array($h))
            {
              $userId=$j['userId'];
              $ureferId=$j['referId'];
              $date=$j['date'];
              $password=$j['pasword'];
              $email=$j['email'];
              $userName=$j['userName'];
              $adhar=$j['adhar'];
              $level=$j['level'];
              $pincode=$j['pincode'];
              $uphone=$j['phone'];
              $ureferid=$j['referId'];
              $bank=$j['bankName'];
              $ifsc=$j['ifscCode'];
              $accnum=$j['accNumber'];
            }
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

	$email=$_POST['email'];
    $bankname=$_POST['bankName'];
	$ifsc=$_POST['ifscCode'];
	$accnum=$_POST['accNumber'];
	$password=$_POST['password'];

	

 
	$sql=mysqli_query($conn,"UPDATE `user` SET `referId`='$refer',`userId`='$userId',`adhar`='$adhar',`userName`='$userName',`phone`='$phone',`email`='$email',`pasword`='$password',`bankName`='$bankname',`ifscCode`='$ifsc',`accNumber`='$accnum' WHERE userId='$uid'");

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

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <title>MLM</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
     text-decoration: none;
}
.wrapper,
.wrapper .img-area,
.social-icons a,
.buttons button{
  background: #ecf0f3;
  box-shadow: -3px -3px 7px #ffffff,
               3px 3px 5px #ceced1;
}
.wrapper{
  position: relative;
  width: 550px;
  padding: 30px;
  border-radius: 10px;
  display: flex;
  align-items: left;
  justify-content: center;
  flex-direction: column;
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
  display:flex;
  float:left;
  font-size: 23px;
  font-weight: 500;
  color: #31344b;
  margin: 10px 0 5px 0;
}
.wrapper .about{
  color: black;
  font-weight: 500;
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
          <h1>Dashboard</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">User Management</a>
            </li>
            <li><i class='bx bx-chevron-right' ></i></li>
            <li>
              <a class="active" href="#">Client Area</a>
            </li>
          </ul>
        </div>
        
      </div>

         <div class="wrapper" id="wrapper" style="margin-top:30px;">
       
      <center>  <div class="img-area">
      
      <div class="inner-area">
      <img src="uploads/<?php echo $uid.".png"; ?>" alt="">
      </div>
     
    </div> </center>
    <div class="name"><?php echo "UserId : ".$userId; ?></div>
    <div class="about"><?php echo "ReferId : ".$ureferId; ?></div>
    <div class="about"><?php echo "Designation : ".$level; ?></div>
    <div class="about"><?php echo "Joining Date: ".$date; ?></div>
    <div class="about"><?php echo "Name : ".$userName; ?></div>
    <div class="about"><?php echo "Adhar: ".$adhar; ?></div>

    <div class="about"><?php echo "Phone : ".$uphone; ?></div>
    <div class="about"><?php echo "Pincode : ".$pincode; ?></div>
     <div class="about"><?php echo "Bank Name : ".$bank; ?></div>
      <div class="about"><?php echo "Ifsc Code : ".$ifsc; ?></div>
       <div class="about"><?php echo "Account Number : ".$accnum; ?></div>
    
    
    







    <div class="social-share">
      <div class="row">

	  <Center>
	  <span class="text">
						<h3> <i class="fa fa-rupee"></i> <?php
					$result=mysqli_query($conn,"SELECT * FROM user where userId='$uid'");	
				while(	$j=mysqli_fetch_array($result)){
         $earn= $j['earning'];
        } 
 echo "".$earn."&nbsp;"; ?> 
 <a href="paid.php?uid=<?php echo $uid;?>" onClick="return confirm('Are you sure?')" style="text-decoration:none;font-size:15px;color:black; background:#00D100; padding:5px; border-radius:5px;">Paid</a></td> </h3> 
						 </span>
          
             <i class="fa fa-rupee"></i>  <span>Earning</span>
		</Center>
      </div>
      <div class="row">
   
					<span class="text">
            <center>
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM user where referId='$uid'");	
					$totalPosts=mysqli_num_rows($result);
					if(empty($totalPosts)){
						$totalPosts=0;
					}
						 echo "".$totalPosts; ?> </h3> <i class="fa fa-group"></i> <span>
						Total Users</span>

					</span> 
        </span>
      
      </div>
      <div class="row">
   
   <span class="text">
     <center>
     <h3> <?php
   $count1=1;
   $count3=1;
   function team($uid,$conn){
   
     $h=mysqli_query($conn,"SELECT * FROM user where referId='$uid'");	
     $total=mysqli_num_rows($h);
        
         
           if(empty($total)){
         
            
               return;
           }
           else{
               while($j=mysqli_fetch_array($h))
               {
              
                  $memberId= $j['userId'];
              
                  $GLOBALS['count1']= $GLOBALS['count1']+1;            
                team($memberId,$conn);
    
         
       }
               }
           
       }
    
   team($uid,$conn);
       echo "".$count1; ?> 
      </h3> <i class="fa fa-group"></i> <span>
     Team</span>

   </span>
 </span>
 
</div>

<br><br>

    </div>
    <br><br>
   <button type="button" id="scrn" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                Download
              </button>
  <br>
<br>
   

	<div class="center">				
         <input type="checkbox" id="show" >
         <label for="show" class="show-btn btn btn-warning"  ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
</svg> Edit</label> <?php if($status==1){ ?>  <label class="show-btn" style="margin-left:150px; background:#00D100; color:white;"> Edit Successfully </label> <?php } elseif($status==0){ ?> <label class="show-btn" style="margin-left:150px; background:rgba(255,0,4,1.00); color:white;">Edit UnSuccessful </label><?php } ?>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <form action="" METHOD="POST" enctype="multipart/form-data">
              <div class="data">
                  <label>Refer Id</label>
                
             <input type="text" name="refer" value="<?php echo "".$ureferId; ?>" required readonly>

               </div>
              <div class="data">
                  <label>Adhar Number</label>
                  <input type="text" name="adhar" max="12" placeholder="xxxx-xxxx-xxxx" pattern="[0-9]{4}[0-9]{4}[0-9]{4}"  value="<?php echo "".$adhar; ?>" required>
               </div>
              
                  <input type="hidden"  name="sl_num" value="<?php echo $sl_num1; ?>">
               
               <div class="data">
                
                  <label>User ID</label>
                  <input type="text" name="userId" value="<?php echo "".$userId; ?>" required readonly>
               </div>
			   <div class="data">
         <label>Designation</label>
             <input type="text" name="level" value="<?php echo "".$level; ?>" required readonly>
              </div>
              <div class="data">
                  <label>User Name</label>
                  <input type="text" name="userName" value="<?php echo "".$userName; ?>" required>
               </div>
           
			   <div class="data">
                  <label>Phone</label>
                  <input type="number" name="phone"  value="<?php echo "".$uphone; ?>" placeholder="" pattern="[0-9]{10} "required>
               </div>
		
               <div class="data">
                  <label>Email</label>
                  <input type="text" name="email" placeholder="optional" value="<?php echo "".$email; ?>">
               </div>
          
              
			
                 <div class="data">
                  <label>Bank Name</label>
                  <input type="text" name="bankName"  value="<?php echo "".$bank; ?>" placeholder="optional">
               </div>
                 <div class="data">
                  <label>Ifsc Code</label>
                  <input type="text" name="ifscCode" value="<?php echo "".$ifsc; ?>"  placeholder="optional">
               </div>
                  <div class="data">
                  <label>Account Number</label>
                  <input type="text" name="accNumber" value="<?php echo "".$accnum; ?>"placeholder="optional">
               </div>
                 <div class="data">
                  <label>Password</label>
                  <input type="password" name="password" value="<?php echo "".$password; ?>" required>
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
<br>
      </div>
</div>

          <div class="table-data" style=" overflow: scroll; max-height:530px; ">
        <div class="order">
          <div class="head">
            <h3>Total Users</h3>
          <form action="" method="GET"> <input type="text" name="search" style="height:30px; border-radius:10px; font-size:20px; padding:5px;" placeholder="search by Phone" > <BUTTON type="submit" style="background:transparent;  border:none; padding:5px; height: 30px;"><i style="font-size:30px;" class='bx bx-search' ></button> </form></i>
          
          </div>
          <table >
            <thead>
              <tr>
                <th>Refer ID</th>
                <th>User ID</th>
                <th>User Name</th>
                <th>Phone </th>
                <th>Pincode</th>
              </tr>
            </thead>
            <tbody><?php
            date_default_timezone_set("Asia/Kolkata");
            $date=date('d/m/y');
            
            $h=mysqli_query($conn,"select  * from user where referId='$uid' ORDER BY date DESC,time DESC ");
            if(!empty($_GET)){
              $search=$_GET['search'];
              if(!empty($search)){
              $h=mysqli_query($conn,"select  * from user where phone='$search'");
            }
            }
                
  while($j=mysqli_fetch_array($h))
  {
       
    ?>
        <tr>
                    <td><?php echo $j['referId'];?></td>
                    <td><?php echo $j['userId'];?></td>
        <td><?php echo $j['userName'];?></td>
        <td><?php echo $j['phone'];?></td>
         <td><?php echo $j['pincode'];?></td>
  
        </tr>
     <?php 
   
 }
 ?>         
            </tbody>
          </table>
        </div>
         </div>
          </div>
        
        
        

  
        </div>
        <div class="table-data" >
        <div class="order">
          <div class="head">
            <h3>New Posts</h3>
            <i class='bx bx-search' ></i>
            <i class='bx bx-filter' ></i>
          </div>
            <table >
            <thead>
              <tr>
                
                
                <th>Type</th>
                <th>Post(Message)</th>
                <th>Client Phone</th>
                <th>Date</th>
                <th>Time</th>
              </tr>
            </thead>
            <tbody><?php
            date_default_timezone_set("Asia/Kolkata");
            $date=date('d/m/y');
            
            $h=mysqli_query($conn,"select  * from posts where userId='$uid' ");
            if(!empty($_GET)){
              $search=$_GET['search'];
              if(!empty($search)){
              $h=mysqli_query($conn,"select  * from posts where date='$search' and userId='$uid' ");
            }
            }
                
  while($j=mysqli_fetch_array($h))
  {
       
    ?>
        <tr>
                  
     
        <td><h3><?php echo $j['type'];?></h3></td>
        <td><h4><?php echo $j['post'];?></h4></td>
         <td><h4><?php if(!empty($j['phone'])){ echo $j['phone']; }else{ echo "----------"; } ?></h4></td>
         </td>
         <td><h4><?php echo $j['date'];?></h4></td>
                    <td><?php echo $j['time'];?></td>
 
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
        <script>
        const srcElement = document.querySelector("#wrapper"),
        btns = document.querySelectorAll("#scrn");
      
        btns.forEach(btn => { // looping through each btn
          // adding click event to each btn
          btn.addEventListener("click", () => {
            // creating canvas of element using html2canvas
            html2canvas(srcElement).then(canvas => {
              // adding canvas/screenshot to the body
              if(btn.id === "take-src-only") {
                return document.body.appendChild(canvas);
              }
      
              // downloading canvas/screenshot
              const a = document.createElement("a");
              a.href = canvas.toDataURL();
              a.download = "screenshot.jpg";
              a.click();
            });
          });
        });
      </script>

  <script src="script.js"></script>
</body>
</html>
<!-- wabili2205@saeoil.com
Mvr@001 -->