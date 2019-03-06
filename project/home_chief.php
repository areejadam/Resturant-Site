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
		<?php  if($_SESSION["pre_url"]=="home_chief.php"){ 
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
								<br><br>
								<form action="search.php" method="POST">
<input type="text" name="search" value ="write the recipe's name .. ">
<input type="submit" name="btn" class="btn btn-primary btn-lg" value="search">
																</h3>
</form>
			
			<br ><br>

<form method="POST" action="view_reservation.php">
<input type="submit" name="btn" class="btn btn-primary btn-lg" value="View Reservation">
																</h3>
</form>

			</div>
			<div class="footer">

<div class="container">

</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.js"></script>
    <script src="jquery.bootstrap-growl.js"></script>
    <script>
    $(function(){



                $.bootstrapGrowl("WELCOME  .. <?php  echo $_SESSION["username"]?>");
    
    setTimeout(function() {
        $.bootstrapGrowl("the deadline : </br>  <?php  echo $_SESSION["deadline"]?>", { type: 'success' });
    }, 1000);
  
});







    </script>  
				<ul>
					<li>
						<h2><a href="addrec.html">Add Recipe</a></h2>
						<a href="add_recipe.php"><img src="images/add.png" alt="Image"></a>
					</li>
					<li>
						<h2><a href="viewrecc.php">View Recipes</a></h2>
						<a href="viewrecTABLE.php"><img src="images/view.png" alt="Image"></a>
					</li>
				</ul>
					<ul>
					
					
				</ul>
				<ul>
					<li>
						<h2><a href="">See Orders</a></h2>
						<a href="getorder.php"><img src="images/order.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="">Feedbacks</a></h2>
						<a href="show_feedback.php"><img src="images/feedback.png" alt="Image"></a>
					</li>
				</ul>
				<ul>
					
				</ul>
			</div>

		</div>
		<div>
			<div>

			<ul ><form action="myhome.php" method="POST">
					<input type="submit" class="btn btn-primary btn-lg" value ="Logout" name ="logout" >
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
<?php
}else {
  ?>
  <img src="images/warning.png" alt="HTML5 Icon" style="width:128px;height:128" > <?php
  echo "<h1>Sorry u can't access this page ..</h1>".$_SESSION["pre_url"];
  ?>
  <form action ="myhome.php">
    <input type="submit" class="btn btn-primary btn-lg" value="Go To Home Page" name="home">
  </form>
  <?php
}
?>