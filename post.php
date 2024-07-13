<?php
include('includes/config.php');

if (isset($_GET['title'])) {
    $slug = mysqli_real_escape_string($con, $_GET['title']);

    $metapost = "SELECT meta_title,meta_description, slug ,meta_keyword FROM posts WHERE slug='$slug' AND status='0' LIMIT 1";
    $metapost_run = mysqli_query($con, $metapost);


    if (mysqli_num_rows($metapost_run) > 0) {

        $metapostItem = mysqli_fetch_array($metapost_run);
        $page_title = $metapostItem['meta_title'];
        $meta_description = $metapostItem['meta_description'];
        $meta_keywords = $metapostItem['meta_keyword'];
    } else {
        $page_title = "Post Page";
        $meta_description = "Post page Description blogging website";
        $meta_keywords = "php, html, css, laravel, codeigniter";
    }
} else {
    $page_title = "Post Page";
    $meta_description = "Post page Description blogging website";
    $meta_keywords = "php, html, css, laravel, codeigniter";
}


include('./includes/header.php');
include('./includes/navbar.php');

?>


<?php

if (isset($_GET['title'])) {
    $slug = mysqli_real_escape_string($con, $_GET['title']);

    $post = "SELECT * FROM posts WHERE slug='$slug' ";
    $post_run = mysqli_query($con, $post);

    if (mysqli_num_rows($post_run) > 0) {




        foreach ($post_run as $postItems) {
?>




            <section id="product" class="py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="<?= $postItems['image'] ?? "./assets/images/logo.png" ?>" alt="product" class="img-fluid">
                            
                        </div>
                        <div class="col-sm-6 py-5">
                            <h5 class="font-baloo font-size-20"><?php echo $postItems['name'] ?? "Unknown" ?> </h5>
                            <small>by <?php echo $postItems['brand'] ?? "Gyann Kosh" ?> </small>

                            <hr class="m-0">

                            <!---    product price       -->
                            Posted On: <?= date('d-M-Y', strtotime($postItems['created_at'])); ?>
                            <!---    !product price       -->

                            <!--    #policy -->

                            <!--    !policy -->
                            <hr>




                        </div>

                        <div class="col-12">
                            <hr>
                            <div class="hide-in-mobile">
                                <?= $postItems['description']; ?>

                            </div>

                            <div id="summernote1" class="note-editable">
                                <style>
                                    

                                    .note-editable {
                                        display: none;
                                        visibility: hidden;

                                    }

                                    @media only screen and (max-width: 600px) {
                                        .note-editable {
                                            background-color: #fff !important;
                                            text-size-adjust: auto !important;
                                            -ms-text-size-adjust: auto !important;
                                            outline: none !important;
                                            
                                        }
                                        .note-editable h1 {
                                            text-size-adjust: 12px;
                                            
                                        }

                                        .note-editable {
                                            display: block;
                                            visibility: visible;

                                        }

                                        .hide-in-mobile {
                                            display: none;
                                        }
                                    }
                                </style>
                                <?= $postItems['description']; ?>


                            </div>
                            <script>
                                $("#summernote1").summernote({

                                    toolbar: [
                                        ['para', ['ul']]
                                    ],
                                    focus: true,
                                    disableResizeEditor: true
                                });
                                $("#summernote1").summernote("disable");
                            </script>

                        </div>
                    </div>
                </div>
            </section>
            <!--   !product  -->



        <?php
        }
    } else {
        ?>
        <h4>No such Post Found</h4>
    <?php
    }
} else {
    ?>
    <h4>No such url Found</h4>
<?php
}

?>

</div>



<?php
include('./includes/footer.php');

?>