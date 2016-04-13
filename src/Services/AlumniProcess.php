<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class AlumniProcess extends DBAlumni
{
    public function checkAlumni(Alumni $alumni)
    {
        if (!$this->checkEmail($alumni)) { return false; };

        $this->checkUniqueId($alumni);
    }

    public function checkEmail(Alumni $alumni)
    {
        if ($this->isEmailUsed($alumni)) {
            echo sprintf("Email %s is already registered, skipping \n", $alumni->getEmail());
            return false;
        }
        return;
    }

    public function checkUniqueId(Alumni $alumni)
    {
        if ($this->isUniqueIdUsed($alumni)) {
            $alumni->createRandomNumber();

            $this->checkUniqueId($alumni);
        }
        return;
    }

    public function saveAlumniProcess(Alumni $alumni)
    {
        $this->saveAlumni($alumni);
    }
}