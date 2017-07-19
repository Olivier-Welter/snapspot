<?php

require_once 'autoload.php';

class AdminDataController
{

    // Display views of all pictures downloaded
    public function admindata()
    {

        $vue = new ViewAdmin("AdminData");
        $vue->generer(array());
    }

}
