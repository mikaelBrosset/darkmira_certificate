<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../../autoload.php';
include '../../app/parameters.php';
require_once '../../vendor/swiftmailer-5.x/lib/swift_required.php';


$alumniCntrlr = new AlumniController();

$alumniCntrlr->mainLoader();



