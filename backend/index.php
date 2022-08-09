<?php require_once('./includes/header.php'); ?>

<body class="nav-fixed">
    <?php require_once('./includes/top-navbar.php'); ?>


    <!--Side Nav-->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php
            $curr_page = basename(__FILE__);
            require_once("./includes/left-sidebar.php");
            ?>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="page-header-content">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                <span> <?php echo ($lang == "fr" ?  "Tableau de bord || Climb'In" : "Dashboard || Foodhaus"); ?></span>
                            </h1>
                        </div>
                    </div>
                </div>

                <!--Table-->
                <div class="container-fluid mt-n10">




                    <?php
                    if ($user_role == 'admin') {
                    ?>
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p> <?php echo ($lang == "fr" ?  "Utilisateur" : "adult"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM users";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $post_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $post_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="users.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p> <?php echo ($lang == "fr" ?  "abonnement adult" : "adult"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM adult";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $post_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $post_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Adult.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p><?php echo ($lang == "fr" ?  "a propos de nous" : "whyus"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM whyus";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $comment_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $comment_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="whyus.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p><?php echo ($lang == "fr" ?  "classes" : "classes"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM classes";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $comment_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $comment_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Classes.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p><?php echo ($lang == "fr" ?  "club" : "club"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM club ";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $comment_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $comment_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Club.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p><?php echo ($lang == "fr" ?  "evenement" : "event"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM event ";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $comment_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $comment_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Evenement.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p><?php echo ($lang == "fr" ?  "abonnement enfant" : "kid"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM kid";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $post_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $post_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Kid.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p><?php echo ($lang == "fr" ?  "food" : "food"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM food";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $post_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $post_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Food.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p><?php echo ($lang == "fr" ?  "boisson" : "boisson"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM boisson";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $post_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $post_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="boisson.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p><?php echo ($lang == "fr" ?  "Blog" : "Blog"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM blog";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $comment_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $comment_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="blog.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p><?php echo ($lang == "fr" ?  "team" : "team"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM team";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $post_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $post_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="team.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p> <?php echo ($lang == "fr" ?  "Messages" : "adult"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM messages";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $post_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $post_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="messages.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php
                    } else {
                    ?>

                        <div class="row">

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p><?php echo ($lang == "fr" ?  "evenement" : "event"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM event ";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $comment_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $comment_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="Evenement.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <p><?php echo ($lang == "fr" ?  "Blog" : "Blog"); ?></p>
                                        <?php
                                        $sql = "SELECT * FROM blog";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        $comment_count = $stmt->rowCount();
                                        ?>
                                        <p><?php echo $comment_count; ?></p>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="blog.php"><?php echo ($lang == "fr" ?  "Voir les détails" : "View Details"); ?></a>

                                    </div>
                                </div>
                            </div>
                        </div>




                    <?php
                    } ?>


                    <!--End Table-->

            </main>


            <?php require_once('./includes/footer.php'); ?>