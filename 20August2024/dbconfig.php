<?php 

define("HOST","localhost");
define("USR","root");
define("PASS","");
define("DATABASE","wdpf60");

$db = new mysqli();

@$db->connect(HOST,USR,PASS);
//@$db->connect(HOST,USR,PASS,DATABASE);

@$db->select_db(DATABASE);

if ($db->connect_errno) {
    //printf("Unable to connect to the database:<br /> %s",
   echo $db->connect_error;
    exit();
    }

    echo $db->error;

?>