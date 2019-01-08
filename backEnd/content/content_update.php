<?php
    $databasehost='localhost';
    $databaseuser='root';
    $databasepassword='';
    $databasename='blog';
    $conn=mysqli_connect($databasehost,$databaseuser,$databasepassword,$databasename);
?>
<?php
    
    $id=$_GET['id'];
    $sql="SELECT * FROM content WHERE id='$id'";
    $result=mysqli_query($conn,$sql);

    foreach ($result as $key => $single_data) {
        extract($single_data);
    }
    ?>
<?php
   if (isset($_POST['update'])) {
         $title=$_POST['title'];
        $content=$_POST['content'];
        $image=$_POST['image'];
        $id=$_POST['id'];

        if(isset($title) && isset($content)){

         /* $sql="UPDATE `slider` SET`title`='$title',`content`='$content' WHERE `id`=$id ";*/
          
          $sql="UPDATE content SET title='$title',content='$content',image='$image' WHERE id='$id'";

               if (mysqli_query($conn,$sql)) {
                $msg="Content UPDATE  Successfull";
            }else{
                echo "try again";
            }
        }
    }
      
?>

<form class="splash-container" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1 text-center">Update Content Item</h3>
                <p class="text-center"> Enter update content Item.</p>
            </div>
            <div class="card-body">
              <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $single_data['id'];?>">
                  <input class="form-control form-control-lg" type="text" name="title" required="" placeholder="Enter title" autocomplete="off"  value="<?php echo $single_data['title'];?>">
                    <br>
                  <textarea rows="6" cols="50" name="content" type="text" class="form-control" placeholder="Enter Content"><?php echo $single_data['content'];?></textarea> <br>
                 <label for="exampleInputEmail1">Choose Photo</label>
                 <input type="file" class="form-control" name="uploaded_file">
               </div>

                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="update" name="update">Update content Item</button>
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