<?php ob_start(); ?>
<?php session_start(); ?>
<?php require_once("./includes/db.php");
include './header.php' ?>

<!-- Blog Details Hero Section Begin -->
<section class="blog-details-hero set-bg" data-setbg="img/blog/details/blog-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-0 m-auto">

                <?php

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM blog WHERE id = :id";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([':id' => $id]);
                    $blog = $stmt->fetch(PDO::FETCH_ASSOC);
                    $id = $blog['id'];
                    $title = $blog['title'];
                    $description = $blog['description'];
                    $auteur = $blog['auteur'];
                }

                ?>
                <div class="bh-text">
                    <h3><?php echo $title; ?></h3>
                    <ul>
                        <li><?php echo $auteur; ?></li>

                    </ul>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- Blog Details Hero Section End -->

<!-- Blog Details Section Begin -->
<section class="blog-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 p-0 m-auto">
                <div class="blog-details-text">
                    <div class="blog-details-title">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM blog WHERE id = :id";
                            $stmt = $pdo->prepare($sql);
                            $stmt->execute([':id' => $id]);
                            $blog = $stmt->fetch(PDO::FETCH_ASSOC);
                            $id = $blog['id'];
                            $title = $blog['title'];
                            $description = $blog['description'];
                            $content = $blog['content'];
                        }
                        ?>
                        <p style="overflow-wrap: break-word; word-wrap: break-word;"><?php echo $content; ?>
                        </p>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
<?php require_once('./footer.php'); ?>