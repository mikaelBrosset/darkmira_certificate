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
            "
            CREATE TABLE IF NOT EXISTS alumni (
                id int NOT NULL AUTO_INCREMENT,
                email varchar(255) NOT NULL,
                firstname varchar(255),
                lastname varchar(255),
                uniqueid varchar(255) NOT NULL,
                primary key (id)
                );

            INSERT INTO alumni (email,lastname,firstname,uniqueid)

              SELECT * FROM (SELECT :email, :firstname, :lastname, :uniqueid) AS tmp
              WHERE NOT EXISTS (
                SELECT alumni.email    FROM alumni WHERE alumni.email = :email
              )
              AND NOT EXISTS (
                SELECT alumni.uniqueid FROM alumni WHERE alumni.uniqueid = :uniqueid
              );
            ";
    }

    public static function getAlumni()
    {
        return "
            SELECT email, firstname, lastname, uniqueid
            FROM alumni
            WHERE uniqueid = :uniqueid";
    }

    public static function checkEmail()
    {
        return "
            SELECT alumni.email
            FROM alumni
            WHERE alumni.email = :email
            LIMIT 0, 1;
        ";
    }

    public static function checkUniqueId()
    {
        return "
            SELECT alumni.uniqueid
            FROM alumni
            WHERE alumni.uniqueid = :uniqueid
            LIMIT 0, 1;
        ";
    }
}