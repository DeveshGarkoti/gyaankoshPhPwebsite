<?php
include('authentication.php');
include('config/dbcon.php');
include('includes/header.php');
?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Category</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Category</li>
        <li class="breadcrumb-item "> Add Category</li>

    </ol>
    <div class="row">
    
        <div class="col-md-12">

        <?php include('message.php') ?>
            <div class="card">
                <div class="card-header">
                    <h4 >Edit Category
                    <a href="category-view.php" class="btn btn-danger float-end ">Back</a>
                    </h4>
                </div>
                <div class="card-body col-md-12">
                    <?php
                    $category_id = $_GET['id'];
                    $category_edit = "SELECT * FROM category WHERE id = '$category_id' LIMIT 1";
                    $category_run = mysqli_query($con, $category_edit);

                    if(mysqli_num_rows($category_run)>0)
                    {
                        $row = mysqli_fetch_array($category_run);
                        ?>
                            <form action="code.php" method="POST">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>" required class="form-control">

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" value="<?= $row['name'] ?>" required class="form-control">
                                        
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="slug">Slug (url)</label>
                                        <input type="text" name="slug" value="<?= $row['slug'] ?>" required class="form-control">
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="description">Description</label>
                                        <textarea name="description"  required class="form-control"  rows="10"><?= $row['description'] ?></textarea>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="text" name="meta_title"  value="<?= $row['meta_title'] ?>" required class="form-control">

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="meta_description">Meta Description</label>
                                        <textarea name="meta_description" required class="form-control" rows="10"><?= $row['meta_description'] ?></textarea>

                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="meta_keyword">Meta Keyword</label>
                                        <input type="text" max="191" name="meta_keyword" value="<?= $row['meta_keyword'] ?>" required class="form-control">

                                    </div>


                                    <div class="col-md-6 mb-3">
                                        <label for="navbar_status">Navbar Status</label>
                                        <input type="checkbox" <?= $row['navbar_status'] == '1'? 'checked': '' ?>  name="navbar_status"  width="70px" height="70px">

                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="status">Status</label>
                                        <input type="checkbox" <?= $row['status'] == '1'? 'checked': '' ?> name="status"  width="70px" height="70px">
                                        <p>Checked = Hidden, Uncheked = Visible</p>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <button type="submit" name="category_update" class="btn btn-primary">UPDATE Category</button>
                                    </div>
                                </div>

                                </form>

                        <?php
                    }
                    else
                    {
                        ?>
                        <h4>No Record Found</h4>
                        <?php
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