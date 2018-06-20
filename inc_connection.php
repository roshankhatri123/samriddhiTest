<?php
define('HOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DB','sectiona');
$conn=mysql_connect(HOST,DBUSER,DBPASS,DB);
if ($conn)
 {
	
}
else
{
	echo "something wrong with connecting with the database";
}
?>