<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class DBConnection
{
    /**
     * @var PDO
     */
    private $connection;

    public function __construct()
    {
        $dbdsn = 'mysql:host=' . constant('DBHOST') . ';dbname='. constant('DBNAME') . ';charset=UTF8';
        $this->connection = new PDO($dbdsn, constant('DBUSERNAME'), constant('DBPASSWORD'));
    }

    public function getConnection()
    {
        return $this->connection;
    }
}