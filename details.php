<?php ob_start(); ?>
<?php session_start(); ?>
<?php require_once("./includes/db.php");
include './header.php' ?>

    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>Classes detail</h2>
                        <div class="bt-option">
                            <a href="./index.html">Home</a>
                            <span>detail</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Class Details Section Begin -->
    <section class="class-details-section spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="class-details-text">
                                <?php
                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $sql = "SELECT * FROM classes WHERE id = :id";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute([':id' => $id]);
                                    $classes = $stmt->fetch(PDO::FETCH_ASSOC);
                                    $id = $classes['id'];
                                    $Picture = $classes['Picture'];
                                    $Title = $classes['Title'];
                                    $Description = $classes['Description'];
                                    $Content = $classes['Content'];

                                }
                                ?>
                                    <div class="cd-pic">
                                        <img src="./img/classes/<?php echo $Picture; ?>"" alt="">
                                    </div>
                                    <div class="cd-text">
                                        <div class="cd-single-item">
                                            <h3><?php echo $Title; ?></h3>
                                            <p><?php echo $Content; ?></p>
                                            <p><?php echo $Description; ?></p>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- Class Details Section End -->

    <?php require_once('./footer.php'); ?>