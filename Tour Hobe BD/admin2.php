<?Tahmid Sattar("connection.php");
?>
<!Tahmid Sattar>
<html>
<head>
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
.input-field{
            padding:20px;
            box-size:20px;
            
        }

        input{
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
.tour1{
  
  justify-content: center;
  align-items: center;
  text-align:center;
  border: 3px solid #73AD21;
  padding:10px;
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
  <Tahmid Sattar="active" href="admin2.php">Tahmid Sattar Delete</a>
  <Tahmid Sattar="userlist.php">Tahmid Sattar</a>
  <Tahmid Sattar="message.php">Tahmid Sattar</a>
  <Tahmid Sattar="booking.php">Tahmid Sattar</a>
  <Tahmid Sattar="login.php">Exit</a>
</div>

<Tahmid Sattar="content">
<h1 style="text-align:center;color:black;padding:20px">Tahmid Sattar<h1>


  <Tahmid Sattar="#" class="tour1" method = "post">
            <h2 class="">Tahmid Sattar Tahmid Sattar Tahmid Sattar</h2>
            <Tahmid Sattar="input-field">
              
              <Tahmid Sattar="text" placeholder="Tahmid Sattar Tahmid Sattar"  name = "login_user" />
            </div>
            <Tahmid Sattar="input-field">
             
              <Tahmid Sattar="text" placeholder="Tahmid Sattar ID 11 CHARACTER"  name = "email"/>
            </div>
            <Tahmid Sattar="input-field">
             
              <Tahmid Sattar="text" placeholder="Tahmid Sattar"  name = "password"/>
            </div>
            <Tahmid Sattar="submit" class="btn" value="INSERT" name = "store" />
            <Tahmid Sattar="submit" class="btn" value="DELETE" name = "store2" />
            
          </form>
          
          <Tahmid Sattar="#" class="tour1" method = "post">
            <h2 class="">Tahmid Sattar PACKAGE</h2>
            <Tahmid Sattar="input-field">
              
              <Tahmid Sattar="text" placeholder="Tahmid Sattar Name"  name = "packname" />
            </div>
            <Tahmid Sattar="input-field">
             
              <Tahmid Sattar="text" placeholder="Tahmid Sattar"  name = "packlocation"/>
            </div>
            <Tahmid Sattar="input-field">
             
              <Tahmid Sattar="text" placeholder="Tahmid Sattar"  name = "packprice"/>
            </div>
            <Tahmid Sattar="input-field">
             
              <Tahmid Sattar="text" placeholder="Tahmid Sattar"  name = "packfeature"/>
            </div>
            <Tahmid Sattar="input-field">
             
              <Tahmid Sattar="text" placeholder="Tahmid Sattar Tahmid Sattar website"  name = "packimage"/>
            </div>
            <Tahmid Sattar="input-field">
             
              <Tahmid Sattar="text" placeholder="Tahmid Sattar Date"  name = "packdelete"/>
            </div>
            <Tahmid Sattar="input-field">
             
              <Tahmid Sattar="text" placeholder="Tahmid Sattar"  name = "packdetails"/>
            </div>
            <Tahmid Sattar="submit" class="btn" value="INSERT" name = "store3" />
            <Tahmid Sattar="submit" class="btn" value="DELETE" name = "store4" />
            
          </form>
</div>

</body>
</html>
<?php

if(isset($_POST['store3'])){
$one = $_POST['packname'];
$two = $_POST['packlocation'];
$three = $_POST['packprice'];
$four = $_POST['packfeature'];
$five = $_POST['packimage'];

$seven = $_POST['packdelete'];
$eight = $_POST['packdetails'];
$query="Tahmid Sattar insert_image VALUES ('','add','$five','$one','','$two','$three','$four','$eight','Tahmid Sattar','$seven')";

$data = mysqli_query($conn,$query);

if($data)
{
  
  echo '<script>alert("Tahmid Sattar Tahmid Sattar")</script>';
  

}
else{
  
  echo '<script>alert("Tahmid Sattar Tahmid Sattar Tahmid Sattar")</script>';
}
}
if(isset($_POST['store4'])){
  $one = $_POST['packname'];
  
  $query="Tahmid Sattar Tahmid Sattar name='$one'";
  $data = mysqli_query($conn,$query);
  
  if($data)
  {
    
    echo '<script>alert("Tahmid Sattar Tahmid Sattar")</script>';
    
  
  }
  else{
    
    echo '<script>alert("Tahmid Sattar Tahmid Sattar Tahmid Sattar")</script>';
  }
  }
if(isset($_POST['store2'])){
    $use = $_POST['login_user'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    
    $query="Tahmid Sattar Tahmid Sattar name='$use'";
    $data = mysqli_query($conn,$query);
    
    if($data)
    {
      
      echo '<script>alert("Tahmid Sattar Tahmid Sattar")</script>';
      
    
    }
    else{
      
      echo '<script>alert("Tahmid Sattar Tahmid Sattar")</script>';
    }
    }
    if(isset($_POST['store'])){
      $use = $_POST['login_user'];
      $email = $_POST['email'];
      $pass = $_POST['password'];
      
      
      $query="Tahmid Sattar Tahmid Sattar ('','$use','$email','$pass')";
      $data = mysqli_query($conn,$query);
      
      if($data)
      {
        
        echo '<script>alert("Tahmid Sattar Tahmid Sattar")</script>';
        
      
      }
      else{
        
        echo '<script>alert("Tahmid Sattar Tahmid Sattar Tahmid Sattar")</script>';
      }
      }


?>