<?php

ini_set('display_errors', 1);


$host = 'localhost';
$user = 'u183332876_blog';
$password = 'DxYW&5c&';
$database = 'u183332876_blog';


$con = mysqli_connect("$host", "$user", "$password", "$database" );
if ($con->connect_error){
            header("Location: ../errors/dberror.php");
            echo "Fail" . $con->connect_error;
            die();
}



?>