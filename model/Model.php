<?php

abstract class Model
{

// Connexion object
    private $db;

// execute request
    protected function executeRequest($sql, $params = null)
    {
        if ($params == null) {
            $resultat = $this->getDb()->query($sql);    // exécution directe
        } else {
            $resultat = $this->getDb()->prepare($sql);  // requête préparée
            $resultat->execute($params);
        }
        return $resultat;
    }

// return DB connexion object
    protected function getDb()
    {
        if ($this->db == null) {
// Create connexion
            $this->db = new PDO('sqlite:../db/database.sqlite', '', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->db;
    }

}
