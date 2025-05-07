<?php
ob_start();

if (!isset($_SESSION['user'])) {
    header('Location: /auth/login/');
    exit();
}

?>

<main class="admin-dashboard">
    <h1>Tableau de bord Admin</h1>
    <div class="admin-actions">
        <a href="/admin/shop" class="btn-admin">Ajouter un produit</a>
        <a href="/admin/delete" class="btn-admin">Supprimer un produit</a>
        <a href="/admin/update" class="btn-admin">Modifier un produit</a>
        <a href="/admin/user" class="btn-admin">Gérer les utilisateurs</a>
    </div>
</main>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';