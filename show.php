<html>
<head><title>show result</title></head>
 <body>
<?php
// hostname or ip of server
$servername='mysql.uhostfull.com';

// username and password to log onto db server
$dbusername='u772163092_uss';
$dbpassword='vME4MD5xG4';

// name of database
$dbname='u772163092_dbs';

connecttodb($servername,$dbname,$dbusername,$dbpassword);
$test=mysql_query("SELECT * from track order by date_time DESC ");
$fileds=mysql_num_fields($test);

for ($i=0;$i<mysql_num_rows($test);$i++)
{

    for ($x=0;$x<$fileds;$x++)
    echo mysql_result($test,$i,$x).",";
    echo "</br>";
}
//echo mysql_result($test,5,'ip');

//print_r ($test);

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


 </body>
</html>
