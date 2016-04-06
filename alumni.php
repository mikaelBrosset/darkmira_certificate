<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

include 'autoload.php';
include 'app/parameters.php';


error_reporting(E_ALL);

$frontController = new FrontController();
$frontController->showCertificate();



