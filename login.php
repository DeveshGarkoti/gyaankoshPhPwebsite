<?php
include('includes/config.php');

$page_title = "Login Page";
$meta_description = "Login page Description blogging website";
$meta_keywords = "php, html, css, laravel, codeigniter";



if(isset($_SESSION['auth']))
{
    if(! isset($_SESSION['message']))
    {
        $_SESSION['message'] = "You are already Logged in";
    }
    header("location: index.php");
    exit(0); 
    
}

include('./includes/header.php');
include('./includes/navbar.php');

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
            <?php include('message.php')  ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">

                        <form action="logincode.php" method="POST">
                        <div class="form-group md-3">
                            <label for="email">Email-id</label>
                            <input type="email" name="email" placeholder="Enter Email Address" class="form-control">
                        </div>
                        <div class="form-group md-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="Enter password" class="form-control">
                        </div>
                        <br>
                        <div class="form-group md-3">
                            <button type="submit" name="login_btn" class="btn btn-primary">Login now</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('./includes/footer.php');

?>