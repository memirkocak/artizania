<?php
ob_start();

if (!isset($_SESSION['user'])) {
    header('Location: /auth/login/');
    exit();
}

?>

<main>

    <a href="/admin/shop"> Ajouter un produit</a>

</main>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';