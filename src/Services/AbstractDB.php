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
}