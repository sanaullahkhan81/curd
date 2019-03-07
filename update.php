<?php
include_once('config.php');

$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$job_title = $_POST['job_title'];
$salary = $_POST['salary'];
$notes = $_POST['notes'];

 $sql = "UPDATE employee SET
 		first_name=:first_name,
		last_name=:last_name,
		job_title=:job_title,
		salary=:salary,
		notes=:notes
		where 
		id=:id	
		";
 	$query = $dbConn->prepare($sql);
			 $query->bindparam(':id',$id);	
	 		 $query->bindparam(':first_name',$first_name);
			 $query->bindparam(':last_name',$last_name);
			 $query->bindparam(':job_title',$job_title);
			 $query->bindparam(':salary',$salary);
			 $query->bindparam(':notes',$notes);
			 $query->execute();
			 
			 header("Location:index.php");	
			

?>