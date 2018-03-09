<?php
$server = "localhost";
$user = "pos";
$pass = "7ujygu7ev";
$dbname = "agrotecgroup_pos";
$con = mysql_connect($server, $user, $pass);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
$qqq = mysql_select_db($dbname, $con);
?>