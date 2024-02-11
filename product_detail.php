<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/recent.css" />
<link rel="icon" href="images/logo.png" />
<title>My Site</title>
</head>

<body>
<div>
	<div class="top" >
		<img src="images/logo.png" />
		
		<div>
			<?php
				session_start();
				if(isset($_SESSION["email"]))
				{
					echo "<a href='login.php'>LOGOUT</a>";
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
	
	<div class="menu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="recommend.php">Recommendations</a></li>
		<li><a href= "more.php">More</a></li>
	</ul> 
	
	</div>
	
	<div class="product">
		
    <?php
	
		$id=$_GET["pid"];
		$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"hilloni");
		
		$x=mysqli_query($con,"select a.pid,a.prod_name,a.prod_cost,a.prod_description,b.features,b.image from product a, product_detail b where b.pid=$id and a.pid=b.pid");
		
				while($y=mysqli_fetch_array($x,MYSQLI_ASSOC))
				{
					//echo "print_r($y)";
					$pid=$y["pid"];
					echo "<a href='cart.php?pid=$pid' >";
						$img=$y["image"];
					echo "<div>";
						echo "<div class='img'>";
						echo "<img src='images/$img' /><br><br>";
						echo "</div>";	
					echo "</div>";
						echo "</a>";
						
						echo "<div>";
						echo "<b><u><center>".$y["prod_name"]."</center></u></b><br><br>";
						echo "<b>Cost:</b><br>";
						echo "Rs. ".$y["prod_cost"]."<br><br>";
						echo "<b>Description:</b><br>";
						echo $y["prod_description"]."<br><br>";
						echo "<b>Features:</b><br>";
						echo $y["features"]."<br><br><br>";
						?>
                        <form method="get" action="cart.php">
                        	<center><input type="text" name="quantity" id="quantity" placeholder="please enter quantity"> </center>
                            <input type="hidden" name="pid" value="<?php echo $_GET["pid"];?>" >
                        	<center><input type="submit" value="Add To Cart"> </center>
                        </form>
                        <?php
						echo "</div>";
					
					
				}			
			?>
        

		
	</div>
	
	<div class="bottom">
		&copy; Copyright 2017-18
	</div>
	
	
</div>

</body>
</html>















