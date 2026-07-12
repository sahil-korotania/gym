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
                    <h2 class="contact-title">Gym Table</h2>
                </div>
                <div class="col-lg-12">
                    <table class="table table-bordered text-light" style="font-size:25px;">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Gym Name</th>
                                <th>Contact</th>
                                <th>Whatsapp Contact</th>
                                <th>Address</th>
                                <th>Location</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $s=1;
                                include 'config.php';
                                $query="select * from `gym`";
                                $result=mysqli_query($con,$query);
                                while($row=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <td><?php echo $s; ?></td>
                                <td><?php echo $row['gym_name']; ?></td>
                                <td><?php echo $row['gym_contact']; ?></td>
                                <td><?php echo $row['gym_whatsapp_contact']; ?></td>
                                <td><?php echo $row['gym_address']; ?></td>
                                <td><iframe src="https://maps.google.com/maps?q=<?php echo $row['gym_name'].$row['gym_address']; ?>&output=embed"></iframe></td>
                                <td><img height="200" width="150" src="assets/upload/<?php echo $row['gym_photo']; ?>"></td>
                                <td><a class="text-primary" href="gym_update.php?id=<?php echo $row['id']; ?>">&#9998;</a>
                                <a class="text-danger" href="gym_delete.php?id=<?php echo $row['id']; ?>">&#10006;</a></td>
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