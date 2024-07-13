<?php
include('authentication.php');
include('config/dbcon.php');
include('includes/header.php');
?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Post</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Post</li>
        <li class="breadcrumb-item "> Add Post</li>

    </ol>
    <div class="row">
        
        <div class="col-md-12">
        <?php include('message.php') ?>
            <div class="card">
                <div class="card-header">
                    <h4>View Post
                    <a href="post-add.php" class="btn btn-primary float-end ">Add Post</a>
                    </h4>
                </div>
                <div class="card-body">

                <div class="table-responsive">
                        <table class="table table-bordered table-stripe">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>

                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>


                                </tr>
                                

                            </thead>
                            <tbody>
                                
                <?php
                    $post = "SELECT p.*, c.name AS cname FROM posts p, category c WHERE c.id = p.category_id ";
                    $post_run = mysqli_query($con, $post);

                    if(mysqli_num_rows($post_run)>0)
                    {
                        foreach ($post_run as $item) 
                        {
                            ?>
                            <tr>
                                <td><?= $item['id'] ?> </td>
                                <td><?= $item['name'] ?> </td>

                                <td><?= $item['cname'] ?> </td>
                                <td><img src="<?= $item['image'] ?>" alt="" style=" width: 60px; height: 60px;  "></td>
                                <td><?= $item['status'] == '1'? 'hidden' : 'visible'; ?>    </td>
                                 <td>
                                     <a href="post-edit.php?id=<?= $item['id'] ?>" class="btn btn-primary">Edit</a>
                                 </td>
                                 <td>
                                     <form action="code.php" method="POST">
                                         <button type="submit" name="post_delete" value="<?= $item['id'] ?> " class="btn btn-danger">Delete</button>
                                     </form>
                                 </td>
                            </tr>
                            
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <tr>
                                <td  colspan="5"> No Record Found</td>
                            </tr>
                        <?php
                    }
                    ?>
                    
                                    
                               
                            </tbody>
                        </table>
                    </div>



                </div>



            </div>
        </div>


    </div>
</div>


<?php
include('includes/footer.php');
include('includes/scripts.php');
?>