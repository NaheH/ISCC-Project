<?php 
$url = $_SERVER['PHP_SELF'];
?>
<nav>
    <ul class="nav-group">
        <li class="nav-group-item">
            <a class="nav-group-item-link" <?php if(str_contains($url, "index")) echo 'style="color: #00bfff; font-weight: bold;"' ?> href="/" title="Retourner à l'accueil">
                Accueil
            </a>
        </li>

        <li class="nav-group-item">
            <a class="nav-group-item-link" <?php if(str_contains($url, "accueil")) echo 'style="color: #00bfff; font-weight: bold;"' ?> href="?page=articles" title="Découvrez nos produits">
                Voir nos produits
            </a>
        </li>

        <li class="nav-group-item">
            <a class="nav-group-item-link" <?php if(str_contains($url, "accueil")) echo 'style="color: #00bfff; font-weight: bold;"' ?> href="?page=apropos" title="Retourner à l'accueil">
                A propos de nous
            </a>
        </li>
    </ul>
</nav>
