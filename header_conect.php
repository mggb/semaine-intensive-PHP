<?php
    session_start();
?>
<header class="header">

    <div class="header-logo-container">
        <img class="header-logo"src="./imgs/target.svg" alt="">
    </div>

    <h1 class="header-title">Find a developer</h1>

    <?php
    if ($_SESSION['connexion'] === true) : ?>
    <a href="#">
        <div class="search-announce">
            <img class="icon-search" src="imgs/search.svg" alt="">
            <p>Trouver une annonce</p>
        </div>
    </a>

    <a href="#" >
        <div class="published-announce" >
            <img class="icon-plus" src="imgs/plus.svg" alt="">
            <p>Poster une annonce</p>
        </div>
    </a>
    <a href="./logOut.php" >
        <div class="published-announce" >
            <img class="icon-plus" src="imgs/plus.svg" alt="">
            <p>Deco</p>
        </div>
    <?php else : ?>
    <a href="#">
        <div class="search-announce">
            <img class="icon-search" src="imgs/search.svg" alt="">
            <p>Inscription</p>
        </div>
    </a>

    <a href="read.php" >
        <div class="published-announce" >
            <img class="icon-plus" src="imgs/plus.svg" alt="">
            <p>Se connecter</p>
        </div>
    </a>
    <?php endif; ?>
</header>