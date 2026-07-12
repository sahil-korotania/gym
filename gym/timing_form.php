<?php include "header.php"; ?>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Timing</h2>
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
                    <h2 class="contact-title">Timing Form</h2>
                </div>
                <div class="col-lg-12">
                    <form class="form-contact contact_form" action="" method="post">
                        <div class="row">
                            <div class="col-sm-12">
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
                            <div class="col-sm-6 mt-5">
                                <div class="form-group">
                                    <input class="form-control" name="stime" id="stime" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Start Time'" placeholder="Enter Start Time">
                                </div>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <div class="form-group">
                                    <input class="form-control" name="etime" id="etime" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter End Time'" placeholder="Enter End Time">
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
        $stime =$_REQUEST['stime'];
        $etime = $_REQUEST['etime'];
       
        include "config.php";
        
        $query = "insert into `timing`(`gym_id`,`start_time`,`end_time`,`status`)values('$gym','$stime','$etime','Active')";

        $result = mysqli_query($con,$query);

        if ($result > 0) {
            echo "<script>window.location.assign('timing_form.php?msg=Data Saved Successfully')</script>";
        } else {
            echo "<script>window.location.assign('timing_form.php?msg= Error!!!!! Try again')</script>";
        }

    }
?>