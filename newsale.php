<?php

session_start();
require 'master.php';
include 'login.php';

echo $navbarLogged;
echo "Hello, ".$_SESSION['username'];
echo $containerStart;
echo $newsaleHeader;
echo $newsaleForm;
echo $containerEnd;
echo $footer;
	
?>