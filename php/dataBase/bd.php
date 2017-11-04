<?php

require_once"rb-mysql.php";

$config = array(

	'login' => 'root',
	'password' => '',
	'dbname' => 'testBase',
	'host' => '127.0.0.1'

	);

R::setup('mysql::host=127.0.0.1;dbname=testBase','root','');