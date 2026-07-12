<?php include "header.php"; ?>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Gym</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Gallery Area Start -->
    <div class="gallery-area">
        <div class="container-fluid ">
            <div class="row">
            <?php
            	include 'config.php';
            	$query="select * from `gym`";
            	$result=mysqli_query($con,$query);
            	while($row=mysqli_fetch_array($result)){
            ?>
                <a href="gym_timings.php?id=<?php echo $row['id']; ?>">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/upload/<?php echo $row['gym_photo']?>);"></div>
                        <div class="overlay">
                            <div class="mt-5">
                                <h1 class="text-light display-4"><?php echo $row['gym_name']; ?> </h1><hr>
                                <a href="gym_packages.php?id=<?php echo $row['id'] ?>" class="h3 btn btn-info text-light">Package</a><br>
                                <a href="gym_timings.php?id=<?php echo $row['id'] ?>" class="h3 mt-1 btn btn-info text-light">Timing</a>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            <?php }?>
                <!---div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="box snake mb-30">
                        <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                        <div class="overlay">
                            <div class="overlay-content">
                                <h3>Muscle gaining </h3>
                                <a href="gallery.html"></a>
                            </div>
                        </div>
                    </div>
                </div--->
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->
</main>
<?php include "footer.php"; ?>