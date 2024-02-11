<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/style1.css" />
<link rel="icon" href="images/logo.png" />
<title>My Site</title>
</head>

<body>
<div>
	<div class="top" >
		<img src="images/logo.png" />
		
		<div>
			<a href="reg_form.html">REGISTER</a>
			|
			<a href="login_form.html">LOGIN</a>
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
	
	<div class="product">
		
    <?php
			
		if(isset($_GET["pid"]))
		{
		$id=$_GET["pid"];
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"hilloni");
		$x=mysqli_query($con,"select a.pid,a.prod_name,a.prod_cost,a.prod_description,b.features,b.image from product a, product_detail b where pid=$id");
		}
				
				while($y=mysqli_fetch_array($x,MYSQLI_ASSOC))
				{
					//echo "print_r($y)";
					$pid=$y["pid"];
					echo "<a href='cart.php?pid=$pid' >";
					echo "<div>";
						echo "<div class='img'>";
						$img=$y["image"];
						echo "<img src='images/$img' /><br><br>";
						echo "</div>";	
					
						echo "<div>";
						echo $y["prod_name"]."<br>";
						echo $y["cost"]."<br><br>";
						echo "<b>Description</b><br>";
						echo $y["description"]."<br><br>";
						echo "<b>Features</b><br	>";
						echo $y["features"];
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















