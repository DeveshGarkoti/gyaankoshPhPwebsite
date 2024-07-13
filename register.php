<?php
include('includes/config.php');


$page_title = "Register Page";
$meta_description = "Register page Description blogging website";
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
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="registercode.php" method="post">
                            <div class="form-group md-3">
                                <label for="fname">First Name</label>
                                <input required type="text" name="fname" placeholder="Enter First Name" class="form-control">
                            </div>
                            <div class="form-group md-3">
                                <label for="lname">Last Name</label>
                                <input required type="text" name="lname" placeholder="Enter Last Name" class="form-control">
                            </div>
                            <div class="form-group md-3">
                                <label for="email">Email-id</label>
                                <input required type="email" name="email" placeholder="Enter Email Address" class="form-control">
                            </div>
                            <div class="form-group md-3">
                                <label for="password">Password</label>
                                <input required type="password" name="password" placeholder="Enter password" class="form-control">
                            </div>
                            <div class="form-group md-3">
                                <label for="cpassword">Confirm Password</label>
                                <input required type="password" name="cpassword" placeholder="Enter password" class="form-control">
                            </div>
                            <br>
                            <div class="form-group md-3">
                                <button type="submit" name="register_btn" class="btn btn-primary">Register now</button>
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