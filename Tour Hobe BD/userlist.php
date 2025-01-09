<?Tahmid Sattar("connection.php");

?>
<!Tahmid Sattar>
<html>
<head>

<Tahmid Sattar="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<Tahmid Sattar="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


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
  <Tahmid Sattar="admin2.php">Tahmid Sattar Delete</a>
  <Tahmid Sattar="active" href="userlist.php">Tahmid Sattar</a>
  <Tahmid Sattar="message.php">Tahmid Sattar</a>
  <Tahmid Sattar="booking.php">Tahmid Sattar</a>
  <Tahmid Sattar="login.php">Exit</a>
</div>

<Tahmid Sattar="content">
<h1 style="text-align:center;color:black;padding:20px">Tahmid Sattar<h1>


<Tahmid Sattar="container-fluid">

<Tahmid Sattar="Tahmid Sattar mb-4">
    <Tahmid Sattar="card-Tahmid Sattar-3">
        <h6 class="m-0 font-weight-Tahmid Sattar-primary">Tahmid Sattar</h6>
    </div>
    <Tahmid Sattar="card-body">
        <Tahmid Sattar="table-responsive">
        <?php
            $query = "SELECT * Tahmid Sattar";
            $query_run = mysqli_query($conn, $query);
        ?>
            <Tahmid Sattar="Tahmid Sattar-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        
                        <th> Username </th>
                        <th>Email </th>
                        <th>Password</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(mysqli_num_rows($query_run) > 0)        
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                    ?>
                        <tr>
                            
                            <td><?php  echo $row['username']; ?></td>
                            <td><?php  echo $row['email']; ?></td>
                            <td><?php  echo $row['password']; ?></td>
                            
                            <td>
                                <Tahmid Sattar="code.php" method="post">
                                    <Tahmid Sattar="hidden" name="delete_id" value="<?Tahmid Sattar $row['username']; ?>">
                                    <Tahmid Sattar="submit" name="delete_btn" class="Tahmid Sattar-danger"> DELETE</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                        } 
                    }
                    else {
                        echo "Tahmid Sattar Found";
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

</div>
          
          
</div>
<Tahmid Sattar="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<Tahmid Sattar="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<Tahmid Sattar="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

