<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class DBAlumni
{
    public $DBConnection;

    public function __construct()
    {
        require_once "DBConnection.php";
        $this->DBConnection = new DBConnection();
    }

    public function writeSql($sql, array $values)
    {
        $query = $this->DBConnection->getConnection()->prepare($sql);

        $query->execute($values);

        return $this->DBConnection->getConnection()->lastInsertId();
    }

    public function fetch1Sql($sql, array $values)
    {
        $query= $this->DBConnection->getConnection()->prepare($sql);
        $query->execute($values);
        $request = $query->fetch(PDO::FETCH_ASSOC);

        return $request;
    }

    public function checkAlumni(array $values)
    {
        $sql = AlumniRepository::checkAlumni();

        return $this->fetch1Sql($sql, [$values[0], $values[3]]);
    }

    public function saveAlumni(array $values)
    {
        $sql = AlumniRepository::addAlumni();

        $this->writeSql($sql, $values);

        echo sprintf("Alumni %s %s written in DB \n", $values[1], $values[2]);
    }

    public function getAlumni($uniqueid)
    {
        //require_once "../Entity/AlumniRepository.php";

        $sql = AlumniRepository::getAlumni();

        return $this->fetch1Sql($sql, [$uniqueid]);
    }
}