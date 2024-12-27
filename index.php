<?php require_once(__DIR__ . '/oeuvres.php'); ?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php require_once(__DIR__ . '/header.php'); ?>
    <main>
        <div class="galerie">
            <?php foreach($oeuvres as $oeuvre): ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                        <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['titre']; ?>">
                        <h2><?php echo $oeuvre['titre']; ?></h2>
                        <p class="description"><?php echo $oeuvre['description']; ?></p>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>

</html>