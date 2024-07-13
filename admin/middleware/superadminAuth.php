<?php

if( $_SESSION['auth_role'] != "2")
{
    $_SESSION['message'] = "You are not Authorized as Super admin";
header("Location: index.php");
exit(0);
}

?>