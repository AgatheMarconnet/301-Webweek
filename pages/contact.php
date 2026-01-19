<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Contact</title>
</head>
<body>
    <?php 
    //J'utilise la variable path pour que le chemin s'adapte en fonction de la page (ce ne sont pas les même chemin si on vient de index ou d'une autre page)
    $path = "../";
    include '../includes/header.php';?>
    <main>
        <form action="#" method="post">
            <h1>Inscription / Nous contacter</H1>

            <label for="nom" class="titre">Nom :</label><br>
            <input type="text" class="champ" name="nom"><br><br>

            <label for="prenom" class="titre">Prénom :</label><br>
            <input type="text" class="champ" name="prenom"><br><br>

            <label for="email" class="titre">Email :</label><br>
            <input type="email" class="champ" name="email"><br><br>

            <label for="message" class="titre">Message :</label><br>
            <textarea id="message" class="champ" name="message"></textarea><br><br>

            <button class="bouton">Envoyer</button>
        </form>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>