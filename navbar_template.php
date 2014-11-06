
<?php session_start(); ?>
<!-- navigation -->
    <div class="navbar navbar-fixed-top">
    	<div class = "container">
    	<a class = "navbar-brand" href="index.php"><img src="images/bidme_logo.png" alt="bidme logo"></a>
        
        <div class = "topspace" >
        <div class = "nav-collapse collapse navbar-reponsive-collapse">
        	<ul class = "nav navbar-nav">
            <li class = "active"><a href="#">Home</a></li>
            <li> <a href = "#" class="dropdown-toggle" data-toggle="dropdown">Category <strong class= "caret"></strong></a>
            <ul class = "dropdown-menu">
            	<li><a href="#">Collectibles & art</a></li>
                <li><a href="#">Electronics</a></li>
                <li><a href="#">Entertainment</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Home & Garden</a></li>
                <li><a href="#">Motors</a></li>
                <li><a href="#">Sporting Goods</a></li>
                <li><a href="#">Toys & hobbies</a></li>
            	<li><a href="#">Others</a></li>
            
            </ul><!-- end of Category Drop downm menu -->
            </li></ul>
            
            <form class = "navbar-form pull-left">
            <input type ="text" class="form-control" placeholder="Search item" id="searchInput">
            <button type ="submit" class="btm btn-default" style="height:35px"><span class = "glyphicon glyphicon-search"> Search</span></button>
            </form><!-- end of search form -->
            
            
            <ul class = "nav navbar-nav pull-right">
           
            <?php if(isset($_SESSION['username'])){?>
         
            <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Hi! <?php echo $_SESSION['username'];?> <strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									<li>
										<a href="#"><span class="glyphicon glyphicon-cog"></span> Profile Settings</a>
									</li>
                                    
                                    	<li>
										<a href="#"><span class="glyphicon glyphicon-tag"></span> My bid</a>
									</li>
                                    
                                    	<li>
										<a href="#"><span class="glyphicon glyphicon-star"></span> My Favourite</a>
									</li>
                                    
                                    <li class="divider"></li>
                                    	<li>
										<a href="#"><span class="glyphicon glyphicon-th-large"></span> My Item</a>
									</li>
									
									<li class="divider"></li>
									
									<li>
										<a href="logout.php"><span class="glyphicon glyphicon-off"></span> Sign out</a>
									</li>
            </ul><!-- end of dropdown-menu -->
            </li><!-- end of li class dropdown -->
            
            <?php }
			
			else {
			?>
            <li>
            <a href="login.php"><span class="glyphicon glyphicon-user"></span> Sign In</a> <li><a href="register.php">  <span class="glyphicon glyphicon-ok"> Register </span></a></li>
 </li>
<?php } ?>
            </ul><!-- end of navbar pull right -->
            
            </div>
          </div><!-- top space div -->
    	</div><!-- end of nav bar container -->
   	</div><!-- end of nav bar fixed top -->
    <div class= "createSpace"></div>