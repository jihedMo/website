<?php ob_start(); ?>
<?php session_start(); ?>
<?php require_once("./includes/db.php");

include './header.php' ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>About us</h2>
                    <div class="bt-option">
                        <a href="./index.php">Home</a>
                        <span>About</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>
<!-- Breadcrumb Section End -->

<!-- ChoseUs Section Begin -->
<section class="choseus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Why chose us?</span>
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-034-stationary-bike"></span>
                    <h4>Équipement moderne</h4>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-050-no-fast-food"></span>
                    <h4>Restauration</h4>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-002-dumbell"></span>
                    <h4>Proffesponal training plan</h4>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="cs-item">
                    <span class="flaticon-014-heart-beat"></span>
                    <h4>Unique to your needs</h4>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ChoseUs Section End -->

<!-- About US Section Begin -->
<section class="aboutus-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <?php
                $sql = "SELECT * FROM video";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                while ($video = $stmt->fetch(PDO::FETCH_ASSOC)) {

                    $id = $video['id'];
                    $vedio = $video['video'];


                ?>
                    <video width="100%" controls autoplay>
                        <source src="./video/<?php echo $vedio; ?>" type="video/mp4">
                    </video>
                <?php } ?>
            </div>
            <div class="col-lg-6 p-0">
                <div class="about-text">
                    <div class="section-title">
                        <?php
                        $sql = "SELECT * FROM whyus";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        while ($whyus = $stmt->fetch(PDO::FETCH_ASSOC)) {

                            $content = $whyus['Content'];
                            $title = $whyus['Title'];


                        ?>
                            <span>About Us</span>
                            <h2><?php echo $title ?></h2>
                    </div>
                    <div class="at-desc">
                        <p><?php echo $content ?></p>
                    </div>
                <?php } ?>


                </div>
            </div>
        </div>
    </div>

</section>
<!-- About US Section End -->


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


<!-- Banner Section Begin -->
<section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="bs-text">
                    <h2>############################</h2>
                    <div class="bt-tips">Where health, beauty and fitness meet.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad" style="background-color: whitesmoke;">

    <div class="container">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="elfsight-app-266a284d-393e-4785-82da-23755009d297"></div>
    </div>
</section>
<!-- Testimonial Section End -->



<?php require_once('./footer.php'); ?>