<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
  include_once("htmlhead_template.php");
  session_start();
	session_destroy();
?>
</head>

<body>
<div class = "container" id="container"><!-- container makes everything stick to middle -->
<!-- navigation -->
    <div class="navbar navbar-fixed-top">
    	<div class = "container">
        <div class = "row">
        <div class="col-sm-1"></div>
    	<div class="col-sm-5"><a class = "navbar-brand" href="index.php"><img src="images/bidme_logo.png" alt="bidme logo"></a></div>
        <div class="col-sm-6"></div>
       	</div><!-- end of row -->
    	</div><!-- end of nav bar container -->
   	</div><!-- end of nav bar fixed top -->
    <div class="createSpace" > </div> <!-- end of createSpace -->
  <div class="createSpace" > </br></div> <!-- end of createSpace -->
  
  <div class= "middleSpace">
  
  <div class ="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-8">
  <div class="alert alert-success" role="alert">You had signed out! See you next time!</div>
  </div><!-- end of colsm8 -->
  <div class="col-sm-2">
 

    <div class= "register_box">
	
    <a href="login.php""><input type="submit" class="btn btn-warning btn-lg" id="submit" name="submit" value="Back to Sign in" /> </a>
    </div>

  </div><!-- end of sm2 -->
  
  <div class="col-sm-1"></div>
  </div><!-- end of row -->
  </div><!-- end of middle space -->
  
  </div><!-- end of container -->
  <?php include_once("footer_template.php"); ?>
</body>
</html>