<?php

$ipaddress = $_SERVER['REMOTE_ADDR']; //ip address
$locationstr="http://api.locatorhq.com/?user=allan6441&key=ea0b9cf27dd78009cf9cd836e02cccff776cb2b4&ip=";
$locationstr = $locationstr.$ipaddress."&format=xml";

//loading the xml file directly from the website
$xml = simplexml_load_file($locationstr); 

$countrycode = $xml->countryCode; //country code
$countryname = $xml->countryName; //country name
$region = $xml->region; //region name
$city = $xml->city; //city name
$latitude = $xml->latitude; //city latitude
$longitude = $xml->longitude; //city longitude
//$browsername = $xml->browserName; //browser name


echo "Location information for <b>".$ipaddress."<br/><br/>";
echo "Country Code: ".$countrycode."<br/>";
echo "Country: ".$countryname."<br/>";
echo "Region: ".$region."<br/>";
echo "City: ".$city."<br/>";
echo "Latitude: ".$latitude."<br/>";
echo "Longitude: ".$longitude."<br/>";
?>
