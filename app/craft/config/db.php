<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

 $customDbConfig = array(

 	'*' => array(
 		'tablePrefix' => 'craft'
 	),

 	'local' => array (
 		'server' => 'localhost',
 		'user' => 'root',
 		'password' => 'root',
 		'database' => 'NOTE: ADD_DATABASE_HERE'
 	),

 	'dev' => array (
 		'server' => '',
 		'user' => '',
 		'password' => '',
 		'database' => ''
 	),

 	'staging' => array (
 		'server' => '',
 		'user' => '',
 		'password' => '',
 		'database' => ''
 	),

 	'prod' => array (
 		'server' => '',
 		'user' => '',
 		'password' => '',
 		'database' => ''
 	)
 );

return $customDbConfig;
