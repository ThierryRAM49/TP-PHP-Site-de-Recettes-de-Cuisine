<!-- intégration des liens cliquables vers les recettes -->
<?php
function afficher_recettes($recettes) {
    foreach ($recettes as $recette) {
        echo "<a href='recette.php?id=" . $recette['id'] . "'>" . $recette['nom'] . "</a>";
    }
}
?>