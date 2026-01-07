<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astuces Culinaires - Les Délices Maison</title>
    <link rel="stylesheet" href="style.css">

    <!-- Ajout de styles pour les details -->
    <style>
        details > summary {
            list-style: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        details > summary::-webkit-details-marker {
            display: none;
        }
        details[open] > summary h3 {
            text-decoration: underline;
        }
        .summary-content {
            display: flex;
            flex-direction: column;
        }
    </style>
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
        <h1 class="site-title">Astuces de chef</h1>
        <div class="intro-text">
            <p>Quelques astuces de chef pour vous aider dans la préparation des recettes.</p>    
        </div>
        <section class="tips-container">
            <?php
            include_once 'data/recettes.php';
            
            if (isset($recettes) && count($recettes) > 0) {
                foreach ($recettes as $astuce) {
                    echo '<div class="tip">';
                    echo '<details>';
                    echo '<summary>';
                    
                    // afficher l'image des recettes
                    if (isset($astuce['image'])) {
                        echo '<img src="' . htmlspecialchars($astuce['image']) . '" alt="' . htmlspecialchars($astuce['titre']) . '" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px; border: 1px solid #ddd;">';
                    }

                    // Titre de containeur des recettes
                    echo '<div class="summary-content">';
                    echo '<h3 style="color: #d2691e; margin: 0;">' . htmlspecialchars($astuce['titre']) . '</h3>';
                    echo '<span style="font-size: 0.9em; color: #666; margin-top: 5px;">(Cliquez pour dérouler)</span>';
                    echo '</div>';
                    
                    echo '</summary>';
                    
                    // Ingredients
                    echo '<div style="margin-top: 20px; padding-left: 120px;">'; // Ajout de la marge supérieure
                    echo '<h4 style="color: #8b4513; margin-bottom: 5px;">Ingrédients :</h4>';
                    echo '<ul style="padding-left: 20px; margin-bottom: 15px;">';

                    // Affichage des ingrediens
                    foreach ($astuce['ingredients'] as $ingredient) {
                        echo '<li>' . htmlspecialchars($ingredient) . '</li>';
                    }
                    echo '</ul>';
                    echo '</div>';

                    // Liste des Preparations
                    echo '<div style="padding-left: 120px;">';
                    echo '<h4 style="color: #8b4513; margin-bottom: 5px;">Préparation :</h4>';
                    echo $astuce['preparation']; 
                    echo '</div>';

                    echo '</details>';
                    echo '</div>';
                }
            } else {
                echo '<p>Aucune astuce disponible pour le moment, Merci de revenir plus tard.</p>';
            }
            ?>
        </section>
    </main>

    <footer>
        <?php include_once 'includes/footer.php'; ?>
    </footer>
</body>
</html>