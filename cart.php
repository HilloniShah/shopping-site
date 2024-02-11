<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style2.css" />
<link rel="icon" href="images/logo.png" />
<title>Untitled Document</title>
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

	<?php
	//session_start();
	
	if(!isset($_SESSION["email"]))
	{
		header("Location: login.php");	
	}

		$con=mysqli_connect("localhost","root","","hilloni");
		$uid=$_SESSION["uid"];
		
		if(isset($_GET["pid"]))
		{
			$pid=$_GET["pid"];
	   		$qty=$_GET["quantity"];	
			
			$x=mysqli_query($con,"select quantity from cart where cart.uid=$uid and cart.pid=$pid ");
			
			if(mysqli_num_rows($x)!=0)
			{
				
				mysqli_query($con,"update cart set quantity=quantity+$qty");	
			}
			else
			{
			//	echo "insert into cart(pid,uid,quantity) values($pid,$uid,$qty)";
				mysqli_query($con,"insert into cart(pid,uid,quantity) values($pid,$uid,$qty) ");	
			}
		}
	    if(isset($_GET["cart_id"]))
		{
			$crtid=$_GET["cart_id"];
			mysqli_query($con,"delete from cart where cart.cart_id=$crtid");
		}
	

    
    echo "<form method='post'>";
    	echo "<table align='center'>";
    echo "<tr>";
           echo "<td >Name</td>";
           echo "<td>Product</td>";
           echo "<td>Quantity</td>";
           echo "<td>Cost</td>";
		   echo "<td>Delete</td>";
    echo "</tr>";
    
    
	$arr=mysqli_query($con,"select a.prod_name, a.prod_cost, a.image, b.quantity, b.cart_id from product a, cart b where b.uid=$uid and a.pid=b.pid");
	$tot=0;
	$j=mysqli_num_rows($arr);
	$i=0;
	while($a=mysqli_fetch_array($arr,MYSQL_ASSOC))
	{
		echo "<tr>";
		
			echo "<td>";
					echo $a["prod_name"];
			echo "</td>";
			
			echo "<td>";
					 $img=$a["image"];
					 echo "<img src='images/$img'/>";
			echo "</td>";
			
			echo "<td>";
					echo $a["quantity"];
			echo "</td>";
			
			echo "<td>";
					$cst=($a["prod_cost"])*($a["quantity"]);
					echo "$cst";
			echo "</td>";
			
			echo "<td>";
					$cart_id=$a["cart_id"];
					 echo "<a href='cart.php?cart_id=$cart_id'><img src='images/del1.png'></a>";
			echo "</td>";
			
			$tot=$tot+$cst;
		echo "</tr>";
		$i=$i+1;	
	}
   
    		echo "<tr>";
    			echo "<td colspan='3' align='center'>";
				echo "Total Cost";
				echo "</td>";
				echo "<td align='right'>";
				echo "$tot";
				echo "</td>";
   			echo "</tr>";
			

	
	?>
        
    
    	</table>
    </form>
    
    <div class="bottom">
		&copy; Copyright 2017-18
	</div>
    
</div>    
</body>
</html>