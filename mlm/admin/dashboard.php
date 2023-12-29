<?php 
session_start();
if(!isset($_SESSION['aid']))
{
  header("location:../index.php");
}
$active=1;
include("includes/config.php");
date_default_timezone_set("Asia/Kolkata");
						$date=date('d/m/y');
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

	<title>MLM</title>
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
  stroke: rgba(72,138,20,0);
  font-size: 40px;
  letter-spacing: 4px;
}
@keyframes stroke {
  0%   {
    fill: rgba(72,138,20,0); stroke: #696969;
  
  100% {
    fill: #A020F0; stroke: #696969;
    stroke-dashoffset: -25%; stroke-dasharray: 50% 0; stroke-width: 0;
  }
}
						</style>
				<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

<svg >
  <text x="48%" y="50%" dy=".35em" text-anchor="middle">
  Dashboard
  </text>
</svg>  
					
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
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
					<i class='bx bxs-user' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM user where date='$date'");	
					$totalPosts=mysqli_num_rows($result);
					if(empty($totalPosts)){
						$totalPosts=0;
					}
						 echo "".$totalPosts; ?> </h3>
						<p>New Users</p>
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
				<li>
					<i class='bx bxs-news' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM posts");	
					$totalPosts=mysqli_num_rows($result);
						 echo "".$totalPosts; ?> </h3>
						<p>Total Posts</p>
					</span>
				</li>
					<li>
					<i class='bx bxs-news' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM posts");	
					$totalPosts=mysqli_num_rows($result);
						 echo "".$totalPosts; ?> </h3>
						<p>Total Sales</p>
					</span>
				</li>
					<li>
					<i class='bx bxs-news' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM posts");	
					$totalPosts=mysqli_num_rows($result);
						 echo "".$totalPosts; ?> </h3>
						<p>Total Sales Money</p>
					</span>
				</li>
					<li>
					<i class='bx bxs-news' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM posts");	
					$totalPosts=mysqli_num_rows($result);
						 echo "".$totalPosts; ?> </h3>
						<p>Total Sold Area(in yards)</p>
					</span>
				</li>
					<li>
					<i class='bx bxs-news' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM posts");	
					$totalPosts=mysqli_num_rows($result);
						 echo "".$totalPosts; ?> </h3>
						<p>Total 1_Senior_Marketing_Director</p>
					</span>
				</li>
					<li>
					<i class='bx bxs-news' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM posts");	
					$totalPosts=mysqli_num_rows($result);
						 echo "".$totalPosts; ?> </h3>
						<p>Total 2_Marketing_Director</p>
					</span>
				</li>
					<li>
					<i class='bx bxs-news' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM posts");	
					$totalPosts=mysqli_num_rows($result);
						 echo "".$totalPosts; ?> </h3>
						<p>Total 3_Assistant_Marketing_Director</p>
					</span>
				</li>
					<li>
					<i class='bx bxs-news' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM posts");	
					$totalPosts=mysqli_num_rows($result);
						 echo "".$totalPosts; ?> </h3>
						<p>Total 4_Senior_General_Manager</p>
					</span>
				</li>
					<li>
					<i class='bx bxs-news' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM posts");	
					$totalPosts=mysqli_num_rows($result);
						 echo "".$totalPosts; ?> </h3>
						<p>Total 5_General_Manager</p>
					</span>
				</li>
					<li>
					<i class='bx bxs-news' ></i>
					<span class="text">
						<h3> <?php
					$result=mysqli_query($conn,"SELECT * FROM posts");	
					$totalPosts=mysqli_num_rows($result);
						 echo "".$totalPosts; ?> </h3>
						<p>Total 6_Assistant_General_Manager</p>
					</span>
		</li>
			</ul>


			<div class="table-data" >
				<div class="order">
					<div class="head">
						<h3>New Users</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table >
						<thead>
							<tr>
								<th>Refer ID</th>
								<th>User ID</th>
								<th>User Name</th>
								<th>Phone </th>
								<th>Email</th>
								<th>Pincode</th>
							</tr>
						</thead>
						<tbody><?php
						date_default_timezone_set("Asia/Kolkata");
						$date=date('d/m/y');
						
						$h=mysqli_query($conn,"select  * from user where date='$date'");
						    
	while($j=mysqli_fetch_array($h))
	{
       
		?>
        <tr>
                    <td><?php echo $j['referId'];?></td>
                    <td><?php echo $j['userId'];?></td>
        <td><?php echo $j['userName'];?></td>
        <td><?php echo $j['phone'];?></td>
        <td><?php echo $j['email'];?></td>
         <td><?php echo $j['pincode'];?></td>
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
<!-- wabili2205@saeoil.com
Mvr@001 -->