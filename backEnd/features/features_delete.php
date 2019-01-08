<?php

    include('config_db.php');
?>
<?php

	$id=$_GET['id'];

	$sql="DELETE FROM features_categories where features_id=$id";

	if(mysqli_query($conn,$sql)){
		echo "Delete Success";
		
	}else{
		echo "Failed";
	}
	
?>