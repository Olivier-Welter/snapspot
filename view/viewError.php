<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$titre = 'Raspot';
ob_start();
echo '<h3>Une erreur est survenue : ' . $msgErreur . '</h3>';
$contenu = ob_get_clean();
require 'template.php';
