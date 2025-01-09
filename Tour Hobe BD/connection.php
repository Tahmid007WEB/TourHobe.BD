<?php

$servername = "localhost";
$username = "root";
$password="";
$dbname="tour_signup";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Tahmid Sattar";
}
else{
    echo "Tahmid Sattar Tahmid Sattar ".mysqli_connect_error();
}

?>



