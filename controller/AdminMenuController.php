<?php

require_once 'autoload.php';

class AdminMenuController
{

    // Display view of the menu for administrator
    public function adminmenu()
    {

        $vue = new ViewAdmin("Administration");
        $vue->generer(array());
    }

}
