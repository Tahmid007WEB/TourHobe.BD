<?Tahmid Sattar('connection.php');

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "Tahmid Sattar Tahmid Sattar username='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Tahmid Sattar Tahmid Sattar";
        $_SESSION['status_code'] = "success";
        header('Location: userlist.php'); 
    }
    else
    {
        $_SESSION['status'] = "Tahmid Sattar Tahmid Sattar DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: userlist.php'); 
    }    
}