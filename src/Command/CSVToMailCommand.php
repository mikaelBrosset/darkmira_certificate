<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

include '../../autoload.php';
include '../../app/parameters.php';
require_once '../../vendor/swiftmailer-5.x/lib/swift_required.php';

$emailProcess = new EmailProcess();
$importCSV    = new ImportCSV();
$dbAlumni     = new DBAlumni();

//Import from CSV file
$import   = $importCSV->processImport(CSVPATH);

for ($i = 0; $i < count($import); $i++) {

    $alumni = new Alumni($import[$i][0], $import[$i][1], $import[$i][2]);
    $import[$i][3] = $alumni->getRandomNumber();

    //Save to Database one Alumni
    $dbAlumni->saveAlumni([
        $alumni->getEmail(),
        $alumni->getFirstName(),
        $alumni->getLastName(),
        $alumni->getRandomNumber()]);

    //Send Email to one Alumni
    $email = $emailProcess->processEmail($import[$i]);
}

