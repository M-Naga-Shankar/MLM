<?php 
session_start();
if(!isset($_SESSION['aid']))
{
  header("location:../index.php");
}
$active=5;
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
  <text x="48%" y="50%" dy=".35em" text-anchor="middle">
  Clients Remender
  </text>
</svg> 
          <ul class="breadcrumb">
            <li>
              <a href="#">Clients Remender</a>
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
          $result=mysqli_query($conn,"SELECT * FROM posts where date='$date'");  
          $totalPosts=mysqli_num_rows($result);
          if(empty($totalPosts)){
            $totalPosts=0;
          }
             echo "".$totalPosts; ?> </h3>
            <p>New Posts</p>
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
      </ul>


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
                <th>Phone</th>
                <th>Feedback</th>
                <th>User ID</th>

                <th>Date</th>
                <th>Time</th>
              </tr>
            </thead>
            <tbody><?php
            date_default_timezone_set("Asia/Kolkata");
            $date=date('d/m/y');
            
            $h=mysqli_query($conn,"select  * from posts ORDER BY date DESC,time DESC  ");
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
                  
     
        <td><h3><?php echo $j['type'];?></h3></td>
        <td><h4><?php echo $j['post'];?></h4></td>
         <td><h4><?php if(!empty($j['phone'])){ echo $j['phone']; }else{ echo "----------"; } ?></h4></td>
         <td><?php echo $j['feedback']; ?> </td>  
         <td><?php echo $j['userId']; ?> </td>
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
  

  <script src="script.js"></script>
</body>
</html>
<!-- wabili2205@saeoil.com
Mvr@001 -->