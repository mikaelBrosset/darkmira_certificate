<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

abstract class AbstractDB
{
    public $DBConnection;

    public function __construct()
    {
        $this->DBConnection = new DBConnection();
    }

    public function writeSql($sql, array $values)
    {
        $query = $this->DBConnection->getConnection()->prepare($sql);

        $this->bindSaveAlumni($query, $values);

        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function fetch1Sql($sql, array $values)
    {
        $query= $this->DBConnection->getConnection()->prepare($sql);
        $query->execute($values);
        $request = $query->fetch(PDO::FETCH_ASSOC);

        return $request;
    }

    public function bindSaveAlumni($query, $values)
    {
        $query->bindValue(':email'    , $values['email'],     PDO::PARAM_STR);
        $query->bindValue(':firstname', $values['firstname'], PDO::PARAM_STR);
        $query->bindValue(':lastname' , $values['lastname'],  PDO::PARAM_STR);
        $query->bindValue(':uniqueid' , $values['uniqueid'],  PDO::PARAM_STR);
    }
}