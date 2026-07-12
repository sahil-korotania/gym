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
    <!--? Team -->
    <section class="team-area fix section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55">
                        <h2>What I Offer</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                include 'config.php';
                $id=$_REQUEST['id'];
                $query="select * from `package` where gym_id='$id'";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_array($result)){
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30">
                        <div class="cat-icon">
                            <img src="assets/upload/<?php echo $row['package_photo'];?>" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="#"><?php echo $row['package_name'] ?></a></h5>
                            <p><?php echo $row['package_amount'];?> /-</p>
                            <p><?php echo $row['description'];?></p>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </section>
    <!-- Services End -->
</main>
<?php include "footer.php"; ?>