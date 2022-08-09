<?php require_once('./includes/header.php'); ?>
<?php require_once('./includes/js.php'); ?>

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
                        <div class="page-header-content d-flex align-items-center justify-content-between text-white">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="calendar"></i></div>
                                <span>Blog</span>
                            </h1>
                            <a href="add-new-blog.php" title="Add new blog" class="btn btn-white">
                                <div class="page-header-icon"><i data-feather="plus"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Start Table-->
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Blog</div>
                        <div class="card-body">
                            <div class="datatable table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <a><label>Chercher: <input type="text" id="myInput" onkeyup="myFunction()" class="form-control form-control-sm" placeholder="chercher par titre.."></label></a>
                                    <br>

                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)"><i data-feather="list"></i> Titre</th>
                                            <th onclick="sortTable(1)"><i data-feather="list"></i> Auteur</th>
                                            <th onclick="sortTable(2)"><i data-feather="list"></i> Description</th>
                                            <th onclick="sortTable(3)"><i data-feather="list"></i> Contenu</th>
                                            <th>Éditer</th>
                                            <th>Effacer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM blog";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        while ($blog = $stmt->fetch(PDO::FETCH_ASSOC)) {

                                            $id = $blog['id'];
                                            $title = $blog['title'];
                                            $auteur = $blog['auteur'];
                                            $description = $blog['description'];
                                            $content = $blog['content'];


                                        ?>
                                            <tr>

                                                <td>
                                                    <?php echo $title; ?>
                                                </td>
                                                <td>
                                                    <?php echo $auteur; ?>
                                                </td>

                                                <td>
                                                    <p style="width:20em;  overflow-wrap: break-word; word-wrap: break-word; "> <?php echo $description; ?></p>
                                                </td>
                                                <td>
                                                    <p style="width:20em;  overflow-wrap: break-word; word-wrap: break-word;"> <?php echo $content; ?></p>

                                                </td>


                                                <td>
                                                    <form action="update-blog.php" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                        <button name="edit-user" type="submit" class="btn btn-primary btn-icon"><i data-feather="edit"></i></button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <?php
                                                    if (isset($_POST['delete'])) {
                                                        $id = $_POST['blog-id'];
                                                        $sql = "DELETE FROM blog WHERE id = :id";
                                                        $stmt = $pdo->prepare($sql);
                                                        $stmt->execute([':id' => $id]);
                                                        header("Location: blog.php");
                                                    }
                                                    ?>
                                                    <form action="blog.php" method="POST">
                                                        <input type="hidden" name="blog-id" value="<?php echo $id; ?>">
                                                        <button name="delete" type="submit" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                    </form>
                                                </td>

                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Table-->
            </main>

            <?php require_once('./includes/footer.php'); ?>