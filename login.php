<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
  include_once("htmlhead_template.php");

?>
</head>

<body>
<?php include_once("connect.php"); ?>
<?php session_start(); $testlogin=true;?>

<?php if(isset($_POST['submit'])){
	$li_username=$_POST['li_username'];
$li_pwd=$_POST['li_pwd'];
$li_username=trim($li_username);
$li_username=strtolower($li_username);
$li_pwd=trim($li_pwd);
$query = "SELECT username, password FROM user
		  WHERE username = '".$li_username."' AND password = '".$li_pwd."'";
$login_match = mysqli_query ($connection, $query)
or die ("Error: ".mysqli_error($connection));
//check if user input matches with database data
$testlogin=false;
while($row=mysqli_fetch_array($login_match))
{
//if user enters correct username and password
$testlogin=true;
//storing the username in session
$_SESSION['username']=$li_username;
header('Location: index.php');
}
	
	
	
	}
?>

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
    

    
<?php if(isset($_SESSION['username'])){ ?>
		<div class = "page_error">
        <h2>Sorry, you had already logged in. Redirecting back to home page...</h2> 
        </div><!-- end of page_error -->
        <?php header( "refresh:5; url=index.php" ); }?> 

   
   
<?php  if(!(isset($_SESSION['username']))){?>

    <div class ="row" id="login">
    <div class="col-sm-1"></div>
    <div class="col-sm-5">
    <div class="panel panel-info">
    
    <div class="panel-body">
   
    <form id="loginform" name="loginform" action="" method="post">
   <fieldset>
<legend><h3>Sign in</h3></legend>
	<?php 	
   			if ((isset($_POST['submit']))){
   			if ($testlogin== false){?>
		<div class="alert alert-warning" role="alert">Username or Password is incorrect.</div>
        
<?php		}}?>   
    <table>
    <tr><td><h4>Username : </h4></td></tr><tr><td><input type="text" class="form-control" placeholder="username" id="li_username" name="li_username" style="width:350px"></td></tr>
	<tr><td><h4>Password : </td></tr></h4><tr><td><input type="password" class="form-control" placeholder="password" id="li_pwd" name="li_pwd" style="width:350px" ></td></tr>
    <tr><td><p>Forgot your password? <a href="user_recovery.php">Click here </p></a>
	<tr><td><input type="submit" class="btn btn-primary" value="Sign in" id="submit" name="submit" /> </td></tr></table>
	</fieldset>
 
  </div><!-- end of panel body -->
    </form>
    </div><!-- end of panel primary -->    
    </div><!-- end of col-md-5 -->
    
    <div class="col-sm-5">
    <div class="panel panel-warning" style="height:320px">
  	</br>
    </br></br></br>
    <div class= "register_box">
	<h3 >Not Register Yet? </h3>
    <a href="register.php"><input type="submit" class="btn btn-warning btn-lg" id="submit" name="submit" value="Register Now" /> </a>
    </div>
    </div><!-- end of panel -->
    
    </div><!-- end of col-md-5 -->
    
    
     <div class="col-sm-1"></div>
    </div><!-- end of row -->
    </div><!-- end of continer -->
    
    <div class = "footer_space">
    <?php include_once("footer_template.php"); 
	mysqli_close($connection);}?>
    </div>
</body>
</html>