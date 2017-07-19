<?php
require_once '../controller/autoload.php';
$this->titre = "AdminData";
$mediaManager = new MediaManager();
$datas = $mediaManager->getList();

echo '<br>';
echo "<div class='row col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-xs-12'>";
foreach ($datas as $key => $value) {
    echo "<ul class='list-group'>";
    echo "<a href='#' class='list-group-item'>";

    echo "<p class='list-group-item-text pull-right'>" . $value['newName'] . "</p>";
    $chemin = Media::VIGN_PATH . $value['newName'];
    echo "<img src='" . $chemin . "' alt='image_vignette'>";
    echo '</a>';
    echo '</ul>';
}
?>
</div>
