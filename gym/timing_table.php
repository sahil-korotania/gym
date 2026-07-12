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
                    <h2 class="contact-title">Timing Table</h2>
                </div>
                <div class="col-lg-12">
                    <table class="table table-bordered text-light" style="font-size:25px;">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Gym</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $s=1;
                                include 'config.php';
                                $query="select timing.*,gym.gym_name from timing
                                inner join gym
                                on timing.gym_id=gym.id";
                                $result=mysqli_query($con,$query);
                                while($row=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <td><?php echo $s; ?></td>
                                <td><?php echo $row['gym_name']; ?></td>
                                <td><?php echo $row['start_time']; ?></td>
                                <td><?php echo $row['end_time']; ?></td>
                                <td><a class="text-primary" href="timing_update.php?id=<?php echo $row['id']; ?>">&#10003;</a>
                                <a class="text-danger" href="timing_delete.php?id=<?php echo $row['id']; ?>">&#10006;</a></td>
                            </tr>
                            <?php $s++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>
<?php include "footer.php"; ?>