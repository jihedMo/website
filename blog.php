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
                    <h2>Our Blog</h2>
                    <div class="bt-option">
                        <a href="./index.php">Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog-section spad">

    <?php
    $sql = "SELECT * FROM blog";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    while ($blog = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $id = $blog['id'];
        $auteur = $blog['auteur'];
        $title = $blog['title'];
        $description = $blog['description'];
    ?>
        <div class="container">

            <div class="row">
                <div class="col-lg-8 p-0">


                    <div class="blog-item">
                        <div class="bi-pic">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="bi-text">

                            <h5><a href="blog-details.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></h5>
                            <ul>
                                <li>
                                    <p><?php echo $auteur; ?></p>
                                </li>
                            </ul>
                            <p style=" overflow-wrap: break-word;
  word-wrap: break-word; "><?php echo $description; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>

        </div>
    <?php } ?>

</section>
<!-- Blog Section End -->

<?php require_once('./footer.php'); ?>