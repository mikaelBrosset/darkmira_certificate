<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class DBConnection
{
    const DBUSERNAME = 'root';
    const DBPASSWORD = 'pich';
    const DBHOST     = 'localhost';

    /**
     * @var PDO
     */
    private $connection;

    public function __construct()
    {
        $dbdsn = 'mysql:host='. self::DBHOST .';dbname=alumni;charset=UTF8';
        $this->connection = new PDO($dbdsn, self::DBUSERNAME, self::DBPASSWORD);
    }

    public function getConnection()
    {
        return $this->connection;
    }
}