<hr>
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
            $homeposts = "SELECT slug,meta_description, image,name,id FROM posts WHERE status='0' ORDER BY id DESC ";
            $homeposts_run = mysqli_query($con, $homeposts);

            if (mysqli_num_rows($homeposts_run) > 0) {
                foreach ($homeposts_run as $postItem) {
            ?>
                    <div class="col-lg-4 ">


                        <a class="text-decoration-none" href="<?= base_url('post/' . $postItem['slug']) ?>" >
                            <div class="card mr-1 mb-4 text-center ">
                                <div class="shadow-sm ">
                                    <img class="rounded-circle  m-4" src="<?= $postItem['image'] ?>" alt="<?= $postItem['name']; ?>" width="140" height="140">
                                
                                <h2> <?= $postItem['name']; ?></h2>
                                <p class="text-decoration-none"> <?= $postItem['meta_description'] ?> </p>
                                <p><a class="btn btn-secondary"  style="background-color: #2F3A8F; color: #ffffff; " href="<?= base_url('post/' . $postItem['slug']) ?>" role="button">View details &raquo;</a></p>

                                </div>

                            </div>

                        </a>

                    </div>


            <?php

                }
            }

            ?>
        </div><!-- /.row -->
    </div>
</div>