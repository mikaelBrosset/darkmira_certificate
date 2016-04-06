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
            "CREATE TABLE IF NOT EXISTS alumni (
                    id int NOT NULL AUTO_INCREMENT,
                    email varchar(255) NOT NULL,
                    firstname varchar(255),
                    lastname varchar(255),
                    uniqueid varchar(255) NOT NULL,
                    primary key (id)
                );
            INSERT INTO alumni (email,lastname,firstname,uniqueid) VALUES (?,?,?,?) ";
    }

    public static function getAlumni()
    {
        return "
            SELECT email, firstname, lastname, uniqueid
            FROM alumni
            WHERE uniqueid = ?";
    }
}