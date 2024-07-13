<?php
include('authentication.php');
include('config/dbcon.php');
include('middleware/superadminAuth.php');

include('includes/header.php');
?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item "> Users</li>

    </ol>
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit User</h4>
                </div>
                <div class="card-body col-md-12">
                    <?php 
                    if(isset($_GET['id']))
                    {
                        $user_id = $_GET['id'];
                        $user = "SELECT * FROM users WHERE id='$user_id' " ;
                        $user_run = mysqli_query($con, $user);

                        if (mysqli_num_rows($user_run)>0)
                        {
                            foreach($user_run as $user)
                            {
                                ?>
                                <form action="code.php" method="POST">
                                <input type="hidden" value="<?= $user['id']; ?>" name="user_id"  class="form-control">

                                    <div class="row">
                                    <div class="col-md-6 md-3">
                                        <label for="name">First Name</label>
                                        <input type="text" value="<?= $user['fname']; ?>" name="fname"  class="form-control">
                                    <br>
                                    </div>
                                    
                                    <div class="col-md-6 md-3">
                                        <label for="lname">Last Name</label>
                                        <input type="text" value="<?= $user['lname']; ?>" name="lname" class="form-control">
                                    <br>
                                    </div>
                                    
                                    <div class="col-md-6 md-3">
                                        <label for="email">Email Address</label>
                                        <input type="text" value="<?= $user['email']; ?>" name="email" class="form-control">
                                    
                                    <br>
                                    </div>
                                    
                                    <div class="col-md-6 md-3">
                                        <label for="password">Password</label>
                                        <input type="text"  name="password" value="<?= $user['password']; ?>" class="form-control">
                                        
                                    <br>
                                    </div>
                                    
                                    <div class="col-md-6 md-3">
                                        <label for="role_as">Role as</label>
                                        <select name="role_as" id="role_as" required class="form-control">
                                            <option value="">--Select Role--</option>
                                            <option value="1" <?= $user['role_as'] == '1'? 'selected':'' ?> >Admin</option>
                                            <option value="0" <?= $user['role_as'] == '0'? 'selected':'' ?> >User</option>
                                        </select>
                                        
                                    <br>
                                    </div>
                                    
                                    <div class="col-md-6 md-3">
                                        <label for="status">Status</label>
                                        <input  type="checkbox" name="status" <?= $user['status'] == '1'? 'checked':'' ?> width="70px" height="70px">
                                        
                                    <br>
                                    </div>
                                    
                                    <div class="col-md-6 md-3">
                                        <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
                                    <br>
                                    </div>
                                    </div>

                                </form>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                            <h3>No record found</h3>
                            <?php
                        }
                    }

                    ?>

                    
                </div>
            </div>
        </div>


    </div>
</div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>