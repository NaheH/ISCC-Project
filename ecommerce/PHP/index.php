<?php
session_start();
include "./parts/header.php";
include "./parts/nav.php";
?>
<?php 
$page = array_key_exists("page", $_GET)? $_GET['page'] : false;
$parties = [
    "accueil",
    "connection",
    "article",
    "articles",
    "apropos"
];

if(in_array($page, $parties) || !$page){
    include "./pages/".$page.".php";
} else {
    include "./pages/404.php";
}

?>
<?php
include "./parts/footer.php";
?>