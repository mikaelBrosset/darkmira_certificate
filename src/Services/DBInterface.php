<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

interface DBInterface
{
    public function getConnection();

    public function dbCall($bindMethodName, $fetchMethod, $sql, array $values);

    public function dbfetch($fetchMethod, PDOStatement $query);
}