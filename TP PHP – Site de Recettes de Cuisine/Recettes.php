<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Délices Maison</title>
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
        <!-- Titre et Introduction -->
       
        <section class="intro-text"> 
            <p>
                Découvrez une sélection de recettes de cuisine simples et délicieuses. 
                Que vous soyez débutant ou cuisinier expérimenté, vous trouverez votre bonheur 
                parmi nos plats traditionnels et nos astuces culinaires.
            </p>
        </section>

        <!-- Tableau des Recettes -->
        <section class="recettes-section">
            <h2 class="site-title">Nos Recettes</h2>
            <?php
            // Inclusion des données pour l'affichage du tableau des recettes
            include_once 'data/recettes.php';

// Affichage du tableau des recettes seulement si des recettes sont disponibles
            if (isset($recettes) && count($recettes) > 0) {
            ?>
                <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                    <thead>
                        <tr style="background-color: #db7272ff;">
                            <th>Présentation</th>
                            <th>Recettes</th>
                            <th>Temps de cuisson</th>
                            <th>Difficulté</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Boucle pour afficher chaque recette dans le tableau -->
                        <?php foreach ($recettes as $recette): ?>
                            <tr>
                                <td>
                                    <?php if (isset($recette['image'])): ?>
                                        <img src="<?php echo htmlspecialchars($recette['image']); ?>" alt="<?php echo htmlspecialchars($recette['titre']); ?>" style="width: 100px; height: auto; border-radius: 8px;">
                                    <?php endif; ?>
                                </td>
                               
                                <td><strong><?php echo htmlspecialchars($recette['titre']); ?></strong></td>
                                <td><?php echo htmlspecialchars($recette['temps']); ?></td>
                                <td>
                                    <span class="recipe-difficulty difficulty-<?php echo strtolower($recette['difficulte']); ?>">
                                        <?php echo htmlspecialchars($recette['difficulte']); ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- Lien permettant de naviguer vers les ingredients & prparation -->
                <p>
                <a href="astuces.php" style="color: #d2691e; font-weight: bold;"> Etes-vous prêt pour la préparation? &rarr;</a>
            </p>
            <?php 
            } else {
                echo "<p>Aucune recette disponible pour le moment.</p>";
            }
            ?>
        </section>
    </main>

    <footer>
        <?php include_once 'includes/footer.php'; ?>
    </footer>
</body>
</html>
