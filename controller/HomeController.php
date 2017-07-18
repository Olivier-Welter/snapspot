<?php

require_once 'autoload.php';

class HomeController
{

    // Display for Home request and manage picture uploaded
    public function home()
    {

        try {
            $view = new View("Home");
            $view->generer(array());
            $settings = new Settings();
        } catch (Exception $e) {
            $msgErreur = $e->getMessage();
            require '../view/viewError.php';
        }
        $mediaManager = new MediaManager();

        if (isset($_FILES['my_file'])) {
            $mediaManager->checkMedia();
        }
    }

}
