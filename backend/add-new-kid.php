
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
                                <div class="page-header-icon"><i data-feather="edit-3"></i></div>
                                <span>Ajouter abonnement enfant</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <!--Start Table-->
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Ajouter abonnement enfant</div>
                        <div class="card-body">

                            <?php
                            if (isset($_POST['create'])) {

                                $id = $_POST['id'];
                                $Price = $_POST['Price'];
                                $Title = $_POST['Title'];
                                $description = $_POST['description'];




                                $sql = "INSERT INTO kid (Price,Title,description) values (:Price,:Title,:description) ";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([

                                    ':Price' => $Price,
                                    ':Title' => $Title,
                                    ':description' => $description,


                                ]);


                                header("Location: kid.php");
                            }

                            ?>
                            <form action="add-new-kid.php" method="POST" enctype="multipart/form-data">


                                <div class="form-group">
                                    <label for="Title">Type abonnement</label>
                                    <input name="Title" class="form-control" id="Title" type="text" placeholder="titre" />
                                </div>
                                <div class="form-group">
                                    <label for="description">description:</label>
                                    <input name="description" class="form-control" id="description" type="text" placeholder="description" />
                                </div>
                                <div class="form-group">
                                    <label for="Price">Prix:</label>
                                    <input name="Price" class="form-control" id="Price" type="text" placeholder="prix" />
                                </div>



                                <button name="create" class="btn btn-primary mr-2 my-1" type="submit">Create now!</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Table-->
            </main>

            <?php require_once('./includes/footer.php'); ?>