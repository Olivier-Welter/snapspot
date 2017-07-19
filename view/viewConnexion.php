<?php $this->titre = "Connexion";
?>
<h3 class="heading text-center">Connexion</h3>

<form action="" class="row" method="post">
    <div class="col-lg-offset-4 col-lg-4 col-md-offset-2 col-md-8 col-xs-12">
        <label for='password'>Mot de passe</label><br>
        <div class="input-group">
            <input id='password' class='form-control' type='password' name='pwd' required autofocus>
            <div class="input-group-btn">
                <input class="btn btn-primary" type="submit" name="connexion" value="Valider">
            </div>
        </div>
    </div>
</form>
