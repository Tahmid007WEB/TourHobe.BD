<!Tahmid Sattar>
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




<Tahmid Sattar="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.Tahmid Sattar {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.Tahmid Sattar.active {
  background-color: #04AA6D;
  color: white;
}

.Tahmid Sattar:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@Tahmid Sattar and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .Tahmid Sattar {float: left;}
  div.content {margin-left: 0;}
}

@Tahmid Sattar and (max-width: 400px) {
  .Tahmid Sattar {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<Tahmid Sattar="sidebar">
    <Tahmid Sattar="admin2.php">Tahmid Sattar Delete</a>
  <Tahmid Sattar="userlist.php">Tahmid Sattar</a>
  <a  class="active" href="message.php">Message</a>
  <Tahmid Sattar="booking.php">Tahmid Sattar</a>
  <Tahmid Sattar="Login.php">Exit</a>

  
</div>

<Tahmid Sattar="content">

<Tahmid Sattar="container" style="background-color: #FFFFFF">
				<Tahmid Sattar="row" >
				<Tahmid Sattar="background-color: #94daf7" > Processing </br> Tahmid Sattar Tahmid Sattar  </a>
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
				$sql = "SELECT * Tahmid Sattar Tahmid Sattar ='Processing'  "; 
				$result = mysqli_query($conn, $sql); 
		echo "<Tahmid Sattar-striped>";?>
 <Tahmid Sattar="Tahmid Sattar-striped">	
<?php 
		echo "<tr>";

		
		
		echo "
			<th>Tahmid Sattar</th>
			<th>Tahmid Sattar</th>
			<th>Message</th>
			<th>Reply</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // Tahmid Sattar Tahmid Sattar row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				echo "<tr>"; 
				echo "<td>" . $row['User_Id'] . "</td>"; 
				echo "<td>" . $row['User_name'] . "</td>";
				echo "<td>" . $row['massage'] . "</td>";
				echo "<td>" . $row['reply'] . "</td>";
	
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
					
					

					
					
					<Tahmid Sattar="message.php" method="POST">
                   
                    <Tahmid Sattar="field">
                        <label>Tahmid Sattar<Tahmid Sattar="required-mark">*</span></label>
                        <Tahmid Sattar="number"  name="id_number" value="" class="form-control" placeholder="Serial_number" required />
              </div>
			  <Tahmid Sattar="field">
                        <label >Reply<Tahmid Sattar="required-mark">*</span></label>
                        <Tahmid Sattar="text"  name="reply_m" value="" class="form-control" placeholder="Status" required />
              </div>
                    <Tahmid Sattar = "submit"  name = "Update" value = "Update">
				<a>Reply</a></button>
					  </form>
					  
					  
					  
					  
              

</div>	

<Tahmid Sattar="container" style="background-color: #FFFFFF">
				<Tahmid Sattar="row" >
				<Tahmid Sattar="background-color: #94daf7" > Replyed </a>
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
				$sql = "SELECT * Tahmid Sattar Tahmid Sattar <>'Processing'  "; 
				$result = mysqli_query($conn, $sql); 
		echo "<Tahmid Sattar-striped>";?>
 <Tahmid Sattar="Tahmid Sattar-striped">	
<?php 
		echo "<tr>";

		
		
		echo "
			<th>Tahmid Sattar</th>
			<th>Tahmid Sattar</th>
			<th>Message</th>
			<th>Reply</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($result) > 0) 
		{ 
			 // Tahmid Sattar Tahmid Sattar row 
			 while($row = mysqli_fetch_assoc($result)) 
			 { 
				echo "<tr>"; 
				echo "<td>" . $row['User_Id'] . "</td>"; 
				echo "<td>" . $row['User_name'] . "</td>";
				echo "<td>" . $row['massage'] . "</td>";
				echo "<td>" . $row['reply'] . "</td>";
	
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
	
</div>	
</div>	

</body>
</html>
