<?php 
session_start();
$uid=$_SESSION['uid'];
$active=1;
include 'includes/config.php';
date_default_timezone_set("Asia/Kolkata");
						$date=date('d/m/y');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>MLM</title>
</head>
<body >


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
					$result=mysqli_query($conn,"SELECT * FROM user where date='$date' and referId='$uid'" );	
					$totalPosts=mysqli_num_rows($result);
					if(empty($totalPosts)){
						$totalPosts=0;
					}
						 echo "".$totalPosts; ?> </h3>
						<p>New Users </p>
					</span>
				</li>
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
							
								<th>User ID</th>
								<th>User Name</th>
								<th>Phone </th>
								
								<th>Pincode</th>
							</tr>
						</thead>
						<tbody><?php
						date_default_timezone_set("Asia/Kolkata");
						$date=date('d/m/y');
						
						$h=mysqli_query($conn,"SELECT * FROM user where date='$date' and referId='$uid'" );	
						    
	while($j=mysqli_fetch_array($h))
	{
       
		?>
        <tr>
                   
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
				
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>
<!-- wabili2205@saeoil.com
Mvr@001 -->