  <!-- Database connect -->
<?php
    $databasehost='localhost';
    $databaseuser='root';
    $databasepassword='';
    $databasename='blog';
    $conn=mysqli_connect($databasehost,$databaseuser,$databasepassword,$databasename);
?>

<!-- ===View User List=== -->
  <?php
    $sql="SELECT * FROM content";
    $result=mysqli_query($conn,$sql);
  ?>

  <br>
  <h2 class="text-center ">Content Item List</h2><hr>
<!-- User list table -->
  
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr class="table-primary text-center">
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php
        foreach ($result as $key => $single_result) {
          
          ?>
          <tr class="">
          <td class="colspan"><?php echo $key+1?></td>
          <td class="colspan"><?php echo $single_result['title']?></td>
          <td class="colspan"><?php echo $single_result['content']?></td>
          <td class="colspan"><img src="<?php echo $single_result['image']?>" height="70" width="70" alt=""></td>
          <td>
           <button class="btn btn-success btn-sm"><a href="index.php?page=content_update&&id=<?php echo $single_result['id'] ?>" class="text-white"><i class="fas fa-edit"></i></a>
            </button>
            <button class="btn btn-danger btn-sm"><a href="index.php?page=content_delete&&id=<?php echo $single_result['id']?>" class="text-white" onclick="return confirm();"><i class="fas fa-trash-alt"></i></a>
            </button>
          </td>
          </tr>
      <?php    
        }
      ?>
  </tbody>
  
</table>