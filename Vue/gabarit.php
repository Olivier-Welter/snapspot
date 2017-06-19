<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $titre ?></title>   <!-- Élément spécifique -->
    <link href="contenu/css/default.css" rel="stylesheet">
    <link href="contenu/bootstrap/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
      
    <div id="main-container" class="container-fluid">
 
    <div class ="text-center"><h1><a class="heading"  href="index.php">Snap Snap Spot !</a></h1>
        
      <div id="contenu"><?= $contenu ?>   <!-- Élément spécifique -->
      </div>

    </div>
    </div>
    </div>
    <footer class="text-center">
        <p>&copy;2017 - David Fournier&nbsp;&amp;&nbsp;Olivier Welter.</p>
    </footer>
  
    <script type="text/javascript" src="contenu/js/jquery.js" ></script>
    <script type="text/javascript" src="contenu/js/snapspotAdm.js" ></script>
    <script type="text/javascript" src="contenu/js/snapspotIndex.js" ></script>
    
  </body>
</html>