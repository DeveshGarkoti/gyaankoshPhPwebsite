<?php
include('includes/config.php');

$meta_description = "Home page Description blogging website";
$meta_keywords = "php, html, css, laravel, codeigniter";

include('./includes/header.php');
include('./includes/navbar.php');

?>


<div class="py-5 ">
    <div class="container ">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-dark">All Post</h3>
                <div class="red-underline">

                </div>


            </div>


            <?php
            if(isset($_POST['search_btn']))
            {
                $search = $_POST['search'];
            
                
              
            
            $searchposts = "SELECT slug,meta_description, image,name,id FROM posts WHERE  name LIKE '%$search%' OR meta_description LIKE '%$search%' OR description LIKE '%$search%' OR slug LIKE '%$search%' OR meta_keyword LIKE '%$search%'";
            $searchposts_run = mysqli_query($con, $searchposts);

            if (mysqli_num_rows($searchposts_run) > 0) {
                foreach ($searchposts_run as $postItem) {
            ?>
                    <div class="col-lg-4 ">


                        <a class="text-decoration-none" href="<?= base_url('post/' . $postItem['slug']) ?>" class="text-decoration-none">
                            <div class="card mr-1 mb-4 text-center ">
                                <div class="shadow-sm ">
                                    <img class="rounded-circle  m-4" src="<?= $postItem['image'] ?>" alt="<?= $postItem['name']; ?>" width="140" height="140">
                                
                                <h2> <?= $postItem['name']; ?></h2>
                                <p class="text-decoration-none"> <?= $postItem['meta_description'] ?> </p>
                                <p><a class="btn btn-secondary" href="<?= base_url('post/' . $postItem['slug']) ?>" role="button">View details &raquo;</a></p>

                                </div>

                            </div>

                        </a>

                    </div>


            <?php

                }
            }
            else
            {
                echo "No Posts"; 
            }
        }

            ?>
        </div><!-- /.row -->
    </div>
</div>



<?php
include('./includes/footer.php');

?>