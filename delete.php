<?php
include_once('config.php');

$id = $_GET['id'];
$sql = "DELETE FROM employee where id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id'=>$id));

header("Location:index.php");

?>