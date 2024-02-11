<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/style.css" />
<link rel="icon" href="images/logo.png" />
<title>My Site</title>
</head>

<body>
<div>
	<div class="top" >
		<img src="images/logo.png" />
		
		<div>
			<a href="register.php">REGISTER</a>
			|
			<a href="login.php">LOGOUT</a>
		</div>
	</div>
	
	<div class="menu">
	<ul>
		<li><a href="home.html">Home</a></li>
		<li><a href="product.html">Products</a></li>
		<li><a href="recommend.html">Recommendations</a></li>
		<li><a href= "more.html">More</a></li>
	</ul> 
	
	</div>

	
	<div class="banner">
		<img src="images/banner.png" />
		
	</div>
	
	<div class="product">
		
        	<?php
				$con=mysqli_connect("localhost","root","");
				mysqli_select_db($con,"hilloni");
				$x=mysqli_query($con,"select * from category");
				
				while($y=mysqli_fetch_array($x,MYSQL_ASSOC))
				{
				//	echo "print_r($y)";
					$cid=$y["cid"];
					echo "<a href='sub_category.php?cid=$cid' >";
					echo "<div>";
					echo "<div class='img'>";
					$img=$y["image"];
					echo "<img src='images/$img' /><br>";
					echo $y["category_name"]."<br>";
					echo "</div>";	
					echo "</div>";
					echo "</a>";
				}			
			?>
        

		
	</div>
	
	<div class="bottom">
		&copy; Copyright 2017-18
	</div>
	
	
</div>

</body>
</html>















