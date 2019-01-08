<!-- Database connect -->
<?php
    include('config_db.php');
?>

<!-- ===Insert Registation Data=== -->
<?php
	
	$id=$_GET['id'];

	$sql="SELECT * FROM users WHERE id='$id'";
	$result=mysqli_query($conn,$sql);

	foreach ($result as $key => $single_data) {
		extract($single_data);

	}
	?>

	<?php
		$id=$_GET['id'];

    if (isset($_POST['submit'])) {
        $username= $_POST['username'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $cpassword= $_POST['cpassword'];

        if(isset($username) && isset($email) && isset($password) && isset($cpassword)){
            $sql="UPDATE users SET username='$username',email='$email',password='$password',cpassword='$cpassword' WHERE id='$id'";

            if(mysqli_query($conn, $sql)){
    		echo "Records were updated successfully.";
			} 
			else {
  			  echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
				}
        }
    }
?>
<!--  Update data -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" action="" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Update Registrations Form</h3>
                <p>Please update your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Username" autocomplete="off" value="<?php echo $username;?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off" value="<?php echo $email;?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" required="" placeholder="Password" name="password" value="<?php echo $password;?>">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" placeholder="Confirm" name="cpassword" value="<?php echo $cpassword;?>">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Update My Account</button>
                </div>
               
               <!--  <div class="form-group">
                   <label class="custom-control custom-checkbox">
                       <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                   </label>
               </div>
               <div class="form-group row pt-0">
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                       <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                   </div>
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                       <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                   </div>
               </div> -->
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="#" class="text-secondary">Login Here.</a></p>
            </div>
              <div class="form-group pt-3">
                    <button class="btn btn-block btn-success " type="submit" name="submit"><?php echo $msg?></button>
                </div>
        </div>
    </form>