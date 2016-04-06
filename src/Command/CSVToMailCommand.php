<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

include '../../autoload.php';
include '../../app/parameters.php';
require_once '../../vendor/swiftmailer-5.x/lib/swift_required.php';

ini_set('display_errors', 1);

$emailProcess = new EmailProcess();
$importCSV    = new ImportCSV();
$dbAlumni     = new DBAlumni();

$import   = $importCSV->processImport(CSVPATH);

for ($i = 0; $i < count($import); $i++) {

    $alumni = new Alumni($import[$i][0], $import[$i][1], $import[$i][2]);
    $import[$i][3] = $alumni->getRandomNumber();

    $saveData = $dbAlumni->saveAlumni([
        $alumni->getEmail(),
        $alumni->getFirstName(),
        $alumni->getLastName(),
        $alumni->getRandomNumber()]);

    $email = $emailProcess->processEmail($import[$i]);
}

