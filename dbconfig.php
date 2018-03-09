<?php 
$server="localhost";
$user="pos";
$pw="7ujygu7ev";
$db_name="agrotecgroup_pos";
$conn=mysql_connect("$server","$user","$pw") or 
     die ("Unable to connect server! ".mysql_error());
$db=mysql_select_db($db_name,$conn) or 
    die ("Unable to connect database! ".mysql_error());
?>