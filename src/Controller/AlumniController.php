<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class AlumniController
{
    public function mainLoader()
    {
        $emailProcess  = new EmailProcess();
        $importCSV     = new ImportCSV();
        $alumniProcess = new AlumniProcess();

        //Import from CSV file
        $import   = $importCSV->processImport(CSVPATH);

        for ($i = 0; $i < count($import); $i++) {

            $alumni = new Alumni($import[$i][0], $import[$i][1], $import[$i][2]);

            //Check Alumni
            if (!$alumniProcess->checkAlumni($alumni)) { continue; };

            //Save to Database one Alumni
            $alumniProcess->saveAlumniProcess($alumni);

            //Send Email to one Alumni
            $emailProcess->processEmail($alumni);
        }
    }
}