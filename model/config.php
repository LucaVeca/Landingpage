<?php
	require_once(__DIR__."/database.php");
	require_once(__DIR__."/../connect.php");
	session_start();
	//continuously regenerates id
	session_regenerate_id(true);

	$path = "/Landingpage/";

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "landing page";

	
	//gets rid of "Database already exists"
	if(!isset($_SESSION["connection"])){
		$connection = new Database($host, $username, $password, $database);
		$_SESSION["connection"] = $connection;
	}