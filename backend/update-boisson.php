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
                                <span>mise a jour boisson</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($_POST['update'])) {
                    $id = $_GET['id'];
                    $image = $_GET['image'];
                    $title = $_POST['title'];
                    $price = $_POST['price'];
                    $sql = "UPDATE boisson SET  image='$image',price='$price',title='$title' WHERE id='$id' ";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([

                        ':image' => $image,
                        ':title' => $title,
                        ':Price' => $price,
                        ':id' => $_GET['id']
                    ]);
                    header("Location: boisson.php");
                }


                ?>
                <?php
                if (isset($_POST['edit-user'])) {
                    $id = $_POST['id'];
                    $url = "update-boisson.php?id=" . $id;
                    header("Location: {$url}");
                }

                ?>
                <?php
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM boisson WHERE id = :id";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([':id' => $id]);
                    $boisson = $stmt->fetch(PDO::FETCH_ASSOC);
                    $id = $boisson['id'];
                    $image = $boisson['image'];
                    $title = $boisson['title'];
                    $price = $boisson['price'];
                }
                ?>

                <!--Start Table-->
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Edit boisson</div>
                        <div class="card-body">
                            <form action="update-boisson.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="price"> image:</label>
                                    <input value="<?php echo $image; ?>" name="image" class="form-control" id="image" type="text" placeholder="image..." />
                                </div>

                                <div class="form-group">
                                    <label for="price"> Prix:</label>
                                    <input value="<?php echo $price; ?>" name="price" class="form-control" id="price" type="text" placeholder="price..." />
                                </div>

                                <div class="form-group">
                                    <label for="title"> Titre:</label>
                                    <input value="<?php echo $title; ?>" name="Title" class="form-control" id="Title" type="text" placeholder="Title" />
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