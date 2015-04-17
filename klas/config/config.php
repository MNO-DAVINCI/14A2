<?php

/*
	Fout meldingen inschakelen.
*/

error_reporting(E_ALL);
ini_set("display_errors", 1);

/*
	Database constanten en database verbinding maken.
*/
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'klas');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_CHARSET', 'utf8');