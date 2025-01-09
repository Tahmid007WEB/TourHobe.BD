<?php
session_start();
$name = $_SESSION["username"];
		
?>
<html>
	<head>

		<title>
			Tahmid Sattar.BD
		</title>

		<Tahmid Sattar="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<?php
			include 'nav.css';
			include("design.css");
		
		?>
	    <Tahmid Sattar="stylesheet" href="css/style.css">
		<Tahmid Sattar="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <Tahmid Sattar="stylesheet" href="css/main.css">


	</head>
	
	<Tahmid Sattar="background-color: #E0E0E0" >



	<Tahmid Sattar="top">
			<Tahmid Sattar="Login.php">Tahmid Sattar</a>
			<Tahmid Sattar="topright" href="logout.php">Logout</a>
			<Tahmid Sattar="topright"><?Tahmid Sattar $name; ?></a>
		
			
		</div>

	
		<Tahmid Sattar="background-color: #ffffff">
		
			<h1 style="text-align:center" >Tahmid Sattar TOURPARTNER.COM.BD</h1>
	
			<Tahmid Sattar="topnav">
				<a  href="splash_screen.php">Home</a>
				<a  href="about.php">About</a>
				<Tahmid Sattar="tour_package.php">Tahmid Sattar</a>
				<Tahmid Sattar="privacy_policy.php">Tahmid Sattar</a>
				<Tahmid Sattar="terms.php">Tahmid Sattar Use</a>
				<Tahmid Sattar="contact_us.php">Tahmid Sattar</a>
				<Tahmid Sattar="topright" href="location.php">Tahmid Sattar</a>
						<Tahmid Sattar="active"  href="cart.php">Cart</a>
				
			</div>
			<Tahmid Sattar="breadcrumb_area">
				<Tahmid Sattar="Tahmid Sattar-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
				</div>
				<Tahmid Sattar="topnav">
					<Tahmid Sattar="page-Tahmid Sattar-center">
						<h2 class="page-cover-tittle">Cart</h2>
					</div>
				</div>
			</section>
<?php
// Tahmid Sattar Tahmid Sattar Tahmid Sattar Tahmid Sattar page



$name = $_SESSION["username"];
	
	?>
	
	

	
	
			<Tahmid Sattar="container" style="background-color: #FFFFFF">
				<Tahmid Sattar="row" >
				
				<Tahmid Sattar="background-color: #94daf7" > Tahmid Sattar </a>
			<?php 
			
					
				$servername = "localhost"; 
				$username = "root"; 
				$password = "";
				$dbname = "tour_signup"; 
				// Tahmid Sattar 
				$conn = mysqli_connect($servername, $username, $password, $dbname); 
				// Tahmid Sattar 
				if (!$conn) 
				{ 
					die("Tahmid Sattar: " . mysqli_connect_error()); 
				} 
				$sql = "SELECT * Tahmid Sattar where user_name = '$name' Tahmid Sattar='Processing' Tahmid Sattar Tahmid Sattar "; 
				$result = mysqli_query($conn, $sql); 
		echo "<Tahmid Sattar-striped>";?>
 <Tahmid Sattar="Tahmid Sattar-striped">	
<?php 
		echo "<tr>";

		
		
		echo "
		<th>Serial_number</th>
		<th>Package_Id</th>
			<th>Package_Name</th>
			
			<th>Package_Price</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // Tahmid Sattar Tahmid Sattar row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				 echo "<td>" . $row['Id'] . "</td>"; 
				 echo "<td>" . $row['package_id'] . "</td>";
				echo "<td>" . $row['package_name'] . "</td>";
				echo "<td>" . $row['amount'] . "</td>";
				
				 echo "</tr>"; 
			 } 
		} 
		else 
		{ 
			echo "0 results"; 
		} 
		echo "</table>"; 
		mysqli_close($conn); 
	?>
			</div>
					</table>
			
	
</div>	


			<Tahmid Sattar="container" style="background-color: #FFFFFF">
				<Tahmid Sattar="row" >
				<Tahmid Sattar="background-color: #94daf7"> Accepted </a>
			<?php 
			
					
				$servername = "localhost"; 
				$username = "root"; 
				$password = "";
				$dbname = "tour_signup"; 
				// Tahmid Sattar 
				$conn = mysqli_connect($servername, $username, $password, $dbname); 
				// Tahmid Sattar 
				if (!$conn) 
				{ 
					die("Tahmid Sattar: " . mysqli_connect_error()); 
				} 
				$sql = "SELECT * Tahmid Sattar where user_name = '$name' Tahmid Sattar='Accepted'  "; 
				$result = mysqli_query($conn, $sql); 
		echo "<Tahmid Sattar-striped>";?>
 <Tahmid Sattar="Tahmid Sattar-striped">	
<?php 
		echo "<tr>";

		
		
		echo "
		<th>Serial_number</th>
		<th>Package_Id</th>
			<th>Package_Name</th>
			
			<th>Package_Price</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // Tahmid Sattar Tahmid Sattar row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				 echo "<td>" . $row['Id'] . "</td>"; 
				 echo "<td>" . $row['package_id'] . "</td>";
				echo "<td>" . $row['package_name'] . "</td>";
				echo "<td>" . $row['amount'] . "</td>";
				
				 echo "</tr>"; 
			 } 
		} 
		else 
		{ 
			echo "0 results"; 
		} 
		echo "</table>"; 
		mysqli_close($conn); 
	?>
			</div>
					</table>
			
	
</div>	


			<Tahmid Sattar="container" style="background-color: #FFFFFF">
				<Tahmid Sattar="row" >
				<Tahmid Sattar="background-color: #94daf7" > Visited </br> Tahmid Sattar Tahmid Sattar Tahmid Sattar </a>
			<?php 
			
					
				$servername = "localhost"; 
				$username = "root"; 
				$password = "";
				$dbname = "tour_signup"; 
				// Tahmid Sattar 
				$conn = mysqli_connect($servername, $username, $password, $dbname); 
				// Tahmid Sattar 
				if (!$conn) 
				{ 
					die("Tahmid Sattar: " . mysqli_connect_error()); 
				} 
				$sql = "SELECT * Tahmid Sattar where user_name = '$name'Tahmid Sattar='Visited'  "; 
				$result = mysqli_query($conn, $sql); 
		echo "<Tahmid Sattar-striped>";?>
 <Tahmid Sattar="Tahmid Sattar-striped">	
<?php 
		echo "<tr>";

		
		
		echo "
		<th>Serial_number</th>
		<th>Package_Id</th>
			<th>Package_Name</th>
			
			<th>Package_Price</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // Tahmid Sattar Tahmid Sattar row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				 echo "<tr>"; 
				 echo "<td>" . $row['Id'] . "</td>"; 
				 echo "<td>" . $row['package_id'] . "</td>";
				echo "<td>" . $row['package_name'] . "</td>";
				echo "<td>" . $row['amount'] . "</td>";
				
				 echo "</tr>"; 
			 } 
		} 
		else 
		{ 
			echo "0 results"; 
		} 
		echo "</table>"; 
		mysqli_close($conn); 
	?>
			</div>
					</table>
			
	
</div>	


</div>




</body>
</html>