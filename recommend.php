<!doctype html>
<html>
<head>
<title>Recommendation</title>
<link rel="stylesheet" href="css/style_new.css" />
<link rel="icon" href="images/logo.png" />
</head>

<body>
	<div class="top" >
		<img src="images/logo.png" />
		
		<div>
        
        	<?php
				session_start();
				if(isset($_SESSION["email"]))
				{
					echo "<a href='cart.php'>LOGOUT</a>";
					echo "  ";
					echo "<a href='cart.php'>VIEW-CART</a>";
				}
				
				else
				{
					echo '<a href="register.php">REGISTER</a>';
					echo "|";
					echo '<a href="login.php">LOGIN</a>';	
				}
			?>
			
		</div>
	</div>
    
	<div>
		<h1>Sorry,we have nothing to recommend.. :( </h1>
		<br/><br/>

		<div class="button">
			<a href="index.php"><h3>Go Back To Home Page</h3></a>
		</div>
        
	</div>

	<div class="bottom">
		&copy; Copyright 2017-18
	</div>
</body>
</html>
