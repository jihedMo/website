
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
                                <span>Ajouter nouveau Blog</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <!--Start Table-->
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Ajouter nouveau Blog</div>
                        <div class="card-body">

                            <?php
                            if (isset($_POST['create'])) {

                                $id = $_POST['id'];
                                $title = $_POST['title'];
                                $auteur = $_POST['auteur'];
                                $description = $_POST['description'];
                                $content = $_POST['content'];

                                $sql = "INSERT INTO blog (title,auteur,description,content) values (:title,:auteur,:description,:content) ";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute([

                                    ':title' => $title,
                                    ':auteur' => $auteur,
                                    ':description' => $description,
                                    ':content' => $content,


                                ]);


                                header("Location: blog.php");
                            }

                            ?>
                            <form action="add-new-blog.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="title">Titre:</label>
                                    <input name="title" class="form-control" id="Price" type="text" placeholder="Titre" />
                                </div>
                                <div class="form-group">
                                    <label for="auteur">Auteur:</label>
                                    <input name="auteur" class="form-control" id="type" type="text" placeholder="Auteur" />
                                </div>
                                <div class="form-group">
                                    <label for="description">description:</label>
                                    <input name="description" class="form-control" id="description" type="text" placeholder="description" />
                                </div>
                                <div class="form-group">
                                    <label for="content">contenu:</label>
                                    <input name="content" class="form-control" id="text" type="text" placeholder="contenu" />
                                </div>


                                <button name="create" class="btn btn-primary mr-2 my-1" type="submit">Create now!</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--End Table-->
            </main>

            <?php require_once('./includes/footer.php'); ?>