  <!-- Database connect -->
<?php
    include('config_db.php');

?>
    <?php if (isset($_POST['submit'])) {
        $features_name= $_POST['features_name'];
            if(isset($features_name)){
            $sql="INSERT INTO features_categories(features_name) VALUES('$features_name')";
               if (mysqli_query($conn,$sql)) {
                echo" Added Successfull";
            }else{
                echo "try again";
            }
        }
    }
    ?>

    <form class="splash-container" action="" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1 text-center"> Add Features Categories</h3>
                <p class="text-center"> Enter your features categories.</p>
            </div>
            <div class="card-body">
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="features_name" required="" placeholder="Enter Features Categories" autocomplete="off">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Submit</button>
                </div>
            </div>
         
        </div>
    </form>
