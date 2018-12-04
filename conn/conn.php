<?php
	$H="Hello"."<br/>";
	try{
		$conn=new PDO("mysql:host=localhost;dbname=db_database10","root","feel-2014");
		$conn->query("SET NAMES 'utf8'");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>
