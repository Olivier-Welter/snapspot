<?php

require_once 'autoload.php';

class AdminAppliController
{

    // Manage Data from Administrator requests and display view
    public function adminappli()
    {

        $settings = new Settings();

        try {
            $view = new ViewAdmin("AdminAppli");
            $view->generer(array());
        } catch (Exception $e) {
            $msgErreur = $e->getMessage();
            require '../view/viewError.php';
        }
        if (isset($_FILES['image_fond'])) {
            //Check Picture upload
            if ($_FILES['image_fond']['error'] > 0) {
                echo "Probleme lors de l'upload";
            }
            // Record Background Picture
            move_uploaded_file($_FILES["image_fond"]["tmp_name"], 'static/css/home.jpg');
        }
        //Control Password change request 
        if (isset($_POST['changePassword'])) {
            $settings->updatePassword($_POST['pwd'], $settings->getId());
            echo "<meta http-equiv='refresh' content='0'>";
        }

        //Control Event name change request
        if (isset($_POST['changeEvent'])) {
            $settings->updateEvent($_POST['event'], $settings->getId());
            echo "<meta http-equiv='refresh' content='0'>";
        }

        //Control Slogan name change request
        if (isset($_POST['changeSlogan'])) {
            $settings->updateSlogan($_POST['slogan'], $settings->getId());
            echo "<meta http-equiv='refresh' content='0'>";
        }

        //Reset control if requested
        if (isset($_POST['Reset'])) {
            $mediaManager = new MediaManager();
            $mediaManager->reset();
            $settings->resetSettings();
            echo "<meta http-equiv='refresh' content='0'>";
        }
        //DELETE PICTURES AND VIGNETTES
        if (isset($_POST['delete_data_submit'])) {
            $mediaManager = new MediaManager();
            $mediaManager->deleteMedias();
            echo "<meta http-equiv='refresh' content='0'>";
        }
        //DELETE BACKUP
        if (isset($_POST['delete_backup_submit'])) {
            $mediaManager = new MediaManager();
            $mediaManager->deleteBackup();
            echo "<meta http-equiv='refresh' content='0'>";
        }
    }

}
