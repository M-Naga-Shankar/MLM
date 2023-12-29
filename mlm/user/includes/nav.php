<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link"></a>
			
			
			<marquee attribute_name = "attribute_value"....more attributes>
  <?php 
   $h=mysqli_query($conn,"select  * from news where status=1");
            while($j=mysqli_fetch_array($h))
            {
              $news=$j['news'];
            }
            echo "".$news;
   ?>
</marquee>
			<input type="checkbox" id="switch-mode" hidden >
			<a href="#" class="notification" style="padding:5px;">
				<i class='bx bxs-bell' ></i>
				<span class="num" ><span class="text"> <span style="color:white; background:#00D100;width:20px; font-size:15px;padding:2px; border-radius:8px;">pro</span></span></span>
			</a>
		
		</nav>