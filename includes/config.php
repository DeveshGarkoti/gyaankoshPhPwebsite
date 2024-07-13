
<?php 
session_start();
include('admin/config/dbcon.php');

function base_url($slug)
{
    echo 'http://gyaankosh.site/' .$slug;
}

$site_url =  'http://gyaankosh.site/';

?>