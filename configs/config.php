<?php
    /* General Configurement
    * 
	* PageTitle = Name of specific Page
	* WebName   = Name of website
	* DB_HOST   = Database Host
	* DB_NAME   = Database Name
	* DB_USER   = Database User
	* DB_PASS   = Database Password
	*
	*/

	// Website Name
	$WebName   = 'NewsFeed';
	$Feed = $PageTitle = NULL;   // This is set by your PHP file in root!

	// Database Configs
	$DB_HOST   = 'localhost';
	$DB_NAME   = 'newsfeed_database';
	$DB_USER   = 'root';
	$DB_PASS   = 'root';


	// Global Connection
	$MySQL = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
