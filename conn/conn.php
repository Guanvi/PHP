<?php
	$H="Hello"."<br/>";
	try{
		$conn=new PDO("mysql:host=127.0.0.1;dbname=db_database10","root","feel-2014");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
?>
