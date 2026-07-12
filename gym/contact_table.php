<?php include "header.php"; ?>
<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Contact</h2>
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
                    <h2 class="contact-title">Contact Table</h2>
                </div>
                <div class="col-lg-12">
                    <table class="table table-bordered text-light" style="font-size:25px;">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $s=1;
                                include 'config.php';
                                $query="select * from `contact`";
                                $result=mysqli_query($con,$query);
                                while($row=mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <td><?php echo $s; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['subject']; ?></td>
                                <td><?php echo $row['message']; ?></td>
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