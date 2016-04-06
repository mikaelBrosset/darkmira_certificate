<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

include 'autoload.php';
include 'app/parameters.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);

$frontController = new FrontController();
$frontController->showCertificate();



