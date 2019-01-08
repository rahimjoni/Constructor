<!-- Database connect -->
<?php
    $databasehost='localhost';
    $databaseuser='root';
    $databasepassword='';
    $databasename='blog';

    $conn=mysqli_connect($databasehost,$databaseuser,$databasepassword,$databasename);
?>

<!-- ===Insert Registation Data=== -->

<?php

//  query data for show
$select_data_top_header="SELECT * FROM total_work";
$query_data=mysqli_query($conn,$select_data_top_header);
$featch_data=mysqli_fetch_assoc($query_data);


//insert data for top header
    if (isset($_POST['submit'])) {
        $project=$_POST['project'];
        $cliant=$_POST['cliant'];
        $member=$_POST['member'];
        $award=$_POST['award'];
        
        if(isset($project) && isset($cliant) && isset($member) && isset($award)){
            
            $sql="INSERT INTO total_work(project,cliant,member,award) VALUES('$project','$cliant','$member','$award')";
               if (mysqli_query($conn,$sql)) {
                $msg="Added Successfull";
            }else{
                echo "try again";
            }
        }
    }

  //update data 
    if (isset($_POST['update'])) {
         $project=$_POST['project'];
        $cliant=$_POST['cliant'];
        $member=$_POST['member'];
        $award=$_POST['award'];
       if(isset($project) && isset($cliant) && isset($member) && isset($award)){
            
        $id=$_POST['id'];
        echo "$id";
        exit;
         if(isset($project) && isset($cliant) && isset($member) && isset($award)){

          $sql="UPDATE `total_work` SET`project`='$project',`cliant`='$cliant',`member`='$member',`award`='$award' WHERE `id`=$id ";
          echo "$sql";
          exit;
            if (mysqli_query($conn,$sql)) {
                $msg="Update Successfull";
            }else{
                echo "try again";
            }
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
                <h3 class="mb-1 text-center">Achievedment</h3>
                <p class="text-center">  Enter total achievedment..</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $featch_data['id'];?>">
                    
                    <input class="form-control form-control-lg" type="text" name="project" required=""  value="<?php echo $featch_data['project'];?>" autocomplete="off">
                </div>
                <div class="form-group">
                   
                    <input class="form-control form-control-lg" type="text" name="cliant" required=""  value="<?php echo $featch_data['cliant'];?>" autocomplete="off">
                </div>
                <div class="form-group">
                    
                    <input class="form-control form-control-lg" type="text" name="member" required=""  value="<?php echo $featch_data['member'];?>" autocomplete="off">
                </div>
                <div class="form-group">
                  
                    <input class="form-control form-control-lg" type="text" name="award" required=""  value="<?php echo $featch_data['award'];?>" autocomplete="off">
                </div>
                
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Update Achievement</button>
                </div>
            </div>

              <div class="form-group pt-3">
                <?php 
                    if(isset($msg)){?>
              <button class="btn btn-block btn-success " type="submit" name="update"><?php echo $msg;?> </button>
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
                <h3 class="mb-1 text-center">Achievedment</h3>
                <p class="text-center"> Enter total achievedment.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="project" required="" placeholder=" Enter total complete project" autocomplete="off">
                </div>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="cliant" required="" placeholder=" Enter total Happy cliant" autocomplete="off">
                </div>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="member" required="" placeholder=" Enter total Happy member" autocomplete="off">
                </div>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="award" required="" placeholder=" Enter total Achivev Award" autocomplete="off">
                </div>
                
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Insert Achievement</button>
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
    

    

    