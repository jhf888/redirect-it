<?php
$ipaddress = $_SERVER['REMOTE_ADDR']; //ip address
$locationstr="http://api.locatorhq.com/?user=allan6441&key=ea0b9cf27dd78009cf9cd836e02cccff776cb2b4&ip=";
$locationstr = $locationstr.$ipaddress."&format=xml";

$xml = simplexml_load_file($locationstr); 

$countrycode = $xml->countryCode; //country code
$countryname = $xml->countryName; //country name
$region = $xml->region; //region name
$city = $xml->city; //city name
$latitude = $xml->latitude; //city latitude
$longitude = $xml->longitude; //city longitude
//$tm=time();
$ref=@$_SERVER['HTTP_REFERER'];
$agent=@$_SERVER['HTTP_USER_AGENT'];
$domain=@$_SERVER['SERVER_NAME'];



$servername='mysql.uhostfull.com';
$dbusername='u772163092_uss';
$dbpassword='vME4MD5xG4';
$dbname='u772163092_dbs';

connecttodb($servername,$dbname,$dbusername,$dbpassword);

$strSQL = "INSERT INTO track(date_time,ref, agent, ip,domain,country_code,country,region,city,latitude,longitude) VALUES (CONVERT_TZ( NOW( ) ,  '-4:00',  '+8:00' ), '$ref','$agent','$ipaddress','$domain','$countrycode','$countryname','$region','$city','$latitude','$longitude')";
echo $strSQL;
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
