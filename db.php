<?php
/* Database connection settings */
$host = 'zerodegree.ddns.net:25585';
$user = 'zerodegreeweb';
$pass = 'ZerooDegr33Web';
$db = 'accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
