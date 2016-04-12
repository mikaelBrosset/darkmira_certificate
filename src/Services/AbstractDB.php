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

    /**
     * @param $bindMethodName
     * @param $fetchMethod
     * @param $sql
     * @param array $values
     *
     * @return mixed
     */
    public function dbCall($bindMethodName, $fetchMethod, $sql, array $values)
    {
        $query = $this->DBConnection->getConnection()->prepare($sql);
        $this->$bindMethodName($query, $values);

        call_user_func(array($this, $bindMethodName), $query, $values);

        $query->execute();

        return $this->dbfetch($fetchMethod, $query);
    }
}