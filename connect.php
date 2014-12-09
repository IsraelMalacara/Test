<?php
//Interacting with MySQL

//Create table Friends
CREATE Table friends(name VARCHAR(30), fav_color VARCHAR(30), fav_food VARCHAR(30);
INSERT into friends VALUES("Rose", "White", "Tacos"),("Edd", "Blue", "Pizza"),("Mike", "Green", "Pasta");


//connect to Database
mysql_connect("hostaddress.com", "username","password",) or die(mysql_error());
//select the database
mysql_select_db("database_name") or die(mysql_error());

//Select data from table friends
$data = mysql_query("SELECT * FROM friends") or die(mysql_error());

//put data in array
$info_array = mysql_fetch_array($data);

//print data from array (one entry)
echo "<b>Name: </b>".$info['name']." ";
echo "<b>Color: </b>".$info['fav_color']."<br>";

//draw table
echo "<table border cellpadding=3>";

	//print data from array (all entries)
	while ($info = mysql_fetch_array($data)) {
		echo "<tr>";
		echo "<th>Name:</th></td>".$info['name']."</td>";
		echo "<th>Color:</th><td>".$info['fav_color']."</td>"
	}

echo "</table>"

?>