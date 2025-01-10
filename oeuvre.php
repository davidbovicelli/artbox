<?php 
require_once(__DIR__ . '/oeuvres.php');

$id = isset($_GET['id']) ? (int)$_GET['id'] : null;

// Vérification si l'id existe dans le tableau des oeuvres
if (!isset($oeuvres[$id])) {
    header('Location: index.php');
    exit();
}

$oeuvre = $oeuvres[$id];
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo htmlspecialchars($oeuvre['titre']); ?> - The ArtBox</title>
</head>
<body>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <main>
        <?php
        $titre = htmlspecialchars($oeuvre['titre']);
        $artiste = htmlspecialchars($oeuvre['artiste']);
        $image = htmlspecialchars($oeuvre['image']);
        $description_complete = htmlspecialchars($oeuvre['description_complete']);

        $content = <<<HTML
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="$image" alt="$titre">
            </div>
            <div id="contenu-oeuvre">
                <h1>$titre</h1>
                <p class="description">$artiste</p>
                <p class="description-complete">$description_complete</p>
            </div>
        </article>
HTML;
        
        echo $content;
        ?>
    </main>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html> 