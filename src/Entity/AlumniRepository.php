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

            SELECT
              CASE alumni.email
               WHEN :email
               THEN 'emailAlreadyRegistered'
              ELSE NULL
              END AS 'emailError',
              CASE alumni.uniqueid
               WHEN :uniqueid
               THEN 'uniqueIdAlreadyRegistered'
              ELSE NULL
              END AS 'uniqueIdError'
            FROM alumni
            WHERE alumni.email = :email
            LIMIT 0, 1;

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
}