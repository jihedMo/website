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
                                <span>mise a jour Blog</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <?php
                if (isset($_POST['update'])) {
                    $id = $_GET['id'];
                    $title = $_POST['title'];
                    $auteur = $_POST['auteur'];
                    $description = $_POST['description'];
                    $content = $_POST['content'];

                    $sql = "UPDATE blog SET  title='$title',description='$description',content='$content' WHERE id='$id' ";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([

                        ':title' => $title,
                        ':auteur' => $auteur,
                        ':description' => $description,
                        ':content' => $content,
                        ':id' => $_GET['id']
                    ]);
                    header("Location: blog.php");
                }


                ?>
                <?php
                if (isset($_POST['edit-user'])) {
                    $id = $_POST['id'];
                    $url = "update-blog.php?id=" . $id;
                    header("Location: {$url}");
                }

                ?>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM blog WHERE id = :id";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([':id' => $id]);
                    $blog = $stmt->fetch(PDO::FETCH_ASSOC);
                    $id = $blog['id'];
                    $title = $blog['title'];
                    $auteur = $blog['auteur'];
                    $description = $blog['description'];
                    $content = $blog['content'];
                }
                ?>

                <!--Start Table-->
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Edit blog</div>
                        <div class="card-body">
                            <form action="update-blog.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="id " hidden>blog id</label>
                                    <input value="<?php echo $id; ?>" name="id" class="form-control" id="id Blog" type="text" placeholder=" id..." hidden />
                                </div>
                                <div class="form-group">
                                    <label for="adresse">titre</label>
                                    <input value="<?php echo $title; ?>" name="title" class="form-control" id="restaurant-adresse" type="text" placeholder="Titre..." />
                                </div>
                                <div class="form-group">
                                    <label for="auteur">Auteur</label>
                                    <input value="<?php echo $auteur; ?>" name="auteur" class="form-control" id="auteur" type="text" placeholder="auteur..." disabled />
                                </div>
                                <div class="form-group">
                                    <label for="description">description:</label>
                                    <input value="<?php echo $description; ?>" name="description" class="form-control" id="description" type="text" placeholder="description..." />
                                </div>
                                <div class="form-group">
                                    <label for="content">Contenu:</label>
                                    <input value="<?php echo $content; ?>" name="content" class="form-control" id="content" type="text" placeholder="Content..." />
                                </div>


                        </div>
                        <button name="update" class="btn btn-primary mr-2 my-1" type="submit">Update now!</button>
                        </form>
                    </div>
                </div>
        </div>
        <!--End Table-->
        </main>

        <?php require_once('./includes/footer.php'); ?>