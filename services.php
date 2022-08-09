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
                    <h2>Services</h2>
                    <div class="bt-option">
                        <a href="./index.html">Home</a>
                        <span>Services</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>PUSH YOUR LIMITS FORWARD</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT * FROM services";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            while ($services = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $id = $services['id'];
                $Title = $services['Title'];
                $Content = $services['Content'];
                $Picture = $services['Picture'];

            ?>

                <img src="img/services/<?php echo $Picture; ?>" width="300px" height="299px" alt="">
                <div class="ss-text" style="width:280px; height: 299px;margin-bottom: 7px">
                    <h4><?php echo $Title; ?></h4>
                    <p><?php echo $Content; ?>DT</p>

                </div>

            <?php } ?>
        </div>
        >
    </div>
    </div>
</section> -->
<!-- abonement Section Begin -->
<section class="pricing-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <div class="section-title">
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                        <br>
                        <h2>Nos abonnement</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="test">
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3> Adulte</h3>
                    <?php
                    $sql = "SELECT * FROM adult";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    while ($adult = $stmt->fetch(PDO::FETCH_ASSOC)) {

                        $id = $adult['id'];
                        $type = $adult['type'];
                        $Price = $adult['Price'];
                        $description = $adult['description'];

                    ?>

                        <div class="pi-price">
                            <h2><?php echo $type; ?></h2>
                        </div>
                        <ul>
                            <li><?php echo $Price; ?></li>
                            <li><?php echo $description; ?></li>
                        </ul>
                    <?php } ?>


                </div>
            </div>

            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>Enfant</h3>
                    <?php
                    $sql = "SELECT * FROM kid";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    while ($kid = $stmt->fetch(PDO::FETCH_ASSOC)) {

                        $id = $kid['id'];
                        $Title = $kid['Title'];
                        $Price = $kid['Price'];
                        $description = $kid['description'];

                    ?>
                        <div class="pi-price">
                            <h2><?php echo $Title; ?></h2>
                        </div>
                        <ul>
                            <li><?php echo $Price; ?></li>
                            <li><?php echo $description; ?></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="ps-item">
                    <h3>Club</h3>
                    <?php
                    $sql = "SELECT * FROM club";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    while ($kid = $stmt->fetch(PDO::FETCH_ASSOC)) {

                        $id = $kid['id'];
                        $Title = $kid['Title'];
                        $Price = $kid['Price'];
                        $description = $kid['description'];

                    ?>
                        <div class="pi-price">
                            <h2><?php echo $Title; ?></h2>
                        </div>
                        <ul>
                            <li><?php echo $Price; ?></li>
                            <li><?php echo $description; ?></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Services Section End -->

<!-- Banner Section Begin -->
<section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="bs-text service-banner">
                    <h2>Exercise until the body obeys.</h2>
                    <div class="bt-tips">Where health, beauty and fitness meet.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->


<section class="pricing-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <div class="section-title">
                        <h2>Nos activité extra</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $sql = "SELECT * FROM extra";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            while ($extra = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $id = $extra['id'];
                $Title = $extra['Title'];
                $Content = $extra['Content'];
                $Picture = $extra['Picture'];

            ?>

                <div class="col-lg-4 col-md-6">
                    <div class="class-item">
                        <div class="ci-pic">
                            <img src="./img/classes/<?php echo $Picture; ?>" alt="">
                        </div>
                        <div class="ci-text">
                            <span><?php echo $Title; ?></span>
                            <a href="extra-details.php?id=<?php echo $id; ?>"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>


            <?php }
            ?>
        </div>
    </div>
    </div>
    </div>
</section>
<?php require_once('./footer.php'); ?>