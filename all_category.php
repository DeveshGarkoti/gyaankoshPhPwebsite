<?php
include('includes/config.php');

$meta_description = "Home page Description blogging website";
$meta_keywords = "php, html, css, laravel, codeigniter";

include('./includes/header.php');
include('./includes/navbar.php');

?>

<?php include('message.php'); ?>

<!-- Banner Area -->
<!-- <?php include('./includes/_banner-area.php'); ?> -->

<!-- !Banner Area -->
<div class="container">
<h1>All The Categories</h1>

</div>

<!-- Banner Area -->
<?php include('./includes/_all-category.php'); ?>

<!-- !Banner Area -->

<?php
include('./includes/footer.php');

?>