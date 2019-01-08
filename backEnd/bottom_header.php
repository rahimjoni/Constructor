<?php
    $databasehost='localhost';
    $databaseuser='root';
    $databasepassword='';
    $databasename='blog';

    $conn=mysqli_connect($databasehost,$databaseuser,$databasepassword,$databasename);
?>
<?php if (isset($_POST['submit'])) {
        $menu_name= $_POST['menu_name'];

        if(isset($menu_name)){
            $sql="INSERT INTO menus(menu_name) VALUES('$menu_name')";
               if (mysqli_query($conn,$sql)) {
                $msg="Menus Added Successfull";
            }else{
                echo "try again";
            }
        }
    }
?>
<form class="splash-container" action="" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1 text-center"> Add Menus</h3>
                <p class="text-center"> Enter your  Menus.</p>
            </div>
            <div class="card-body">
               
               
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="menu_name" required="" placeholder="Menu name" autocomplete="off">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Insert Menus</button>
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
