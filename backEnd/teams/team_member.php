<?php
    include('config_db.php');
?>


<?php
  if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $designation=$_POST['designation'];

        if (!empty($_FILES['uploaded_file'])) {
            $path="content/UploadContentPic/";
            $path=$path .basename($_FILES['uploaded_file']['name']);
            if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {

            $sql="INSERT INTO team_member(name,designation,image) VALUES('$name','$designation','$path')";
            if (mysqli_query($conn,$sql)) {
                $msg="Content Insert Successfull";
            }else{
                echo "unsuccessfull";
            }
            }
        }
      }

?>
<form class="splash-container" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1 text-center">TEAM MEMBERS</h3>
                <p class="text-center"> Enter team member Details.</p>
            </div>
            <div class="card-body">
              <div class="form-group">
                  <input class="form-control form-control-lg" type="text" name="name" required="" placeholder="Enter name" autocomplete="off">
                    <br>
                  <input class="form-control form-control-lg" type="text" name="designation" required="" placeholder="Enter designation" autocomplete="off">
                  <br>
                 <label for="exampleInputEmail1">Choose Photo</label>
                 <input type="file" class="form-control" name="uploaded_file">
               </div>

                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Add Content Item</button>
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