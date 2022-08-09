<?php ob_start(); ?>
<?php session_start(); ?>
<?php require_once("./includes/db.php");
include './header.php' ?>


<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hs-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="img/hero/img1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="hi-text">
                            <span>Shape your body</span>
                            <h1>Be <strong>strong</strong> traning hard</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->


<!-- Banner Section Begin -->
<section style="background-color: #0f151e">
    <br />
    <br />
    <br />

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="bs-text">
                    <video width="1000px" height="350px" controls autoplay>
                        <source src="./video/adults-updated.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->
<div>

</div>


</section>
<!-- Classes Section Begin -->
<section class="classes-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Nos offres</span>
                    <h2>Nos classes</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT * FROM classes";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            while ($classes = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $id = $classes['id'];
                $Title = $classes['Title'];
                $Description = $classes['Description'];
                $Content = $classes['Content'];
                $Picture = $classes['Picture'];

            ?>

                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="./img/classes/<?php echo $Picture; ?>" alt="">
                        </div>
                        <div class="ci-text">
                            <span><?php echo $Title; ?></span>
                            <h5><?php echo $Description; ?></h5>
                            <a href="details.php?id=<?php echo $id; ?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>


            <?php }
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Nos evenement</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT * FROM event";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            while ($event = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $id = $event['id'];
                $Title = $event['Title'];
                $Description = $event['Description'];
                $Content = $event['Content'];
                $Picture = $event['Picture'];

            ?>

                <div class="col-lg-6 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="./img/event/<?php echo $Picture; ?>" alt="">
                        </div>
                        <div class="ci-text">
                            <span><?php echo $Title; ?></span>
                            <h4><?php echo $Description; ?></h4>
                            <a href="event-details.php?id=<?php echo $id; ?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>

    </div>
</section>
<!-- Team Section Begin -->
<section class="team-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="team-title">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>TRAIN WITH EXPERTS</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="ts-slider owl-carousel">
                <?php
                $sql = "SELECT * FROM team";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                while ($team = $stmt->fetch(PDO::FETCH_ASSOC)) {

                    $id = $team['id'];
                    $Picture = $team['Picture'];
                    $Name = $team['Name'];

                ?>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="img/team/<?php echo $Picture; ?>">
                            <div class="ts_text">
                                <h4><?php echo $Name; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<?php require_once('./footer.php'); ?>