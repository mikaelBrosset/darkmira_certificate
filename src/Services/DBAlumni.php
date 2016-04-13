<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class DBAlumni extends AbstractDB
{
    public function createAlumniArray(Alumni $alumni)
    {
        return [
            'email'     => $alumni->getEmail(),
            'firstname' => $alumni->getFirstName(),
            'lastname'  => $alumni->getLastName(),
            'uniqueid'  => $alumni->getRandomNumber()
        ];
    }

    /**
     * @param Alumni $alumni
     */
    public function saveAlumni(Alumni $alumni)
    {
        $sql = AlumniRepository::addAlumni();

        try {
            $this->dbCall('bindQuerySaveAlumni', 'writeOne', $sql, $this->createAlumniArray($alumni));
            //$this->writeSql($sql, $values);
            echo sprintf("Alumni %s %s written in DB \n", $alumni->getFirstName(), $alumni->getLastName());

        } catch (Exception $e) {
            echo sprintf("Exception %s with alumni %s %s", $e, $alumni->getFirstName(), $alumni->getLastName());
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

    public function isEmailUsed(Alumni $alumni)
    {
        $sql = AlumniRepository::checkEmail();

        try {
            return $this->dbCall('bindQueryCheckEmail', 'fetchOne', $sql, $this->createAlumniArray($alumni));
        } catch (Exception $e) {
            echo "Ooops !! \n Something bad happened. \n Sorry for the inconvenience, please feel free to report this problem to Darkmira \n";
        }
    }

    public function isUniqueIdUsed(Alumni $alumni)
    {
        $sql = AlumniRepository::checkUniqueId();

        try {
            return $this->dbCall('bindQueryCheckUniqueId', 'fetchOne', $sql, $this->createAlumniArray($alumni));
        } catch (Exception $e) {
            echo "Ooops !! \n Something bad happened. \n Sorry for the inconvenience, please feel free to report this problem to Darkmira \n";
        }
    }
}