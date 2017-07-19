<?php $this->titre = "Raspot.in"; ?>
<div class="row">
    <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg12">
            <form method="post" id='uploadform' action="../public/index.php"  enctype="multipart/form-data" >
                <img class="cameraico" src="static/css/lens-37025_640.png" id="upfile1" width="75" style="cursor:pointer" alt="logo_appli" type="submit" />
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                <input type="file" id="my_file"  name="my_file" accept="image/*" capture="camera" style="display:none"  />
            </form>

            <div id="explain">
                <?php
                $settings = new Settings();
                $event = $settings->getEvent();
                $slogan = $settings->getSlogan();
                ?> 
                <h2><?php echo $event; ?></h2>
                <h3><?php echo $slogan; ?></h3>
            </div>
        </div>
    </div>
</div>
