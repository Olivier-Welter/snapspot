<?php
function __autoload($class_name) {
    require ($class_name.'.class.php'); 

} 