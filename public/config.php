<?php
$db_url = "sql7.freemysqlhosting.net";
$db_name = "sql7587585"; //database name
$db_username = "sql7587585"; //database account username
$db_password="hILa4XJRYU"; //database account password
$epg_url = "http://vip.iptvone.se:2095/get.php?username=qQxKUUja&password=dpgAXcA"; //epg xml url (http://domain.com:80/xmltv.php?username=pippo&password=test)
$epg_valid_hours = "+12 hours"; //if database has epg available for less than 12 hours it will be updated. Alternative values: "+1 day", "+2 days", "+1 week" etc etc

//To avoid wasting server resources, epg update will be triggered when an user login and database has less than 12 hours of programmes.

?>