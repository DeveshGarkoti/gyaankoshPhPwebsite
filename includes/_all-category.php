<div class="py-5 " style="background-color: #2F3A8F;">
    <div class="container ">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-light">All Categories</h3>
                <div class="red-underline">

                </div>


            </div>


            <?php
            $categories = "SELECT slug,meta_description,name,id FROM category WHERE status='0' ORDER BY id DESC  LIMIT 3";
            $categories_run = mysqli_query($con, $categories);

            if (mysqli_num_rows($categories_run) > 0) {
                foreach ($categories_run as $Item) {
            ?>
                    <div class="col-lg-4  ">


                        <a class="text-decoration-none" href="<?= base_url('category/' . $Item['slug']) ?>" class="text-decoration-none">
                            <div class="card mr-1 mb-4 text-center">

                                <h2 class="text-muted" > <?= $Item['name']; ?></h2>
                                <p class="text-muted"> <?= $Item['meta_description'] ?> </p>
                                <p><a class="btn btn-secondary" href="<?= base_url('/' . $Item['slug']) ?>" role="button">View details &raquo;</a></p>
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