<?php
 include('config_db.php');
?>


<?php
  if (isset($_POST['submit'])) {
        $categories_title=$_POST['categories_title'];
        $features_name=$_POST['features_name'];
      
        if (!empty($_FILES['uploaded_file'])) {
            $path="features/upload/";
            $path=$path .basename($_FILES['uploaded_file']['name']);
            if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {

            $sql="INSERT INTO features_content(categories_title,features_id,categories_image) VALUES('$categories_title','$features_name','$path')";
            if (mysqli_query($conn,$sql)) {
                $msg="Content Insert Successfull";
            }else{
                echo "unsuccessfull";
            }
            }
        }
      }

    //query for feature list 
      $sql="SELECT * FROM features_categories";
      $select_query=mysqli_query($conn,$sql);
      $featch_data=mysqli_fetch_all($select_query,MYSQLI_ASSOC);

?>
        <form class="splash-container" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1 text-center">Features Content</h3>
                <p class="text-center"> Enter Features Content</p>
            </div>
            <div class="card-body">
              <div class="form-group">
               <input class="form-control form-control-lg" type="text" name="categories_title" required="" placeholder="Enter title" autocomplete="off"><br>
               
                      
                <label for="exampleInputEmail1">Choose Photo</label>
                <input type="file" class="form-control" name="uploaded_file">         
              </div>
              <div class="form-group pt-2">
                  <select class="form-control" name="features_name">
                    <option> -- Select Feature -- </option>
                    <?php 
                      foreach ($featch_data as  $single_feature) {
                    ?>
                      <option value="<?php echo $single_feature['features_id'];?>"><?php echo $single_feature['features_name'];?></option>
                    <?php
                      } 
                    ?>
                    option
                  </select>
              </div>
              <div class="form-group pt-2">
                  <button class="btn btn-block btn-primary" type="submit" name="submit">Add Features</button>
              </div>
                 <div class="form-group pt-3">
                      <?php 
                    if(isset($msg)){
                    ?>
                    <button class="btn btn-block btn-success " type="submit" name="submit"><?php echo $msg;?> </button>
                    <?php
                      }
                    ?>
                </div>
            </div>
             
        </div>
    </form>   