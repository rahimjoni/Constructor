<!-- Database connect -->
<?php
    include('config_db.php');
?>

<!-- ===Insert Registation Data=== -->

<?php

//query data for update
$select_data_top_header="SELECT * FROM top_header";
$query_data=mysqli_query($conn,$select_data_top_header);
$featch_data=mysqli_fetch_assoc($query_data);


//insert data for top header
    if (isset($_POST['submit'])) {
        $facebook= $_POST['facebook'];
        $twitter= $_POST['twitter'];
        $google= $_POST['google'];
        $wifi= $_POST['wifi'];
        $linkedin= $_POST['linkedin'];
        $youtube= $_POST['youtube'];
        $mobile= $_POST['mobile'];
        $email= $_POST['email'];
        $store_date= $_POST['store_date'];
        

        if(isset($facebook) && isset($twitter) && isset($google) && isset($wifi) && isset($linkedin) && isset($youtube) && isset($mobile) && isset($email)&& isset($store_date)){
            
            $sql="INSERT INTO top_header(facebook,twitter,google,wifi,linkedin,youtube,mobile,email,store_date) VALUES('$facebook','$twitter','$google','$wifi','$linkedin','$youtube','$mobile','$email','$store_date')";
               if (mysqli_query($conn,$sql)) {
                $msg="Top Header Added Successfull";
            }else{
                echo "try again";
            }
        }
    }

  //update data 
    if (isset($_POST['Update'])) {
        $facebook= $_POST['facebook'];
        $twitter= $_POST['twitter'];
        $google= $_POST['google'];
        $wifi= $_POST['wifi'];
        $linkedin= $_POST['linkedin'];
        $youtube= $_POST['youtube'];
        $mobile= $_POST['mobile'];
        $email= $_POST['email'];
        $store_date= $_POST['store_date'];
        $id=$_POST['id'];
        if(isset($facebook) && isset($twitter) && isset($google) && isset($wifi) && isset($linkedin) && isset($youtube) && isset($mobile) && isset($email)&& isset($store_date)){

          $sql="UPDATE `top_header` SET`facebook`='$facebook',`twitter`='$twitter',`google`='$google',`wifi`='$wifi',`linkedin`='$linkedin',`youtube`='$youtube',`mobile`='$mobile',`email`='$email',`store_date`='$store_date'WHERE `id`=$id ";

               if (mysqli_query($conn,$sql)) {
                $msg="Top Header UPDATE  Successfull";
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
                <h3 class="mb-1 text-center">Top Header Iteam</h3>
                <p class="text-center"> Enter your header Item information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $featch_data['id'];?>">
                    <input class="form-control form-control-lg" type="text" name="facebook" required="" placeholder=" Facebook"  value="<?php echo $featch_data['facebook'];?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="twitter" required="" placeholder="Twitter" value="<?php echo $featch_data['twitter'];?>" autocomplete="off">
                </div>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="google" required="" placeholder="Google" value="<?php echo $featch_data['twitter'];?>" autocomplete="off">
                </div>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="wifi" required="" placeholder="Wifi"  value="<?php echo $featch_data['twitter'];?>" autocomplete="off">
                </div>

                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="linkedin" required=""  value="<?php echo $featch_data['twitter'];?>" placeholder="Linkedin" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="youtube" required=""  value="<?php echo $featch_data['twitter'];?>" placeholder="Youtube" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="number" name="mobile" required=""  value="<?php echo $featch_data['mobile'];?>" placeholder="Number" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required=""  value="<?php echo $featch_data['email'];?>" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="date" name="store_date" required="" autocomplete="off"  value="<?php echo $featch_data['store_date'];?>">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="Update">Update Top Header</button>
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
                <h3 class="mb-1 text-center">Top Header Iteam</h3>
                <p class="text-center"> Enter your header Item information.</p>
            </div>
            <div class="card-body">
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
                    <input class="form-control form-control-lg" type="text" name="wifi" required="" placeholder="Wifi" autocomplete="off">
                </div>

                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="linkedin" required="" placeholder="Linkedin" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="youtube" required="" placeholder="Youtube" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="number" name="mobile" required="" placeholder="Number" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="date" name="store_date" required="" autocomplete="off">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Insert Top Header</button>
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
    

    

    