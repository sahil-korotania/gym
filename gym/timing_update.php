<?php include "header.php"; ?>
<?php
    include 'config.php';
    $id=$_REQUEST['id'];
    $query="select * from `timing` where id='$id'";
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
                            <div class="col-sm-6 mt-5">
                                <div class="form-group">
                                    <input class="form-control" value="<?php echo $_REQUEST['id'];?>" name="id" id="id" type="hidden" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    <input class="form-control" name="stime" value="<?php echo $row['start_time'];?>" id="stime" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Start Time'" placeholder="Enter Start Time">
                                </div>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <div class="form-group">
                                    <input class="form-control" name="etime" id="etime" value="<?php echo $row['end_time'];?>" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter End Time'" placeholder="Enter End Time">
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
        $stime =$_REQUEST['stime'];
        $etime = $_REQUEST['etime'];
       
        include "config.php";
        
        $query = "update `timing` set `gym_id`='$gym',`start_time`='$stime',`end_time`='$etime' where id ='$id'";

        $result = mysqli_query($con,$query);

        if ($result > 0) {
            echo "<script>window.location.assign('timing_table.php?msg=Data Updated Successfully')</script>";
        } else {
            echo "<script>window.location.assign('timing_table.php?msg= Error!!!!! Try again')</script>";
        }

    }
?>