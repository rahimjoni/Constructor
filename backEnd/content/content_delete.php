<?php
    $databasehost='localhost';
    $databaseuser='root';
    $databasepassword='';
    $databasename='blog';
    $conn=mysqli_connect($databasehost,$databaseuser,$databasepassword,$databasename);
?>


<?php

	$id=$_GET['id'];
	$sql="DELETE FROM content where id=$id";
	if(mysqli_query($conn,$sql)){
		echo "Delete Success";
		
	}else{
		echo "Failed";
	}
	
?>