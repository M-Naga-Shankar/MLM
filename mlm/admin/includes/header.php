<section id="sidebar">
		<a href="#" class="brand" style="padding:20px;">
			
			<style>
.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 100% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 5s linear infinite;
  display: inline-block;
      font-size: 25px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
				</style>
			<span class="text"  style="font-size:20px;">
<div class="container1">
  <div class="row">
      
    <center style="margin-top:40px;">  <img src="./uploads/ADITYAKKD00001.png" alt="" width="60" height="60">
    <div class="col-md-12 text-center">
        <h3 class="animate-charcter" >
Sri Aditya Developers</h3> </center>
    </div>
  </div>
</div></span>
		</a>
		<ul class="side-menu top">
			<li <?php if($active==1) {?> class="active" <?php } ?> >
				<a href="dashboard.php">
				<i class='bx bxs-dashboard' ></i>
					<span class="text"> <h3 class="" style="font-size:15px;">Dashboard</h3></span>
				</a>
			</li>
			<li <?php if($active==2) {?> class="active" <?php } ?>>
				<a href="#">
					<i class='bx bxs-rupee' >&#x20b9;</i>
					<span class="text"><h3 class="" style="font-size:15px;">Sales</h3></span>
				</a>
			</li>
			<li <?php if($active==3) {?> class="active" <?php } ?>>
				<a href="userManegement.php">
					<i class='bx bxs-user' ></i>
					<span class="text"><h3 class="" style="font-size:15px;">User Manegment</h3></span>
				</a>
			</li> 
			<li <?php if($active==4) {?> class="active" <?php } ?>>
				<a href="news.php">
					<i class='bx bxs-news' ></i>
					<span class="text"><h3 class="" style="font-size:15px;">Offers</h3></span>
				</a>
			</li>
			<li <?php if($active==5) {?> class="active" <?php } ?>>
				<a href="clients_post.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text"><h3 class="" style="font-size:15px;">Client's Remender </h3></span>
				</a>
			</li>
		
		</ul>
		<ul class="side-menu">
		<li <?php if($active==6) {?> class="active" <?php } ?>>
				<a href="profile.php" class="profile">
					<i style="font-size:20px;" class='bx bxs-user-circle' ></i>
					<span class="text">Profile</span>
				</a>
			</li>
		<li>
				<a href="../logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
			
		</ul>
	</section>
