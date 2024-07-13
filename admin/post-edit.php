<?php
include('authentication.php');
include('includes/header.php');
?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Posts</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Posts</li>
        <li class="breadcrumb-item "> Edit Posts</li>

    </ol>
    <div class="row">
    
        <div class="col-md-12">

        <?php include('message.php') ?>
            <div class="card">
                <div class="card-header">
                    <h4 >Edit Posts
                    <a href="category-view.php" class="btn btn-danger float-end ">Back</a>
                    </h4>
                </div>
                <div class="card-body col-md-12">

                <?php 
                if(isset($_GET['id']))
                {
                    $post_id = $_GET['id'];
                    $post_query = "SELECT * FROM posts WHERE id='$post_id' LIMIT 1";
                    $post_query_run = mysqli_query($con, $post_query);

                    if(mysqli_num_rows($post_query_run)>0)
                    {
                        $post_row = mysqli_fetch_array($post_query_run);

                        ?>
                        <form action="code.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="post_id" value="<?= $post_row['id'] ?>">

                        <div class="row">
                            <div class="col-md-12 mb-3">
                            <label for="ca">Category List</label>
                            <?php
                                $category = "SELECT * FROM category WHERE status='0' ";
                                $category_run = mysqli_query($con, $category);

                                if(mysqli_num_rows($category_run)>0)
                                {
                                    ?>
                                    <select name="category_id" required id="" class="form-control">
                                        <option value="">--Select Category--</option>
                                        
                                        <?php foreach ($category_run as $categoryitem) {
                                            ?>
                                        
                                        <option value="<?= $categoryitem['id'] ?>" <?= $categoryitem['id'] == $post_row['category_id'] ? 'selected' :'' ?> > 
                                            <?= $categoryitem['name'] ?></option>

                                            <?php

                                        } ?>
                                    </select> 
                                    <?php
                                } 
                                else
                                {
                                    ?>
                                    <h6>No category Available</h6>
                                    <?php
                                }
                            ?>
                                                           
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="<?= $post_row['name'] ?>" required class="form-control">
                                
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="slug">Slug (url) <i>Please remove any special characters like $ form slug  And Make it Unique</i> </label>
                                <input type="text" name="slug" value="<?= $post_row['slug'] ?>" required class="form-control">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="description">Description</label>
                                <textarea name="description"  required class="form-control" id="summernote" rows="10"> <?=  htmlentities($post_row['description']);  ?> </textarea>
                            </div>


                            <div class="col-md-12 mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" value="<?= $post_row['meta_title']  ?>" required class="form-control">

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" required class="form-control" rows="10"> <?= $post_row['meta_description']  ?> </textarea>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="meta_keyword">Meta Keyword</label>
                                <input type="text" max="191" value="<?= $post_row['meta_keyword']  ?>" name="meta_keyword" required class="form-control">

                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="image">Image Link </label>
                                <input type="text" name="image" value="<?= $post_row['image'] ?>" id="fileToUpload"  class="form-control">
                                
                            </div>
                            <div class="col-md-12  mb-3">
                                <img src="<?= $post_row['image'] ?>" alt="" class="border shadow border-secondary rounded-top img-thumbnail img-fluid" width="400"   srcset="">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="status">Status</label>
                                <input type="checkbox" name="status" <?= $post_row['status'] == '1'? 'checked': '' ?>  width="70px" height="70px">
                                <p>Checked = Hidden, Uncheked = Visible</p>
                            </div>

                            <div class="col-md-6 mb-3">
                                <button type="submit" name="post_update" class="btn btn-primary">Update Post</button>
                            </div>
                        </div>

                    </form>

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