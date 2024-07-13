<?php

include('authentication.php');
include('middleware/superadminAuth.php');


// user_delete
if(isset($_POST['category_delete']))
{
    $category_id = $_POST['category_delete'];

    $query = "UPDATE category SET status='2' WHERE id='$category_id' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Delete Successfully"; 
        header('Location: category-view.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went Wrong."; 
        header('Location: category-view.php');
        exit(0);
    }
}


?>
