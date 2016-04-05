<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class ImportCSV
{
    public function processImport($csvPath)
    {
        return $this->getCSVFile($csvPath);
    }

    public function getCSVFile($csvPath)
    {
        $resultArray = [];
        if (($handle = fopen($csvPath, "r")) !== FALSE) {
            while (($line = fgetcsv($handle, 0, CSVSEPARATOR)))
            {
                $resultArray[] = [$line[0], $line[1], $line[2]]; //email, lastname, firstname
            }
        }

        return $resultArray;
    }
}