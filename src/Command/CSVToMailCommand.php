<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

include '../../autoload.php';
require_once '../../vendor/swiftmailer-5.x/lib/swift_required.php';

$emailProcess = new EmailProcess();
$importCSV    = new ImportCSV();
$dbAlumni     = new DBAlumni();

define("ARGFILE","f");
define("ARGSEPARATOR","s");
define("CSVPATH","../Resources/import.csv");
define("CSVSEPARATOR", ",");

if (empty($argsArray = getopt(ARGFILE . ':'))) {
    //echo sprintf("ERROR Argument of type -%s 'CSVfilefolder' needed \n", ARGFILE);
};


$import   = $importCSV->processImport(CSVPATH);

for ($i = 0; $i < count($import); $i++) {

    $alumni = new Alumni($import[$i][0], $import[$i][1], $import[$i][2]);
    $import[$i][3] = $alumni->getRandomNumber();

    //$result = $dbAlumni->checkAlumni($import[$i]);

    $saveData = $dbAlumni->saveAlumni([
        $alumni->getEmail(),
        $alumni->getFirstName(),
        $alumni->getLastName(),
        $alumni->getRandomNumber()]);

    $savemail = $emailProcess->processEmail($import[$i]);
    //echo mail sent to ...
}

