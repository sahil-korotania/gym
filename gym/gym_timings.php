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
    <!-- Courses area start -->
    <section class="pricing-area section-padding30 fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55">
                        <h2>Timing</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    include 'config.php';
                    $id=$_REQUEST['id'];
                    $query="select timing.*,gym.gym_name from `timing` inner join gym on timing.gym_id=gym.id where timing.gym_id='$id'";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($result)){
                ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties mb-30">
                        <div class="properties__card">
                            <div class="about-icon">
                                <img src="assets/img/icon/price.svg" alt="">
                            </div>
                            <div class="properties__caption">
                                <span class="month"><?php echo $row['gym_name']; ?> </span>
                                <p class="mb-25"><?php echo $row['start_time']; ?> - <?php echo $row['end_time']; ?></p>     
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </section>
    <!-- Courses area End -->
</main>
<?php include "footer.php"; ?>