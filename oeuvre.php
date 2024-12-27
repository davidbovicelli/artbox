<?php
// Inclusion du fichier contenant le tableau des œuvres
require 'oeuvres.php';

// Récupération de l'id dans l'URL
$id = $_GET['id'] ?? null;

// Recherche de l'œuvre correspondante
$oeuvre = null;
foreach($oeuvres as $o) {
    if ($o['id'] == $id) {
        $oeuvre = $o;
        break;
    }
}

// Redirection vers la page d'accueil si l'œuvre n'est pas trouvée
if ($oeuvre === null) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $oeuvre['titre']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $oeuvre['titre']; ?></h1>
                <p class="description"><?php echo $oeuvre['description']; ?></p>
                <p class="auteur"><?php echo $oeuvre['auteur']; ?></p>
            </div>
        </article>
    </main>
</body>
</html> 