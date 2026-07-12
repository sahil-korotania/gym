<?php include "header.php"; ?>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>User Login</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php 
                if(isset($_REQUEST['msg'])){
                    echo "<div class='display-4 alert alert-info'>".$_REQUEST['msg']."</div>";
                }
            ?>
                    <h2 class="contact-title">Login</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="" method="post">
                        <div class="row">
                           <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'" placeholder="Enter Password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" name="submit" class="button button-contactForm boxed-btn">Login</button>
                            <h3 class="mt-5 text-light">Create New Account? <a href="register.php">Click Here</a></h3>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>
<?php
if(isset($_POST['submit']))
{
	session_start();
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];

	include "config.php";

	$q="select * from `user` where email='$email' and password='$password'";

	$r = mysqli_query($con,$q);

	if($row=mysqli_fetch_array($r))
	{
		$_SESSION['name']=$row['name'];
	 	$_SESSION['user_email']=$email;
		echo "<script>window.location.assign('index.php')</script>";
	}
	else
	{
		echo "<script>window.location.assign('login.php?msg=Try Again!!!')</script>";
	}
}
?>
<?php include "footer.php"; ?>