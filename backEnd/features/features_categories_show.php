  <!-- Database connect -->
<?php
    include('config_db.php');

?>

<!-- ===View User List=== -->
  <?php
    $sql="SELECT * FROM features_categories";
    $result=mysqli_query($conn,$sql);
  ?>

  <br>
  <h2 class="text-center ">Features Categories</h2><hr>
<!-- User list table -->
  
<table class="table table-striped table-bordered table-hover text-center">
  <thead>
    <tr class="table-primary">
      <th scope="col">Features Id</th>
      <th scope="col">Features Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
        foreach ($result as $key => $single_result) {
          
          ?>
          <tr class="">
          <td><?php echo $key+1?></td>
          <td><?php echo $single_result['features_name']?></td>
          <td>
           <button class="btn btn-success btn-sm"><a href="index.php?page=features_edit&&id=<?php echo $single_result['features_id'] ?>" class="text-white"><i class="fas fa-edit"></i></a>
            </button>
            <button class="btn btn-danger btn-sm"><a href="index.php?page=features_delete&& id=<?php echo $single_result['features_id']?>" class="text-white" onclick="return confirm();"><i class="fas fa-trash-alt"></i></a>
            </button>
          </td>
          </tr>
      <?php    
        }
      ?>
  </tbody>
  
</table>