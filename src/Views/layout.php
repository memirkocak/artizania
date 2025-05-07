<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>— Artizania —</title>
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <main>

        <header>
            <div class="container">
                <nav>
                    <ul>
                        <?php if (isset($_SESSION['user'])): ?>
                            <li><a href="/">Accueil</a></li>
                            <li><a href="/shop/">Boutique</a></li>
                            <li><a href="/cart/">Panier</a></li>
                            <li><a href="/profile/">Profil</a></li>
                            <li><a href="/admin/admin/">Admin</a></li> <!-- Ce lien est ici temporairement -->
                            <?php if (isset($_SESSION['admin']) && $_SESSION['admin']): ?>
                                <li><a href="/admin/">Admin</a></li>
                            <?php endif; ?>
                            <li><a href="/auth/logout/">Déconnexion</a></li>
                        <?php else: ?>
                            <li><a href="/auth/login/">Connexion</a></li>
                            <li><a href="/auth/register/">Inscription</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </header>
            


        <?php echo $content; ?>
    </main>
</body>
</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['old']);