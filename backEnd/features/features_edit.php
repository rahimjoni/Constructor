<?php
    $databasehost='localhost';
    $databaseuser='root';
    $databasepassword='';
    $databasename='blog';

    $conn=mysqli_connect($databasehost,$databaseuser,$databasepassword,$databasename);
?>
<?php 
        $id=$_GET['id'];
        if (isset($_POST['submit'])) {
        $features_name= $_POST['features_name'];

        if(isset($features_name)){
             $sql="UPDATE features_categories SET features_name='$features_name' WHERE id='$id'";
               if (mysqli_query($conn,$sql)) {
                $msg="Update Successfull";
            }else{
                echo "try again";
            }
        }
    }
?>
<?php
    

?>
<form class="splash-container" action="" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1 text-center">Update Features</h3>
                <p class="text-center"> Enter update Features.</p>
            </div>
            <div class="card-body">
               
               
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="features_name" required="" placeholder="ABOUT ALL" autocomplete="off">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Update Menus</button>
                </div>
            </div>
            
        </div>
    </form>
