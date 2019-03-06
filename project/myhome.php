<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->

<html>
<head>
	<meta charset="UTF-8">
	<title>Food &amp; Recipes Web Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="http://localhost/dashboard/site/css/login.css">
		  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">



</head>
<body>
<?php 
include_once 'person.php';
include_once 'user.php';
$_SESSION["type"]="visitor";
$_SESSION["pre_url"]="myhome.php";

?>
	<div class="header">
		<div>
			<img src="images/logo.png" alt="Logo">
		</div>
		          <form >



			
		</form>
	</div>

	</div>
	<div class="body">
		<div>
			
			<div class="body">
				
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
						<h2><a href="http://localhost/dashboard/sw2/order_no.php">Make an order</a></h2>
						<a href="http://localhost/dashboard/sw2/order_no.php"><img src="images/featured.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="viewrecTABLE.php">View Recipes</a></h2>
						<a href="viewrecTABLE.php"><img src="images/a-z.jpg" alt="Image"></a>
					</li>
				</ul>
				<ul>
					<li>
						<h2><a href="http://localhost/dashboard/sw2/order_no.php">Make complain</a></h2>
						<a href="http://localhost/dashboard/sw2/order_no.php"><img src="images/complain.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="http://localhost/dashboard/sw2/order_no.php">Send Message</a></h2>
						<a href="http://localhost/dashboard/sw2/order_no.php"><img src="mess.png" alt="Image"></a>
					</li>
				</ul>
			</div>
		</div>
		<div>
			
			<div>
				
				<ul >
					<form method="post" action="login_as.php">

					<button id="klik" name="klik" class="btn btn-primary btn-lg"> Login </button>
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
</body>
</html>