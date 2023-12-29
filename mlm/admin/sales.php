<?php 
session_start();
if(!isset($_SESSION['aid']))
{
  header("location:../index.php");
}
include("includes/config.php");
$active=2;
$status=11;

if(!empty($_POST))
{
	$date=date('d/m/y');
    date_default_timezone_set("Asia/Kolkata");
 
                  date_default_timezone_get();
                $time=date('h:i:s'); 
               
                $sl_id=mysqli_query($conn,"select * from sales");					
               
                     
                while($j=mysqli_fetch_array($sl_id))
                {
                   $sl_no=$j['saleId'];
                }
                $sl_num1=$sl_no+1;
                  $len= strlen($sl_no);
                   for ($x = 0; $x <5-$len; $x++) {
                      $id.="0";
                     }
                     $sl_ids=$id.$sl_num1;
                     

$saleid=$sl_num1;
	$userId=$_POST['id'];
	$venname=$_POST['venName'];
	$area=$_POST['area'];
	$plotno=$_POST['plotNo'];
	$price=$_POST['price'];
	$note=$_POST['note'];
		$cname=$_POST['cName'];
			$cnum=$_POST['cNum'];
				$cadd=$_POST['caddress'];

 
	
	$sql=mysqli_query($conn,"INSERT INTO `sales`(`date`, `time`, `saleId`, `userId`, `ventureName`, `area`, `plotNo`,`price`, `note`, `customer_Name`, `customer_number`, `customer_address`) VALUES ('$date','$time','$saleid','$userId','$venname','$area','$plotno','$price','$note','$cname','$cnum','$cadd')");

	if($sql==true)
	{
    
		
    $uid=$userId;
    $check=1;
     while($uid!="ADMIN"){
       $h=mysqli_query($conn,"select * from user where userId='$uid'");		
          
         
       while($j=mysqli_fetch_array($h))
       {
          $refer= $j['referId'];
          $elevel=$j['level'];
          $earned=$j['earning'];
          if($elevel==1){
             $ecom=1150*$GLOBALS['area'];
          }
          if($elevel==2){
             $ecom=1100*$GLOBALS['area'];
          }
          if($elevel==3){
             $ecom=1000*$GLOBALS['area'];
          }
          if($elevel==4){
             $ecom=900*$GLOBALS['area'];
          }
          if($elevel==5){
             $ecom=800*$GLOBALS['area'];
          }
          if($elevel==6){
             $ecom=700*$GLOBALS['area'];
          }
          if($elevel==7){
             $ecom=600*$GLOBALS['area'];
          }
          if($elevel==8){
             $ecom=500*$GLOBALS['area'];
          }
          if($elevel==9){
             $ecom=400*$GLOBALS['area'];
          }
          if($check==1){
             $commision1=$earned+$ecom;
             $check=0;
         
          $sql=mysqli_query($conn,"UPDATE `user` SET `earning`='$commision1' WHERE userId='$uid'");
       }
          $h=mysqli_query($conn,"select * from user where userId='$refer'");		
          
       
          while($j=mysqli_fetch_array($h))
          {
            
          $level=$j['level'];
          $earning=$j['earning'];
          $level= substr($level,0,1);
          if($level==1){
             $com=1150*$GLOBALS['area'];
          }
          if($level==2){
             $com=1100*$GLOBALS['area'];
          }
          if($level==3){
             $com=1000*$GLOBALS['area'];
          }
          if($level==4){
             $com=900*$GLOBALS['area'];
          }
          if($level==5){
             $com=800*$GLOBALS['area'];
          }
          if($level==6){
             $com=700*$GLOBALS['area'];
          }
          if($level==7){
             $com=600*$GLOBALS['area'];
          }
          if($level==8){
             $com=500*$GLOBALS['area'];
          }
          if($level==9){
             $com=400*$GLOBALS['area'];
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
     $status=1;
   
	}
	else
	{
		$status=0;
	}
}
if(!empty($_GET))
{
  $sl_id=mysqli_query($conn,"select * from venture");					
               
                     
  while($j=mysqli_fetch_array($sl_id))
  {
     $sl_no=$j['ventureId'];
  }
  $sl_num1=$sl_no+1;
  $venId=$sl_num1;
  $ventname=$_GET['ventName'];
  $sql=mysqli_query($conn,"INSERT INTO `venture`(`ventureId`, `ventureName`) VALUES ('$venId','$ventname')");
  if($sql==true)
	{
  ?>
  <script>
    alert('done');
    </script>
    <?php
}
else
{
?>
<script>
  alert('error');
  </script>
  <?php
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
  <text x="26%" y="50%" dy=".40em" text-anchor="middle">
 Sales
  </text>
</svg>  
			
					<ul class="breadcrumb">
						<li>
							<a href="#">Sales</a>
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
         <label for="show" class="show-btn">Add Sales</label> <?php if($status==1){ ?>  <label class="show-btn" style="margin-left:150px; background:#00D100; color:white;"> Added </label> <?php } elseif($status==0){ ?> <label class="show-btn" style="margin-left:150px; background:rgba(255,0,4,1.00); color:white;">Adding UnSuccessful </label><?php } ?>
         <div class="container">
            <label for="show" class="close-btn fas fa-times" title="close"></label>
            <form action="" METHOD="POST">
              <div class="data">
                  <label>User Id</label>
                    <select name="id" style="height:inherit; width:inherit; font-size:15px;">
                    	<?php
					
						$h=mysqli_query($conn,"select  * from user  ORDER BY sl_no");					
					
						    
	while($j=mysqli_fetch_array($h))
	{
       
		?>
    <option ><?php echo "".$j['userId']; ?></option>
  <?php  } ?>
  </select>

               </div>
               <div class="data">
               <label>Venture Name</label>
                    <select name="venName" style="height:inherit; width:inherit; font-size:15px;">
                    	<?php
					
						$h=mysqli_query($conn,"select  * from venture  ORDER BY ventureId");					
					
						    
	while($j=mysqli_fetch_array($h))
	{
       
		?>
    <option ><?php echo "".$j['ventureName']; ?></option>
  <?php  } ?>
  </select>
               </div>
               <div class="data">
                  <label>Area (in Sq yards)</label>
                  <input type="text" name="area" required>
               </div>
               <div class="data">
                  <label>Plot No.</label>
                  <input type="text" name="plotNo" required>
               </div>
			   <div class="data">
                  <label>Price</label>
                  <input type="number" name="price" required>
               </div>
               <div class="data">
                  <label>Customer Name</label>
                  <input type="text" name="cName" required>
               </div>
               <div class="data">
                  <label>Customer Contact No.</label>
                  <input type="text" name="cNum" required>
               </div>
               <div class="data">
                  <label>Customer Address</label>
                  <input type="text" name="Caddress" required>
               </div>
               <div class="data">
                  <label>Note</label>
                  <input type="text" name="note" required>
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
					<i class='bx bxs-user-plus' ></i>
					<span class="text">
					<div class="center">				
            <span style="color:black; font-weight:200px; font-size:20px;">Add Venture</span><br>
            <form action=" " method="GET">
            <input type="text" name="ventName" style="width:150px; height:25px; padding:5px; border-radius:5px;" required>
            <button type="submit" style="margin-top:5px; margin-left:8px; background:#00D100; border:none; padding :5px 10px; font-size:15px;  border-radius:5px; color:white;">ADD</button>
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
						<h3>Total Sales</h3>
					<form action="" method="GET">	<input type="text" name="search" style="height:30px; border-radius:10px; font-size:20px; padding:5px;" placeholder="Search by date" > <BUTTON type="submit" style="background:transparent;  border:none; padding:5px; height: 30px;"><i style="font-size:30px;" class='bx bx-search' ></button></i>
					
					</div>
					<table >
						<thead>
							<tr>
              <th>Sale Id</th>
								<th>Date</th>
								<th>Time</th>
                <th>User Id</th>
                <th>Venture Name</th>
								<th>Area (In Sq yard)</th>
								<th>plot No. </th>
								<th>Price</th>
                <th>Note</th>
							</tr>
						</thead>
						<tbody><?php
						date_default_timezone_set("Asia/Kolkata");
						$date=date('d/m/y');
						
						$h=mysqli_query($conn,"select  * from sales  ORDER BY saleId ASC ");
						if(!empty($_GET)){
							$search=$_GET['search'];
							if(!empty($search)){
							$h=mysqli_query($conn,"select  * from sales where date='$search'  ORDER BY saleId ASC");
						}
						}
						    
	while($j=mysqli_fetch_array($h))
	{
       
		?>
        <tr>
        <td><?php echo $j['saleId'];?></td>
                    <td><?php echo $j['date'];?></td>
                    <td><?php echo $j['time'];?></td>
                    <td><?php echo $j['userId'];?></td>
                    <td><?php echo $j['ventureName'];?></td>
                    <td><?php echo $j['area'];?></td>
                    <td><?php echo $j['plotNo'];?></td>
                    <td><?php echo $j['price'];?></td>
                    <td><?php echo $j['note'];?></td>
       
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
