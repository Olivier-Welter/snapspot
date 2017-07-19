<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ViewAdmin
{

    private $fichier;
    private $titre;

    public function __construct($action)
    {
        // define viewfile for differents requests
        $this->fichier = "../view/view" . $action . ".php";
    }

    // generate and return view
    public function generer($donnees)
    {
        // generate specific view
        $contenu = $this->genererFichier($this->fichier, $donnees);
        // generate common view
        $vue = $this->genererFichier('../view/templateAdmin.php', array('titre' => $this->titre, 'contenu' => $contenu));
        // return view for browser
        echo $vue;
    }

    // generate viewfile and result concerned
    private function genererFichier($fichier, $donnees)
    {
        if (file_exists($fichier)) {
            // data extraction for view
            extract($donnees);
            // start memory request for extraction
            ob_start();
            // include view file
            // result placed for outputmemory
            require $fichier;
            // stop memory and return result
            return ob_get_clean();
        } else {
            throw new Exception("Fichier '$fichier' introuvable");
        }
    }

}
