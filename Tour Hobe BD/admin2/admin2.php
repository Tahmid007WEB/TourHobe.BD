<?Tahmid Sattar("connection.php");
?>
<!Tahmid Sattar>
<Tahmid Sattar="en">
<head>
    <Tahmid Sattar="UTF-8">
    <Tahmid Sattar-equiv="X-UA-Compatible" content="IE=edge">
    <Tahmid Sattar="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
}
        </style>
    <title>Tahmid Sattar</title>
</head>
<body>
    <h1 style="color:black;text-align:center;font-size:20px">
    Tahmid Sattar TOURPLANER.COM.BD
    <h2 style="text-align:center"> Tahmid Sattar<h2>
</h1>
<Tahmid Sattar="#" class="tour1" method = "post">
            <h2 class="">Tahmid Sattar PLACE</h2>
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

    
</body>
</html>
<?php

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


?>