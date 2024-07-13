<div class="container mt-4 mb-4">

    <?php
    $homeposts = "SELECT slug,meta_description, image,name,id FROM posts WHERE status='0'  LIMIT 3";
    $homeposts_run = mysqli_query($con, $homeposts);

    if (mysqli_num_rows($homeposts_run) > 0) {
        foreach ($homeposts_run as $postItem) {
    ?>
            <a class="text-decoration-none" href="<?= base_url('post/' . $postItem['slug']) ?>" >

                <div class="row featurette">

                    <div class="col-md-7">
                        <h2 class="text-muted"><?= $postItem['name']; ?> <span class="text-muted">It'll blow your mind.</span></h2>
                        <p class="text-muted lead">
                            <?= $postItem['meta_description'] ?>

                        </p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" src="<?= $postItem['image'] ?>" alt="<?= $postItem['name']; ?>">
                    </div>
                </div>
            </a>

            <hr>




    <?php

        }
    }

    ?>





</div>