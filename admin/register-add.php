<?php
include('authentication.php');
include('middleware/superadminAuth.php');

include('config/dbcon.php');
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
                    <h4>Add User</h4>
                    <a href="view_registered.php" class="btn btn-danger float-end">Back</a>

                </div>
                <div class="card-body col-md-12">

                    <form action="code.php" method="POST">

                        <div class="row">
                            <div class="col-md-6 md-3">
                                <label for="name">First Name</label>
                                <input type="text" name="fname" class="form-control">
                                <br>
                            </div>

                            <div class="col-md-6 md-3">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" class="form-control">
                                <br>
                            </div>

                            <div class="col-md-6 md-3">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" class="form-control">

                                <br>
                            </div>

                            <div class="col-md-6 md-3">
                                <label for="password">Password</label>
                                <input type="text" name="password" class="form-control">

                                <br>
                            </div>

                            <div class="col-md-6 md-3">
                                <label for="role_as">Role as</label>
                                <select name="role_as" id="role_as" required class="form-control">
                                    <option value="">--Select Role--</option>
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>

                                <br>
                            </div>

                            <div class="col-md-6 md-3">
                                <label for="status">Status</label>
                                <input type="checkbox" name="status"  width="70px" height="70px">

                                <br>
                            </div>

                            <div class="col-md-6 md-3">
                                <button type="submit" name="add_user" class="btn btn-primary">Add Admin/User</button>
                                <br>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>


    </div>
</div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>