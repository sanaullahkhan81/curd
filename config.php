<?php
$databaseHost      	= 'localhost';
$databaseName		= 'database1';			
$databaseUsername	= 'root';
$dataPassword		= '';


try{
	//to access to database
	// what is your database system mysql sqlsrv postgres, maongodb
	
	$dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}",$databaseUsername,$dataPassword);
	
	$dbConn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
	/*
	foreach($dbConn->query("select * from employee") as $row){
		print_r($row);
	}
	*/
	
}catch(PDOException $e){
	echo $e->getMessage();
}

?>