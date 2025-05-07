<?php
ob_start();

if (!isset($_SESSION['user'])) {
    header('Location: /auth/login/');
    exit();
}

?>

<main>
    <section class="banner">
        <h1>Bienvenue sur Artizania</h1>
        <p>Découvrez nos produits artisanaux uniques.</p>
        <a href="/shop/" class="btn btn-primary">Explorer la boutique</a>
    </section>

    <section class="categories">
        <h2>Nos Catégories</h2>
        <div class="category-list">
            <div class="category-item">
                <h3>Bijoux</h3>
            </div>
            <div class="category-item">
                <h3>Décorations</h3>
            </div>
            <div class="category-item">
                <h3>Accessoires</h3>
            </div>
        </div>
    </section>
</main>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';