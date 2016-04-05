<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

class AlumniRepository
{
    public static function addAlumni()
    {
        return
            "INSERT INTO alumni (email,lastname,firstname,uniqueid) VALUES (?,?,?,?) ";
    }

    public static function checkAlumni()
    {
        return
            "SELECT email, uniqueid
              FROM alumni
              WHERE email = ?
              OR uniqueid = ?";
    }

    public function getAlumni()
    {
        return
            "SELECT email, firstname, lastname, uniqueid
             FROM alumni
             WHERE uniqueid = ?";
    }
}