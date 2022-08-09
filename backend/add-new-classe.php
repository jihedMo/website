
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
                                <span>Ajouter nouveau classe</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <!--Start Table-->
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Ajouter nouveau classe</div>
                        <div class="card-body">

                            <?php
                            if (isset($_POST['create'])) {

                                $id = $_POST['id'];
                                $Picture = $_POST['Picture'];
                                $Content = $_POST['Content'];
                                $Title = $_POST['Title'];
                                $description = $_POST['Description'];




                                $sql = "INSERT INTO classes (Picture,Content,Title,Description) values (:Picture,:Content,:Title,:description) ";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([
                                    ':Picture' => $Picture,

                                    ':Content' => $Content,
                                    ':Title' => $Title,
                                    ':description' => $description,


                                ]);


                                header("Location: Classes.php");
                            }

                            ?>
                            <form action="add-new-classe.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="Title"> Titre</label>
                                    <input name="Title" class="form-control" id="Title" type="text" placeholder="titre" />
                                </div>
                                <div class="form-group">
                                    <label for="Content"> Contenu</label>
                                    <input name="Content" class="form-control" id="Content" type="text" placeholder="Contenu" />
                                </div>
                                <div class="form-group">
                                    <label for="Description"> description:</label>
                                    <input name="Description" class="form-control" id="Description" type="text" placeholder="description" />
                                </div>
                                <div class="form-group">
                                    <label for="Picture"> image: (copier le nom du dossier img/classes)</label>
                                    <input name="Picture" class="form-control" id="Picture" type="text" placeholder="image" />
                                </div>



                                <button name="create" class="btn btn-primary mr-2 my-1" type="submit">Create now!</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Table-->
            </main>

            <?php require_once('./includes/footer.php'); ?>