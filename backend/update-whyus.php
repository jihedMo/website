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
                            <span>mise a jour why us</span>
                        </h1>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_POST['update'])) {
                $id = $_GET['id'];
                $Title = $_POST['Title'];
                $Content = $_POST['Content'];

                $sql = "UPDATE whyus SET  Title='$Title',Content='$Content' WHERE id='$id' ";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([

                    ':Title' => $Title,
                    ':Content' => $Content,
                    ':id' => $_GET['id']

                ]);
                header("Location: whyus.php");
            }


            ?>
            <?php
            if (isset($_POST['edit'])) {
                $id = $_POST['id'];
                $url = "update-whyus.php?id=" . $id;
                header("Location: {$url}");
            }

            ?>
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM whyus WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([':id' => $id]);
                $whyus = $stmt->fetch(PDO::FETCH_ASSOC);
                $id = $whyus['id'];
                $Title = $whyus['Title'];
                $Content = $whyus['Content'];
            }
            ?>
            <!--Start Table-->
            <div class="container-fluid mt-n10">
                <div class="card mb-4">
                    <div class="card-header">Edit why us</div>
                    <div class="card-body">


                        <form action="update-whyus.php?id=<?php echo $_GET['id']; ?>" method="POST"
                              enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="adress">Title</label>
                                <input value="<?php echo $Title; ?>" name="Title" class="form-control"
                                       id="title" type="text" placeholder="Title..."/>
                            </div>
                            <div class="form-group">
                                <label for="type">Content :</label>
                                <input value="<?php echo $Content; ?>" name="Content" class="form-control"
                                       id="content" type="text" placeholder="Content..."/>
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