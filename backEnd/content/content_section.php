<?php
    $databasehost='localhost';
    $databaseuser='root';
    $databasepassword='';
    $databasename='blog';
    $conn=mysqli_connect($databasehost,$databaseuser,$databasepassword,$databasename);
?>


<?php
  if (isset($_POST['submit'])) {
        $title=$_POST['title'];
        $content=$_POST['content'];

        if (!empty($_FILES['uploaded_file'])) {
            $path="content/UploadContentPic/";
            $path=$path .basename($_FILES['uploaded_file']['name']);
            if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {

            $sql="INSERT INTO content(title,content,image) VALUES('$title','$content','$path')";
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
                <h3 class="mb-1 text-center">Content Item</h3>
                <p class="text-center"> Enter content Item.</p>
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