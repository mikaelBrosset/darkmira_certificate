<?php
/**
 * Created by Mikaël Brosset.
 * Email: m.brosset@darkmira.com
 */

//CSV
define('ARGFILE','f');
define('ARGSEPARATOR','s');
define('CSVPATH','../Resources/import.csv');
define('CSVSEPARATOR', ',');


//SWIFTMAILER
define('SUBJECT', 'Darkmira Tour PHP 2016');
define('FROM', 'cgrandval@darkmira.com');
define('FROMNAME', 'Darkmira');
define('HOST', 'localhost');
define('TRANSPORT', 'mail');
//define('TRANSPORT_USERNAME', 'username'); //only if smtp as transport
//define('TRANSPORT_PASSWORD', 'password'); //only if smtp as transport

//HTML
define('BASEURL', 'https://certificado.darkmira.com/2016');
define('CERTIFICATEBASEURL', constant('BASEURL') . '/alumni.php?nb=');
define('CERTIFICATEFORMURL', constant('BASEURL') . '/form.php');

//DB
define('DBUSERNAME', 'root');
define('DBPASSWORD', 'pich');
define('DBHOST', 'localhost');
define('DBNAME', 'alumni');