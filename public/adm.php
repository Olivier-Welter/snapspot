<?php

session_start();
require '../controller/autoload.php';

$routeur = new Router();
$routeur->administration();
