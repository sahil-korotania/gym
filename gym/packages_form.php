<?php include "header.php"; ?>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Packages</h2>
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
        	<?php 
        		if(isset($_REQUEST['msg'])){
        			echo "<div class='display-4 alert alert-info'>".$_REQUEST['msg']."</div>";
        		}
        	?>
    
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Packages Form</h2>
                </div>
                <div class="col-lg-12">
                    <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control w-100" name="gym" id="gym" >
                                        <option disabled selected>Selct Gym</option>
                                        <?php
                                            include 'config.php';
                                            $query="select * from `gym`";
                                            $result=mysqli_query($con,$query);
                                            while($row=mysqli_fetch_array($result)){
                                                echo '<option value="'.$row['id'].'">'.$row['gym_name'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter package name'" placeholder="Enter package name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="pamount" id="pamount" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Package Amount'" placeholder="Enter Package Amount">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="photo" id="photo" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter '" placeholder="Enter">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="description" id="description" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Description'" placeholder=" Enter Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" name="submit" class="button button-contactForm boxed-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>
<?php include "footer.php"; ?>
<?php
    if(isset($_POST['submit']))
    {       
        $gym = $_REQUEST['gym'];
        $name = $_REQUEST['name'];
        $amount =$_REQUEST['pamount'];
        $description = $_REQUEST['description'];
        $photo = $_FILES['photo']['name'];
        $temp_photo = $_FILES['photo']['tmp_name'];
        include "config.php";
        
        $query = "insert into `package`(`gym_id`,`package_name`,`package_amount`,`package_photo`,`description`,`status`)values('$gym','$name','$amount','$photo','$description','Active')";

        $result = mysqli_query($con,$query);

        if ($result > 0) {
            move_uploaded_file($temp_photo, "assets/upload/".$photo);
            echo "<script>window.location.assign('packages_form.php?msg=Data Saved Successfully')</script>";
        } else {
            echo "<script>window.location.assign('packages_form.php?msg= Error!!!!! Try again')</script>";
        }

    }
?>