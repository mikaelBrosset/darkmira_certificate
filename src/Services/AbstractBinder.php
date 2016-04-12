<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

abstract class AbstractBinder extends AbstractDB
{
    /**
     * The fetch method from PDO
     *
     * @param $fetchMethod
     * @param $query
     * @return string
     */
    public function dbfetch($fetchMethod, $query)
    {
        try {
            switch ($fetchMethod){
                case 'fetchOne':
                    return $query->fetch(PDO::FETCH_ASSOC);
                case 'writeOne':
                    return $this->DBConnection->getConnection()->lastInsertId();
                default:
                    throw new Exception('fetchMethod must be provided');
            }
        } catch (Exception $e) {
            echo 'Caught Exception: ', $e->getMessage(), "\n";
        }
    }

    /**
     * @param $query
     * @param $values
     */
    public function bindQuerySaveAlumni($query, $values)
    {
        $query->bindValue(':email'    , $values['email'],     PDO::PARAM_STR);
        $query->bindValue(':firstname', $values['firstname'], PDO::PARAM_STR);
        $query->bindValue(':lastname' , $values['lastname'],  PDO::PARAM_STR);
        $query->bindValue(':uniqueid' , $values['uniqueid'],  PDO::PARAM_STR);
    }

    /**
     * @param $query
     * @param $values
     */
    public function bindQueryGetAlumni($query, $values)
    {
        $query->bindValue(':uniqueid', $values['uniqueid'], PDO::PARAM_STR);
    }
}