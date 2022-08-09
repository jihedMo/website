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
                            <span>mise a jour club</span>
                        </h1>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_POST['update'])) {
                $id = $_GET['id'];
                $Title = $_POST['Title'];
                $description = $_POST['description'];
                $price = $_POST['price'];

                $sql = "UPDATE club SET  Price='$price',Title='$Title',description='$description' WHERE id='$id' ";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([

                    ':Title' => $Title,
                    ':description' => $description,
                    ':Price' => $price,
                    ':id' => $_GET['id']
                ]);
                header("Location: Club.php");
            }


            ?>
            <?php
            if (isset($_POST['edit-user'])) {
                $id = $_POST['id'];
                $url = "update-club.php?id=".$id;
                header("Location: {$url}");
            }

            ?>
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM club WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([':id' => $id]);
                $club = $stmt->fetch(PDO::FETCH_ASSOC);
                $id = $club['id'];
                $Title = $club['Title'];
                $description = $club['description'];
                $price = $club['Price'];
            }
            ?>

            <!--Start Table-->
            <div class="container-fluid mt-n10">
                <div class="card mb-4">
                    <div class="card-header">Edit Club</div>
                    <div class="card-body">
                        <form action="update-club.php?id=<?php echo $_GET['id']; ?>" method="POST"
                              enctype="multipart/form-data">


                            <div class="form-group">
                                <label for="price"> Prix:</label>
                                <input value="<?php echo $price; ?>" name="price" class="form-control"
                                       id="price" type="text" placeholder="price..."/>
                            </div>
                            <div class="form-group">
                                <label for="Title"> Titre:</label>
                                <input value="<?php echo $Title; ?>" name="Title" class="form-control"
                                       id="Title" type="text" placeholder="Title"/>
                            </div>
                            <div class="form-group">
                                <label for="description"> description:</label>
                                <input value="<?php echo $description; ?>" name="description" class="form-control"
                                       id="description" type="text" placeholder="description"/>
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