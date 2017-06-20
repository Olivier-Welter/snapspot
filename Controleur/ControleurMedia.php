<?php

require_once 'Modele/Media.php';
require_once 'Vue/Vue.php';

class ControleurMedia {

  private $media;

  public function __construct() {
    //$this->media = new Media();
  }

  // Affiche la liste de tous les billets du blog
  public function medias() {
    $medias = $this->media->getMedias();
    $vue = new Vue("Medias");
    $vue->generer(array('medias' => $medias));
  }
}