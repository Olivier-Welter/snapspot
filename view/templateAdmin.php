<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snap - <?= $titre ?></title>   <!-- Titre Onglet Dynamique -->
    <link href="static/css/default.css" rel="stylesheet">

    <link href="static/bootstrap/css/bootstrap.css" rel="stylesheet">

</head>
<body>
    <div id="main-container" class="container-fluid">
        <div class="row col-lg-offset-2 col-lg-8 col-md-12  col-sm-12 col-xs-12">  
            <h3 class="btn btn-primary" id="deco"><a class="heading" href="?deconnexion=1">Déconnexion</a></h3>
            <div class ="text-center"><h1><a class="heading"  href="index.php">Raspot.in !</a></h1> 
                <h3 class="heading text-center"><?= $titre ?></h3>

                <form action="" method="get">
                    <div class="row">
                        <div class="col-lg-2 col-lg-offset-4 col-md-2 col-md-offset-4 col-sm-2 col-sm-offset-4 col-xs-4 col-xs-offset-2">
                            <input class="btn btn-primary btn-block" type="submit" name="Appli" value="Appli" >
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                            <input class="btn btn-primary btn-block" type="submit" name="Data" value="Data">
                        </div>
                    </div>
                </form>

                <div class="col-lg-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-xs-12">      
                    <?= $contenu ?>
                </div>
            </div>
        </div>

    </div>
    <footer><p>&copy;2017 - M. ROBOT</p></footer>
    <script type="text/javascript" src="static/js/jquery.js" ></script>
    <script type="text/javascript" src="static/js/snapspotIndex.js" ></script>
    <script type="text/javascript" src="static/js/snapspotAdm.js" ></script>
</body>
</html>
