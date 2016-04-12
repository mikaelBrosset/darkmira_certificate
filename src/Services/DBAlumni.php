<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class DBAlumni extends AbstractBinder
{
    /**
     * @param array $values
     */
    public function saveAlumni(array $values)
    {
        $sql = AlumniRepository::addAlumni();

        try {
            $this->dbCall('bindQuerySaveAlumni', 'writeOne', $sql, $values);
            //$this->writeSql($sql, $values);
            echo sprintf("Alumni %s %s written in DB \n", $values['firstname'], $values['lastname']);

        } catch (Exception $e) {
            echo sprintf("Exception %s with alumni %s %s", $e, $values['firstname'], $values['lastname']);
        };
    }

    /**
     * @param $uniqueid
     * @return mixed
     */
    public function getAlumni($uniqueid)
    {
        $sql = AlumniRepository::getAlumni();

        try {
            return $this->dbCall('bindQueryGetAlumni', 'fetchOne', $sql, ['uniqueid' => $uniqueid]);

        } catch (Exception $e) {
            echo "Ooops !! \n Something bad happened. \n Sorry for the inconvenience, please feel free to report this problem to Darkmira \n";
        }
    }
}