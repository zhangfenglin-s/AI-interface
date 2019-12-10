<?php 
	header("Content-type:text/html;charset=utf-8");
	$my = $_GET["my"];
	
	$robot = file_get_contents("http://api.qingyunke.com/api.php?key=free&appid=0&msg=".$my);
	
	echo $robot;
?>