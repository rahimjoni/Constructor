<?php
    $databasehost='localhost';
    $databaseuser='root';
    $databasepassword='';
    $databasename='blog';

    $conn=mysqli_connect($databasehost,$databaseuser,$databasepassword,$databasename);
?>
<?php
    
    $id=$_GET['id'];
    $sql="SELECT * FROM menus WHERE id='$id'";
    $result=mysqli_query($conn,$sql);

    foreach ($result as $key => $single_data) {
        extract($single_data);
    }
    ?>
<?php 
        $id=$_GET['id'];
        if (isset($_POST['submit'])) {
        $menu_name= $_POST['menu_name'];

        if(isset($menu_name)){
             $sql="UPDATE menus SET menu_name='$menu_name' WHERE id='$id'";
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
                <h3 class="mb-1 text-center">Update Menus</h3>
                <p class="text-center"> Enter update Menus.</p>
            </div>
            <div class="card-body">
               
               
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="menu_name" required="" placeholder="Menu name" autocomplete="off" value="<?php echo $single_data['menu_name']?>">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Update Menus</button>
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
