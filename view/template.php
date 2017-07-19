<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snap - <?= $titre ?></title>   <!-- Élément spécifique -->

        <link href="static/css/default.css" rel="stylesheet">
        <link href="static/bootstrap/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
        <div id="main-container" class="container-fluid">
            <div class ="text-center"><h1><a class="heading"  href="index.php">Raspot.in !</a></h1> 
                <?= $contenu; ?>
            </div>
        </div>
        <footer class="text-center">
            <p>&copy;2017 - M. ROBOT</p>
        </footer>

        <script type="text/javascript" src="static/js/jquery.js" ></script>
        <script type="text/javascript" src="static/js/snapspotIndex.js" ></script>
        <script type="text/javascript" src="static/js/snapspotAdm.js" ></script>
    </body>
</html>
