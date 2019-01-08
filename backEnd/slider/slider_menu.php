<?php
    $databasehost='localhost';
    $databaseuser='root';
    $databasepassword='';
    $databasename='blog';
    $conn=mysqli_connect($databasehost,$databaseuser,$databasepassword,$databasename);
?>
           
<?php

    $sql="SELECT * FROM slider";
    $data=mysqli_query($conn,$sql);
    $result=mysqli_fetch_assoc($data);

            /*<!--  ======Insert Query end======= -->*/
    if (isset($_POST['submit'])) {
        $title=$_POST['title'];
        $content=$_POST['content'];

        if (!empty($_FILES['uploaded_file'])) {
            $path="slider/upload/";
            $path=$path .basename($_FILES['uploaded_file']['name']);
            if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {

            $sql="INSERT INTO slider(title,content,image) VALUES('$title','$content','$path')";
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
         $title=$_POST['title'];
        $content=$_POST['content'];
        $id=$_POST['id'];

        if(isset($title) && isset($content)){

         /* $sql="UPDATE `slider` SET`title`='$title',`content`='$content' WHERE `id`=$id ";*/
          
          $sql="UPDATE slider SET title='$title',content='$content' WHERE id='$id'";

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
                <h3 class="mb-1 text-center">Update Slider Item</h3>
                <p class="text-center"> Enter update slider Item.</p>
            </div>
            <div class="card-body">
              <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $result['id'];?>">
                  <input class="form-control form-control-lg" type="text" name="title" required="" placeholder="Enter title" autocomplete="off"  value="<?php echo $result['title'];?>">
                    <br>
                  <textarea rows="6" cols="50" name="content" type="text" class="form-control" placeholder="Enter Content"><?php echo $result['content'];?></textarea> <br>
                 <label for="exampleInputEmail1">Choose Photo</label>
                 <input type="file" class="form-control" name="uploaded_file">
               </div>

                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="update" name="update">Update Slider Item</button>
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
                <h3 class="mb-1 text-center">Slider Item</h3>
                <p class="text-center"> Enter slider Item.</p>
            </div>
            <div class="card-body">
              <div class="form-group">
                  <input class="form-control form-control-lg" type="text" name="title" required="" placeholder="Enter title" autocomplete="off">
                    <br>
                  <textarea rows="6" cols="50" name="content" type="text" class="form-control" placeholder="Enter Content"></textarea> <br>
                 <label for="exampleInputEmail1">Choose Photo</label>
                 <input type="file" class="form-control" name="uploaded_file">
               </div>

                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Add Slider Item</button>
                </div>
            </div>
             
        </div>
    </form>   
          <?php  
        }
    ?>
    <!-- Data insert form -->

   

       

    