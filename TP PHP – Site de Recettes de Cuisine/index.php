<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Les Délices Maison</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Inclure le menu et l'en-tete -->
        <?php
        include_once 'includes/menu.php';
        include_once 'includes/header.php';
        ?>
    </header>

    <main class="container">
        <h1 class="site-title">Bienvenue sur Les Délices Maison</h1>
        
        <section class="intro-text">
            <p>
                Votre nouvelle référence culinaire pour des repas savoureux et faciles à réaliser.
            </p>
            <p>
                Notre but est de partager avec vous des recettes authentiques, des astuces pratiques et notre passion pour la bonne cuisine.
                Que vous cherchiez une idée pour le dîner de ce soir ou que vous vouliez impressionner vos convives, vous êtes au bon endroit.
            </p>
            <br>
            <p>
                <a href="Recettes.php" style="color: #d2691e; font-weight: bold;">Recettes du moment à savourer... &rarr;</a>
            </p>
           
            
        </section>
    </main>

    <footer>
        <?php include_once 'include/footer.php'; ?>
    </footer>
</body>
</html>
