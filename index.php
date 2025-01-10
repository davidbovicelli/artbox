<?php require_once(__DIR__ . '/oeuvres.php'); 
$selected_id = isset($_GET['id']) ? (int)$_GET['id'] : null;
?>
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
    <div>
        <?php   
        $content = '';
        foreach ($oeuvres as $oeuvre) {
            $titre = htmlspecialchars($oeuvre['titre']);
            $image = htmlspecialchars($oeuvre['image']);
            $description = htmlspecialchars($oeuvre['description_courte']);
            $id = htmlspecialchars($oeuvre['id']);
            $description_complete = htmlspecialchars($oeuvre['description_complete']);

            $content .= <<<HTML
                <article class="oeuvre">
                    <div class="oeuvre-content">
                        <a href="oeuvre.php?id=$id">
                            <img src="$image" alt="$titre">
                            <h2>$titre</h2>
                            <p class="description_courte">$description</p>
                        </a>
                    </div>
                    <div class="description-section">
                        <a href="index.php?id=$id" </a>
HTML;
            if ($selected_id === $id) {
                $content .= <<<HTML
                        <p class="description_complete">$description_complete</p>
HTML;
            }
            $content .= <<<HTML
                    </div>
                </article>    
            HTML;
        }

        echo $content;
        ?>
    </div>
</main>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>

</html>