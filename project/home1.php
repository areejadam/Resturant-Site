 
<?php
include_once "person.php";
include_once "editpro.php";
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Food &amp; Recipes Web Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/dashboard/site/css/login.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<?php  if($_SESSION["pre_url"]=="home1.php"){ 
			 ?>
</head>
<body>
	<div class="header">
		<div>
			<img src="images/logo.png" alt="Logo">
		</div>
		        
	</div>

	</div>
	<div class="body">
		<div>
		
			
			<div class="body">
			<form action="viewprofile.php" >
								<h3><?php echo " * HI ".$_SESSION["username"] ."  .....     "?>  
								<input type="submit" class="btn btn-primary btn-lg" name="sumit" value="view my profile "/>
								</h3>
								</form>
								<center>
								<form method="POST">
								<input type="submit"  formaction="reservation.php" name="btn" class="btn btn-primary btn-lg" value="make reservation">
					</form>
					</center>

			

								<form action="search.php" method="POST">
<input type="text"  name="search" value ="write the recipe's name .. ">
<input type="submit" name="btn" class="btn btn-primary btn-lg" value="search">
																</h3>
</form>
								
<br>
</h3>

				<ul>
					<li class="current">
						<a href="blog.html"><img src="images/holi-turkey.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.html">Holy Turkey</a></h2>
							<p>
								This is just a place holder
							</p>
						</div>
					</li>
					<li>
						<a href="blog.html"><img src="images/fruits-and-bread.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.html">Fruits &amp; Bread</a></h2>
							<p>
								This is just a place holder
							</p>
						</div>
					</li>
					<li>
						<a href="blog.html"><img src="images/dessert.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.html">Dessert</a></h2>
							<p>
								This is just a place holder
							</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="footer">
				<ul>
					<li>
						<h2><a href="view.php">Make an order</a></h2>
						<a href="view.php"><img src="images/featured.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="http://localhost/dashboard/sw2/viewrecTABLE.php">View Recipes</a></h2>
						<a href="http://localhost/dashboard/sw2/viewrecTABLE.php"><img src="images/a-z.jpg" alt="Image"></a>
					</li>
				</ul>
				<ul>
					<li>
						<h2><a href="complainpage.php">Make complain</a></h2>
						<a href="complainpage.php"><img src="images/complain.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="email.php">Message</a></h2>
						<a href="email.php"><img src="mess.png" alt="Image"></a>
					</li>
				</ul>
			</div>
		</div>
		<div>
			
			<div>
				
				
				<ul ><form action="home1.php" method="POST">
					<input type="submit" value ="LogOut" name ="logout" class="button ">
				</form>
			</div>
			<div>


				<h3>Get Updates</h3>
				<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" id="facebook">Facebook</a>
				<a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" id="twitter">Twitter</a>
				<a href="http://freewebsitetemplates.com/go/youtube/" target="_blank" id="youtube">Youtube</a>
				<a href="http://freewebsitetemplates.com/go/flickr/" target="_blank" id="flickr">Flickr</a>
				<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" id="googleplus">Google&#43;</a>

			</div>
							
		</div>
						

	</div>
	<div class="footer">
		<div>
			<p>
				&copy; Copyright 2012. All rights reserved
			</p>
		</div>
	</div>
					<h3>Cooking Video</h3>

</body>
</html>
<?php 
if (isset($_POST["logout"])){
	$user = new person ();
	$user->logout();

}}else {
  ?>
  <img src="images/warning.png" alt="HTML5 Icon" style="width:128px;height:128" > <?php
  echo "<h1>Sorry u can't access this page ..</h1>";
  ?>
  <form action ="myhome.php">
    <input type="submit" class="btn btn-primary btn-lg" value="Go To Home Page" name="home">
  </form>
  <?php
}
?>