<?php
require_once('includes/config.php');

$burl = $site_url;
// $purl = $site_url . 'post/';
$curl = $site_url . 'category/';

header("Content-Type: application/xml; charset=utf-8");

echo '<!--?xml version="1.0" encoding="UTF-8"?-->' . PHP_EOL;

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemalocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
echo '<url>' . PHP_EOL;
echo '<loc>' . $burl . '</loc>' . PHP_EOL;
echo '<changefreq>daily</changefreq>' . PHP_EOL;
echo '</url>' . PHP_EOL;



$homeposts = "SELECT slug,id FROM posts WHERE status='0' ORDER BY id DESC ";
$homeposts_run = mysqli_query($con, $homeposts);

if (mysqli_num_rows($homeposts_run) > 0) {
    foreach ($homeposts_run as $postItem) {
        echo '<url>' . PHP_EOL;
        echo '<loc>' . base_url('post/' . $postItem['slug']) . '</loc>';
        echo '<changefreq>daily</changefreq>' . PHP_EOL;

        // $postItem['meta_description'];
        echo '</url>' . PHP_EOL;
    }
}

$category = "SELECT slug,id FROM category WHERE status='0' ORDER BY id DESC ";
$category_run = mysqli_query($con, $category);

if (mysqli_num_rows($category_run) > 0) {
    foreach ($category_run as $categoryItem) {
        echo '<url>' . PHP_EOL;
        echo '<loc>' . base_url('category/' . $categoryItem['slug']) . '</loc>';
        echo '<changefreq>daily</changefreq>' . PHP_EOL;

        // $postItem['meta_description'];
        echo '</url>' . PHP_EOL;
    }
}


echo '</urlset>' . PHP_EOL;
