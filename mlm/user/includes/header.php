<section id="sidebar"  class="hide">
		<a href="#" class="brand">
			<i class='bx bxs-chart'></i>
			<span class="text" style="font-size:28px;">Sri Aditya Developers</span>
		</a>
		<ul class="side-menu top">
			<li <?php if($active==1) {?> class="active" <?php } ?> >
				<a href="dashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li <?php if($active==2) {?> class="active" <?php } ?>>
				<a href="userManegement.php">
					<i class='bx bxs-user' ></i>
					<span class="text">User Manegment</span>
				</a>
			</li>
			<li <?php if($active==3) {?> class="active" <?php } ?>>
				<a href="posts.php">
					<i class='bx bxs-news' ></i>
					<span class="text">Remender</span>
				</a>
			</li>
		<!--	<li <?php if($active==4) {?> class="active" <?php } ?>>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message <span style="color:white; background:#00D100;width:20px; font-size:15px;padding:2px; border-radius:8px;">pro</span></span>
				</a>
			</li> -->
		
		</ul>
		<ul class="side-menu">
		<li <?php if($active==5) {?> class="active" <?php } ?>>
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
