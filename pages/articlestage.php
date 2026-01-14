<?php 
include_once '../classes/database.php';
include_once '../classes/stage.php';

$stageChoisi = null;

//Faire appel à la classe database
$db = database::getInstance('aikido'); 

// Requete pour récupérer le stage 
$sql = "SELECT * FROM stage WHERE idStage = 31";
    
$resultats = $db->getObjects($sql, 'Stage', []);
$stageChoisi = $resultats[0];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage</title>
</head>
<body>
    <main>

            <div>
                <img src="<?php echo $stageChoisi->getImage(); ?>" alt="Affiche du stage" style="width:200px;"/>
                
                <h1><?php echo $stageChoisi->getNom(); ?></h1>
                
                <p><strong>Dates :</strong> Du <?php echo $stageChoisi->getDateDebut(); ?> au <?php echo $stageChoisi->getDateFin(); ?></p>
                <p><strong>Horaires :</strong> <?php echo $stageChoisi->getHoraires(); ?></p>
                <p><strong>Tarif :</strong> <?php echo $stageChoisi->getTarif(); ?> €</p>
    </main>
    
</body>
</html>