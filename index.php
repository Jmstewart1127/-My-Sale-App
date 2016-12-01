<?php

session_start();
require 'master.php';
include("userConn.php");

session_start();

echo $navbar;
echo $containerStart;
echo $containerEnd;
echo $pagination;
echo $footer;
   
?>