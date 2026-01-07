<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - Les Délices Maison</title>
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
        <h1 class="site-title">À Propos de Nous</h1>

        <section class="about-content">
            <h2 style="color: #d2691e; font-weight: bold; text-align: center; text-shadow: #e1c7b4ff 2px 2px;">Notre Passion pour la Cuisine</h2>
            <p>
                Bienvenue sur <strong>Les Délices Maison</strong>, votre destination privilégiée pour découvrir des recettes authentiques et savoureuses. 
                Ce site est né d'une passion simple : le plaisir de partager de bons repas en famille et entre amis.
            </p>
            <p>
                Notre mission est de rendre la cuisine accessible à tous, que vous soyez un débutant cherchant à impressionner vos invités ou un expert en quête de nouvelles inspirations. 
                Nous sélectionnons rigoureusement nos recettes pour garantir fraîcheur, goût et simplicité.
            </p>

            <h2 style="color: #d2691e; text-align: center; font-weight: bold; text-shadow: #e1c7b4ff 2px 2px;">L'Auteur</h2>
            <p>
                Je suis <span style="color: #7c10e8ff; font-weight: bold;text-shadow: #e1c7b4ff 2px 2px;">Thierry RAMANITRA</span>, passionné de gastronomie depuis mon plus jeune âge. Après avoir voyagé à travers le monde pour découvrir  les saveurs de différentes cultures, j'ai décidé de créer ce site pour partager mes coups de cœur culinaires.
            </p>
            <p>
                N'hésitez pas à parcourir nos recettes et à tester nos astuces. Bon appétit ! <br>
                <a href="Recettes.php" style="color: #d2691e; font-weight: bold;">Découvrez nos recettes du moment &rarr;</a>
            </p>
        </section>
    </main>

    <footer>
        <?php include_once 'includes/footer.php'; ?>
    </footer>
</body>
</html>