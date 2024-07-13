<?php

include('includes/config.php');

if (isset($_GET['title'])) {
    $slug = mysqli_real_escape_string($con, $_GET['title']);

    $category = "SELECT meta_title,meta_description, slug ,meta_keyword FROM category WHERE slug='$slug' AND status='0' LIMIT 1";
    $category_run = mysqli_query($con, $category);

    if (mysqli_num_rows($category_run) > 0) {
        $categoryItem = mysqli_fetch_array($category_run);
        $page_title = $categoryItem['meta_title'];
        $meta_description = $categoryItem['meta_description'];
        $meta_keywords = $categoryItem['meta_keyword'];
    } else {
        $page_title = "Category Page";
        $meta_description = "Category page Description blogging website";
        $meta_keywords = "php, html, css, laravel, codeigniter";
    }
} else {
    $page_title = "Category Page";
    $meta_description = "Category page Description blogging website";
    $meta_keywords = "php, html, css, laravel, codeigniter";
}



include('./includes/header.php');
include('./includes/navbar.php');

?>

<div class="py-5">
    <div class="container">
        <div class="row">

            <?php

            if (isset($_GET['title'])) {
                $slug = mysqli_real_escape_string($con, $_GET['title']);

                $category = "SELECT id, slug FROM category WHERE slug='$slug' AND status='0' LIMIT 1 ";
                $category_run = mysqli_query($con, $category);

                if (mysqli_num_rows($category_run) > 0) {
                    $categoryItem = mysqli_fetch_array($category_run);
                    $category_id = $categoryItem['id'];

                    $post = "SELECT id ,meta_description,category_id,image,name,slug,created_at FROM posts WHERE category_id='$category_id' ";
                    $post_run = mysqli_query($con, $post);

                    if (mysqli_num_rows($post_run) > 0) {
                        foreach ($post_run as $postItem) {
            ?>

                            <div class="col-lg-4  ">


                                <a class="text-decoration-none" href="<?= base_url('post/' . $postItem['slug']) ?>" class="text-decoration-none">
                                    <div class="card mr-1 mb-4 text-center">

                                        <img class="rounded-circle m-4" src="<?= $postItem['image'] ?>" alt="<?= $postItem['name']; ?>" width="140" height="140">
                                        <h3 class="text-muted"> <?= $postItem['name']; ?></h3>
                                        <p class="text-muted"> <?= $postItem['meta_description'] ?> </p>
                                        <p><a class="btn btn-secondary" href="<?= base_url('post/' . $postItem['slug']) ?>" role="button">View details &raquo;</a></p>
                                        <div>
                                            <div class="text-dark me-2">Posted On: <?= date('d-M-Y', strtotime($postItem['created_at'])); ?> </div>
                                        </div>
                                    </div>

                                </a>

                            </div>


                        <?php
                        }
                    } else {
                        ?>
                        <h4>No Post Attribute</h4>
                    <?php
                    }
                } else {
                    ?>
                    <h4>No such category Found</h4>
                <?php
                }
            } else {
                ?>
                <h4>No such url Found</h4>
            <?php
            }

            ?>




        </div>
    </div>
</div>


<?php
include('./includes/footer.php');

?>