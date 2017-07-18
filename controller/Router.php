<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Routeur
 *
 * @author Olivier
 */
require_once 'autoload.php';

class Router
{

    private $ctrlHome;
    private $ctrlAdministration;
    //only two routes available for router as two url requests available
    public function __construct()
    {
        $this->ctrlHome = new HomeController();
        $this->ctrlAdministration = new AdministrationController();
    }

    public function home()
    {
        $this->ctrlHome->home();
    }

    public function administration()
    {
        $this->ctrlAdministration->administration();
    }

    // Error view request
    public function error($msgErreur)
    {
        $vue = new View("Error");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

}
