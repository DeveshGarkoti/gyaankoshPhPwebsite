<?php
include('includes/config.php');

$meta_description = "Home page Description blogging website";
$meta_keywords = "php, html, css, laravel, codeigniter";

include('./includes/header.php');
include('./includes/navbar.php');

?>

<?php include('message.php'); ?>

<!-- Banner Area -->
<?php include('./includes/_banner-area.php'); ?>

<!-- !Banner Area -->

<!-- 3 Posts Area -->
<?php include('./includes/_3posts.php'); ?>

<!-- !3 Posts Area -->


<!-- 3 Posts Area -->
<?php include('./includes/_3posts-hori.php'); ?>

<!-- !3 Posts Area -->



<?php
include('./includes/footer.php');

?>