<?php

include('./php/includes/heading.php');

include('./php/includes/header.php');

//gestion mot de passe
echo '<form action="adminappli.php" method="post">';
	echo '<center><label>Mot de Passe</label><br>';
	echo	'<input type="password" name="mdp" required/><br>';
    echo    '<input type="submit" value="Valider"/></center>';
echo '</form>';

include('./php/includes/footer.php');