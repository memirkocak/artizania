<?php
ob_start();

if (!isset($_SESSION['user'])) {
    header('Location: /auth/login/');
    exit();
}

?>

<main>

    <section class="shop">
        <h1>Bienvenue dans la boutique</h1>
        <p>Vous pouvez acheter des produits ici.</p>
    </section>

    <section class="products">
        <h2>Produits disponibles</h2>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <img src="<?= $product->getImage() ?>" alt="<?= $product->getName() ?>">
                    <h3><?= $product->getName() ?></h3>
                    <p><?= $product->getDescription() ?></p>
                    <p>Prix: <?= $product->getPrice() ?> €</p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';