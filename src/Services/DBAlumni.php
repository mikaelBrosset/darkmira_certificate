<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class DBAlumni extends AbstractDB
{
    public function checkAlumni(array $values)
    {
        $sql = AlumniRepository::checkAlumni();

        return $this->fetch1Sql($sql, [$values[0], $values[3]]);
    }

    public function saveAlumni(array $values)
    {
        $sql = AlumniRepository::addAlumni();

        try {
            $this->writeSql($sql, $values);
            echo sprintf("Alumni %s %s written in DB \n", $values[1], $values[2]);

        } catch (Exception $e) {
            echo sprintf("Exception %s with alumni %s %s", $e, $values[1], $values[2]);
        };
    }

    public function getAlumni($uniqueid)
    {
        //require_once "../Entity/AlumniRepository.php";

        $sql = AlumniRepository::getAlumni();

        return $this->fetch1Sql($sql, [$uniqueid]);
    }
}