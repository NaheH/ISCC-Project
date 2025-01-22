<?php 
$test = "accueil";
$url = $_SERVER['PHP_SELF'];
?>
<style>
    h1{
        color: red;
        font-size: 50px;
    }
    .surlignage{
        color: green;
    }
</style>
<?php var_dump(str_contains($url, "test.php")); ?>
<?php
function determinePage($url = "http://localhost/qqch/autrechoe/accueil.php"){
    $isActive = "";
    if(str_contains($url, "accueil")){
        $isActive = "Accueil";
    } elseif(str_contains($url, "connection")){
        $isActive = "Connection";
    } 
    echo $isActive;
}
