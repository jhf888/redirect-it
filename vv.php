<?php
// hostname or ip of server
$servername='mysql.uhostfull.com';

// username and password to log onto db server
$dbusername='u772163092_uss';
$dbpassword='vME4MD5xG4';

// name of database
$dbname='u772163092_dbs';

////////////// Do not  edit below/////////

connecttodb($servername,$dbname,$dbusername,$dbpassword);

$tm=time();
echo date('Y-m-d H:i:s',$tm);
$ref=@$HTTP_REFERER;
$agent=@$HTTP_USER_AGENT;
$ip=@$_SERVER['REMOTE_ADDR'];
$strSQL = "INSERT INTO track(tm, ref, agent, ip, tracking_page_name) VALUES ('$tm','$ref','$agent','$ip','$tracking_page_name')";
$test=mysql_query($strSQL);



function connecttodb($servername,$dbname,$dbuser,$dbpassword)
{
global $link;
$link=mysql_connect
("$servername","$dbuser","$dbpassword");
if(!$link){die("Could not connect to MySQL");}
mysql_select_db("$dbname",$link) or die ("could not open
db".mysql_error());
}


?>
