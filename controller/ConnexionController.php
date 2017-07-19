<?php

require_once 'autoload.php';

class ConnexionController
{

    //display view for administrator connection request
    public function connexion()
    {
        $settings = new Settings();

        $view = new View("Connexion");
        $view->generer(array());


        if (isset($_POST['connexion'])) {
            $password = htmlspecialchars($_POST['pwd']);
            if (password_verify($password, $settings->getPwd())) {
                $_SESSION['login'] = 'admin';
                $this->redirect('adm.php');
            } else {
                echo '<h2 class="text-center">Mauvais mot de passe !</h2>';
            }
        }
    }

    function redirect($url)
    {
        if (!headers_sent()) {
            header('Location: ' . $url);
            exit;
        } else {
            echo '<script type="text/javascript">';
            echo 'window.location.href="' . $url . '";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="0;url=' . $url . '" />';
            echo '</noscript>';
            exit;
        }
    }

}
