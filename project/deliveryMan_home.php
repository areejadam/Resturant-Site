<?php
include_once "person.php";
?>
<!DOCTYPE html>
<html lang="en">

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<title>Food &amp; Recipes Web Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">

<div>
<center>
		<?php  if($_SESSION["pre_url"]=="home_delivery.php"){ 
			 ?></center>
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

								</form>
								<center>
								<form method="POST" action="table.php">
									<input type="submit" class="btn btn-primary btn-lg" name="sumit" value="view Schedule "/>
								</form></center>
				
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   


    </script>  
				<ul>
					<li>
						<h2><a href="addrec.html">Add delivery boy</a></h2>
						<a href="addboy.php"><img src="images/add.png" alt="Image"></a>
					</li>
					<li>
						<h2><a href="view_boys.php">View deliery boy</a></h2>
						<a href="view_boys.php"><img src="images/boy.png" alt="Image"></a>
					</li>
				</ul>
					<ul>
					
					
				</ul>
				<ul>
					<li>
						<h2><a href="">delet  boy</a></h2>
						<a href="del.php"><img src="images/delete.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="">make compplain</a></h2>
						<a href="complainpage.php"><img src="images/complain.jpg" alt="Image"></a>
					</li>
				</ul>
				<ul>
					
				</ul>
			</div>

		</div>
		<div>
			<div>

			<ul ><form action="myhome.php" method="POST">
					<input type="submit" value ="LogOut" name ="logout" class="btn btn-primary btn-lg">
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
<?php }else {
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