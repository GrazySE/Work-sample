<?php
 define("HOST", "localhost");     // The host you want to connect to.
define("USER", "root");    // The database username. 
define("PASSWORD", "");    // The database password. 
define("DATABASE", "hannahbana_kandidatbanken");    // The database name.
 
define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
 

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);