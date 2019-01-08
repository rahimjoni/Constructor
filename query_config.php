<?php
	$databasehost='localhost';
	$databaseuser='root';
	$databasepassword='';
	$databasename='blog';
	$conn=mysqli_connect($databasehost,$databaseuser,$databasepassword,$databasename);

?>
<?php 
function top_header_data(){
  global $conn ;
  $select_data_top_header="SELECT * FROM top_header";
  $query_data=mysqli_query($conn,$select_data_top_header);
  $featch_data=mysqli_fetch_assoc($query_data);
  return $featch_data;
}
function bottom_header_data(){
  global $conn ;
  $sql="SELECT * FROM menus";
  $result=mysqli_query($conn,$sql);
  $featch_data=mysqli_fetch_all($result,MYSQLI_ASSOC);
  return $featch_data;
}
function slider_data(){
  global $conn ;
  $sql="SELECT * FROM slider";
  $result=mysqli_query($conn,$sql);
  $featch_data=mysqli_fetch_all($result,MYSQLI_ASSOC);
  return $featch_data;
}

function work_content(){
  global $conn ;
  $sql="SELECT * FROM content";
  $result=mysqli_query($conn,$sql);
  $featch_data=mysqli_fetch_all($result,MYSQLI_ASSOC);
  return $featch_data;
}
function achievedment(){
  global $conn ;
  $sql="SELECT * FROM total_work";
  $result=mysqli_query($conn,$sql);
  $featch_data=mysqli_fetch_all($result,MYSQLI_ASSOC);
  return $featch_data;
}
function services(){
  global $conn ;
  $sql="SELECT * FROM services";
  $result=mysqli_query($conn,$sql);
  $featch_data=mysqli_fetch_all($result,MYSQLI_ASSOC);
  return $featch_data;
}
function features(){
  global $conn ;
  $sql="SELECT * FROM features_categories";
  $result=mysqli_query($conn,$sql);
  $featch_data=mysqli_fetch_all($result,MYSQLI_ASSOC);
  return $featch_data;
}
function featuresContent(){
  global $conn ;
  $sql="SELECT * FROM features_content";
  $result=mysqli_query($conn,$sql);
  $featch_data=mysqli_fetch_all($result,MYSQLI_ASSOC);
  return $featch_data;
}


//funtion return feature name by feature id 
  function get_feature_name_by_id($feature_id){
    global $conn ;
    $sql="SELECT features_name FROM features_categories WHERE features_id=$feature_id";
    $result=mysqli_query($conn,$sql);
    $featch_name=mysqli_fetch_assoc($result);
    return $featch_name['features_name'] ;
  }

function social_icon(){
  global $conn ;
  $select_data_top_header="SELECT * FROM team_social";
  $query_data=mysqli_query($conn,$select_data_top_header);
  $featch_data=mysqli_fetch_assoc($query_data);
  return $featch_data;
}
function team(){
  global $conn ;
  $select_data_top_header="SELECT * FROM team_member";
  $query_data=mysqli_query($conn,$select_data_top_header);
  $featch_data=mysqli_fetch_assoc($query_data);
  return $featch_data;
}
?>