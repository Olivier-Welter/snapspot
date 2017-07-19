<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class View
{

    private $fichier;
    private $titre;

    public function __construct($action)
    {
        // define view file to be requested
        $this->fichier = "../view/view" . $action . ".php";
    }

    // display view
    public function generer($donnees)
    {
        // generate specific view
        $contenu = $this->genererFichier($this->fichier, $donnees);
        // generate common view
        $view = $this->genererFichier('../view/template.php', array('titre' => $this->titre, 'contenu' => $contenu));
        // return view to browser
        echo $view;
    }

    // generate specific view file with specific dynamic content
    private function genererFichier($fichier, $donnees)
    {
        if (file_exists($fichier)) {
            // data extraction for final view
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
