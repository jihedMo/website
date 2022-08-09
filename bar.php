<?php ob_start(); ?>
<?php session_start(); ?>
<?php require_once("./includes/db.php");
include './header.php' ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/banner-food.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb-text">
                    <h2>Services</h2>
                    <div class="bt-option">
                        <a href="./index.html">Home</a>
                        <span>Bar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- bar section -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 style="margin: 40px 0px 40px 0px">Nos Boisson</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $sql = "SELECT * FROM Boisson";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            while ($Boisson = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $id = $Boisson['id'];
                $image = $Boisson['image'];
                $title = $Boisson['title'];
                $price = $Boisson['price'];

                ?>

                <img src="img/services/<?php echo $image; ?>" width="300px" height="299px" alt="">
                <div class="ss-text" style="width:280px; height: 299px;margin-bottom: 7px">
                    <h4><?php echo $title; ?></h4>
                    <p><?php echo $price; ?>DT</p>

                </div>

            <?php } ?>


        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2 style="margin: 40px 0px 40px 0px">Nos food delicieu</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $sql = "SELECT * FROM food";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            while ($food = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $id = $food['id'];
                $image = $food['image'];
                $Title = $food['Title'];
                $Price = $food['Price'];

                ?>

                <img src="img/services/<?php echo $image; ?>" width="300px" height="299px" alt="">
                <div class="ss-text" style="width:280px; height: 299px;margin-bottom: 7px">
                    <h4><?php echo $Title; ?></h4>
                    <p><?php echo $Price; ?></p>

                </div>

            <?php } ?>


        </div>

    </div>

</section>
<!-- Services Section End -->

<!-- Footer Section Begin -->
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="fs-about">
                    <div class="fa-logo">
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua endisse ultrices gravida lorem.</p>
                    <div class="fa-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href="./about-us">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="./class-details.php">Classes</a></li>
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copyright-text">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved 2021| This template is made with <i class="fa fa-heart"
                                                                                aria-hidden="true"></i> by Jihed
                        Mohamed</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>