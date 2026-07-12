<?php include "header.php"; ?>
<?php
    include 'config.php';
    $id=$_REQUEST['id'];
    $query="select * from `package` where id='$id'";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
?>
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
                                        <?php
                                            include 'config.php';
                                            $q="select * from `gym`";
                                            $r=mysqli_query($con,$q);
                                            while($data=mysqli_fetch_array($r)){
                                                if($data['id']==$row['gym_id'])
                                                    echo '<option selected value="'.$data['id'].'">'.$data['gym_name'].'</option>';
                                                else    
                                                    echo '<option value="'.$data['id'].'">'.$data['gym_name'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" value="<?php echo $_REQUEST['id'];?>" name="id" id="id" type="hidden" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    <input class="form-control" value="<?php echo $row['package_name'];?>" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter package name'" placeholder="Enter package name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="pamount" value="<?php echo $row['package_amount'];?>" id="pamount" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Package Amount'" placeholder="Enter Package Amount">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="photo" id="photo" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter '" placeholder="Enter">
                                </div>
                            </div>
                            <div class="offset-sm-2 col-sm-6">
                                <div class="form-group">
                                    <img height="200" width="650" src="assets/upload/<?php echo $row['package_photo']; ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="description" id="description" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Description'" placeholder=" Enter Description"><?php echo $row['description'];?></textarea>
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
        $id = $_REQUEST['id'];
        $gym = $_REQUEST['gym'];
        $name = $_REQUEST['name'];
        $amount =$_REQUEST['pamount'];
        $description = $_REQUEST['description'];
        $photo = $_FILES['photo']['name'];
        $temp_photo = $_FILES['photo']['tmp_name'];
        include "config.php";
        
        if($photo!='')
            $query = "update `package` set `gym_id`='$gym',`package_name`='$name',`package_amount`='$amount',`package_photo`='$photo',`description`='$description' where id ='$id'";
        else    
            $query = "update `package` set `gym_id`='$gym',`package_name`='$name',`package_amount`='$amount',`description`='$description' where id ='$id'";

        $result = mysqli_query($con,$query);

        if ($result > 0) {
            move_uploaded_file($temp_photo, "assets/upload/".$photo);
            echo "<script>window.location.assign('packages_table.php?msg=Data Updated Successfully')</script>";
        } else {
            echo "<script>window.location.assign('packages_table.php?msg= Error!!!!! Try again')</script>";
        }

    }
?>