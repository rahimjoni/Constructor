<?php
  include('config_db.php');
?>
           
<?php

    $sql="SELECT * FROM services";
    $data=mysqli_query($conn,$sql);
    $result=mysqli_fetch_assoc($data);

            /*<!--  ======Insert Query end======= -->*/
    if (isset($_POST['submit'])) {
        $services_title=$_POST['services_title'];
        $services_description=$_POST['services_description'];

        if (!empty($_FILES['uploaded_file'])) {
            $path="services/upload/";
            $path=$path .basename($_FILES['uploaded_file']['name']);
            if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {

            $sql="INSERT INTO services(services_title,services_description,services_image) VALUES('$services_title','$services_description','$path')";
            if (mysqli_query($conn,$sql)) {
                echo "success";
            }else{
                echo "unsuccessfull";
            }
            }
        }

    }
       /* <!--  ======Insert Query end======= -->*/

        /*====== update query start========*/

    if (isset($_POST['update'])) {
         $services_title=$_POST['services_title'];
        $services_description=$_POST['services_description'];
        $id=$_POST['id'];

        if(isset($services_title) && isset($services_description)){

         /* $sql="UPDATE `slider` SET`title`='$title',`content`='$content' WHERE `id`=$id ";*/
          
          $sql="UPDATE services SET services_title='$services_title',services_description='$services_description' WHERE id='$id'";

               if (mysqli_query($conn,$sql)) {
                echo "Slider UPDATE  Successfull";
            }else{
                echo "try again";
            }
        }
    }
            /*====== update query End========*/
?>

    <?php
        if (isset($result)) {
        ?>
         <!-- Data update form -->
    <form class="splash-container" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1 text-center">Services Section</h3>
                <p class="text-center"> Enter services Item.</p>
            </div>
            <div class="card-body">
              <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $result['id'];?>">
                  <input class="form-control form-control-lg" type="text" name="title" required="" placeholder="Enter title" autocomplete="off"  value="<?php echo $result['services_title'];?>">
                    <br>
                  <textarea rows="6" cols="50" name="content" type="text" class="form-control" placeholder="Enter Services description"><?php echo $result['services_description'];?></textarea> <br>
                 <label for="exampleInputEmail1">Choose Photo</label>
                 <input type="file" class="form-control" name="uploaded_file">
               </div>

                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="update" name="update">Update Services Item</button>
                </div>
            </div>
             
        </div>
    </form>
     <?php
        }else{
            ?>
            
      <form class="splash-container" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1 text-center">Services Section</h3>
                <p class="text-center"> Enter services Item.</p>
            </div>
            <div class="card-body">
              <div class="form-group">
                  <input class="form-control form-control-lg" type="text" name="services_title" required="" placeholder="Enter Services title" autocomplete="off">
                    <br>
                  <textarea rows="6" cols="50" name="services_description" type="text" class="form-control" placeholder="Enter services Description"></textarea> <br>
                 <label for="exampleInputEmail1">Choose Photo</label>
                 <input type="file" class="form-control" name="uploaded_file">
               </div>

                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Add Services</button>
                </div>
            </div>
             
        </div>
    </form>   
          <?php  
        }
    ?>
    <!-- Data insert form -->

   

       

    