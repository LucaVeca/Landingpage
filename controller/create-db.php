<?php
	//links to database.php
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__."/../connect.php");
	

	//Table within the database

	$query = $_SESSION["connection"]->query("CREATE TABLE contact ("
		//columns in table
		//characters, for username, email, password	
		. "name varchar(30) NOT NULL,"
		. "phone varchar(30) NOT NULL,"
		. "email varchar(30) NOT NULL,"
		. "other(30) NOT NULL,"
		//way tables are connected to each other
		. "PRIMARY KEY(name))");

if($query){
			
	}
	else {
		 echo "<p>" . $_SESSION["connection"]->error ."</p>";
	}
