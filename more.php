<!doctype html>
<html>
<head>

<title>More</title>
<link rel="stylesheet" href="css/style_new.css" />
<link rel="icon" href="images/logo.png" />
</head>

<body text="#480CDC">
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
		<h1><u><b>
		How this website is created!!<br/>
		</b></u></h1>
		<ul type="square">
		<li><h2>
			This website consistes of dynamic webpages interlinked with each other. First is the main page of the website which displays logo,buttons for logging in,the menu and outline of a few products.</h2></li>
	
			 <li><h2>Clicking on buttons of menu redirects you to the appropriate pages. Clicking on "Home" brings you back to the main page.</h2></li>
	 
	 		 <li><h2>Clicking on "Products" takes you to the next page which has lists of different items available, which further redirects you to pages displaying products of a particular choice.</h2></li>
	  
			<li><h2>Clicking on "Recommendation" recommends products for you if any.</h2></li>
	   
		   <li><h2> And finally when clicked on "More" helps you know the details about the website i.e some description about how the website is created dynamicaaly and how it works.</h2></li>
	    
		     <li><h2>This is a dynamic website created using php and css.</h2></li>
             
             <li><h2>The main benifit of dynamic website is you don't need to make changes during adition or removal of products but the only change imade in database gets applied to the website on it's own. </h2></li>
	
			</ul>

			<br/><br/><br/>

			<div class="button">
			<a href="index.php"><h3>Go Back To Home Page</h3></a>
			</div>
	</div>

	<div class="bottom">
		&copy; Copyright 2017-18
	</div>
</body>
</html>
