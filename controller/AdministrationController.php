<?php

require_once 'autoload.php';

class AdministrationController
{

    private $ctrlAdminmenu;
    private $ctrlConnexion;
    private $ctrlAdminAppli;
    private $ctrlAdminData;

    public function __construct()
    {
        $this->ctrlAdminmenu = new AdminMenuController();
        $this->ctrlConnexion = new ConnexionController();
        $this->ctrlAdminAppli = new AdminAppliController();
        $this->ctrlAdminData = new AdminDataController();
    }

    // Check Administrator Session value and ask for controller in adequacy
    public function administration()
    {

        if (!empty($_SESSION) && $_SESSION['login'] == 'admin') {

            if (isset($_GET['deconnexion'])) {

                session_destroy();
                header('Location: .');
                exit();
            } elseif (isset($_GET['Appli'])) {
                $this->ctrlAdminAppli->adminappli();
            } elseif (isset($_GET['Data'])) {

                $this->ctrlAdminData->admindata();
            } else {

                $this->ctrlAdminmenu->adminmenu();
            }
        } else {
            $this->ctrlConnexion->connexion();
        }
    }

}
