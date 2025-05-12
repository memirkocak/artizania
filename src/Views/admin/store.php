<?php
ob_start();

if (!isset($_SESSION['user'])) {
    header('Location: /auth/login/');
    exit();
}

?>

<main>

    <form action="/store" method="post">
        <div>
            <label for="name">Nom du produit</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="price">Prix (€)</label>
            <input type="text" name="price" id="price" required>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image" accept="image/*" >
        </div>
        <div>
            <label for="category">Catégorie</label>
            <select name="category" id="category" required>
                <option value="bijoux">Bijoux</option>
                <option value="decorations">Décorations</option>
                <option value="accessoires">Accessoires</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Ajouter le produit">
        </div>
    </form>

</main>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';