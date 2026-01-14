<?php 
include_once '../classes/database.php';
include_once '../classes/stage.php';

//Faire appel à la classe database
$db = database::getInstance('aikido'); 

// Requete pour récupérer le stage 
$sql = "SELECT * FROM stage";
    
$resultats = $db->getObjects($sql, 'Stage', []);
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stages</title>
</head>
<body>
    <main>
      <!-- Afficher chacuns des stages-->
      <?php foreach ($resultats as $unStage) : ?>
       <div class="carte">
            <!-- rediriger vers le stage en fonction de l'id-->
            <a href="stagecarte.php?id=<?php echo $unStage->getId(); ?>">
                <img src="<?php echo $unStage->getImage(); ?>" alt="Affiche du stage" />
            </a>
            <h3><?php echo $unStage->getNom(); ?></h3>
            <p>Ville : <?php echo $unStage->getHoraires(); ?></p> 
            <p>Tarif : <?php echo $unStage->getTarif(); ?> €</p>
        </div>
      <?php endforeach; ?>
    </main>
    </main>
    
</body>
</html>