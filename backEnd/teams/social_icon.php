<!-- Database connect -->
<?php
    include('config_db.php');
?>

<!-- ===Insert Registation Data=== -->

<?php

//query data for update
$select_data_top_header="SELECT * FROM team_social";
$query_data=mysqli_query($conn,$select_data_top_header);
$featch_data=mysqli_fetch_assoc($query_data);


//insert data for top header
    if (isset($_POST['submit'])) {
        $mobile= $_POST['mobile'];
        $facebook= $_POST['facebook'];
        $twitter= $_POST['twitter'];
        $google= $_POST['google'];
        $instagram= $_POST['instagram'];
        $description=$_POST['description'];
        if(isset($mobile) && isset($facebook) && isset($twitter) && isset($google) && isset($instagram) && isset($description)){
            $sql="INSERT INTO team_social(mobile,facebook,twitter,google,instagram,description) VALUES('$mobile','$facebook','$twitter','$google','$instagram',$description)";
            if (mysqli_query($conn,$sql)) {
                $msg="Top Header Added Successfull";
            }else{
                echo "try again";
            }
        }
    }

  //update data 
    if (isset($_POST['Update'])) {
        $mobile= $_POST['mobile'];
        $facebook= $_POST['facebook'];
        $twitter= $_POST['twitter'];
        $google= $_POST['google'];
        $instagram= $_POST['instagram'];
        $description=$_POST['description'];
        $id=$_POST['id'];
        if(isset($mobile) && isset($facebook) && isset($twitter) && isset($google) && isset($instagram) && isset($description)){

          $sql="UPDATE `team_social` SET`mobile`='$mobile',`facebook`='$facebook',`twitter`='$twitter',`google`='$google',`instagram`='$instagram',`description`='$description' WHERE `id`=$id ";

               if (mysqli_query($conn,$sql)) {
                $msg=" Successfull";
            }else{
                echo "try again";
            }
        }
    }

?>

<!-- Header Item Update form  -->
    <!-- ============================================================== -->
    <?php if(isset($featch_data)){
    ?>
<form class="splash-container" action="" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1 text-center">Team Member Network</h3>
                <p class="text-center"> Enter team member information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $featch_data['id'];?>">
                    <input class="form-control form-control-lg" type="number" name="mobile" required=""  value="<?php echo $featch_data['mobile'];?>" placeholder="Number" autocomplete="off">
                </div>

                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="facebook" required="" placeholder=" Facebook"  value="<?php echo $featch_data['facebook'];?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="twitter" required="" placeholder="Twitter" value="<?php echo $featch_data['twitter'];?>" autocomplete="off">
                </div>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="google" required="" placeholder="Google" value="<?php echo $featch_data['twitter'];?>" autocomplete="off">
                </div>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="instagram" required="" placeholder="Wifi"  value="<?php echo $featch_data['instagram'];?>" autocomplete="off">
                </div>
                <textarea rows="4" cols="50" name="description" type="text" class="form-control" placeholder="Enter Content"><?php echo $featch_data['description'];?></textarea> 
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="Update">Update Member Connection</button>
                </div>
            </div>

              <div class="form-group pt-3">
                <?php 
                    if(isset($msg)){?>
              <button class="btn btn-block btn-success " type="submit" name="submit"><?php echo $msg;?> </button>
                <?php
                    }
                ?>
              </div>
        </div>
  </form>
    <?php 
      }else{
    ?>
<!-- Header Item Add form  -->
    <!-- ============================================================== -->
    <form class="splash-container" action="" method="post">
        <div class="card">
            <div class="card-header">
               <h3 class="mb-1 text-center">Team Member Network</h3>
                <p class="text-center"> Enter team member information.</p
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="number" name="mobile" required="" placeholder="Number" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="facebook" required="" placeholder=" Facebook" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="twitter" required="" placeholder="Twitter" autocomplete="off">
                </div>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="google" required="" placeholder="Google" autocomplete="off">
                </div>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="instagram" required="" placeholder="Instagram" autocomplete="off">
                </div>
                <textarea rows="4" cols="50" name="description" type="text" class="form-control" placeholder="Enter Content"></textarea> 
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Add Data</button>
                </div>
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
    </form>
    <?php 
      }
    ?>
    

    

    