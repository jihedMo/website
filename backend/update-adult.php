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
                            <span>mise a jour abonnement Adulte</span>
                        </h1>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $type = $_POST['type'];
                $description = $_POST['description'];
                $price = $_POST['price'];

                $sql = "UPDATE Adult SET  Price='$price',type='$type',description='$description' WHERE id='$id' ";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([

                    ':type' => $type,
                    ':description' => $description,
                    ':Price' => $price,
                    ':id' => $_GET['id']
                ]);
                header("Location: Adult.php");
            }


            ?>
            <?php
            if (isset($_POST['edit-user'])) {
                $id = $_POST['id'];
                $url = "update-adult.php?id=" . $id;
                header("Location: {$url}");
            }

            ?>
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM Adult WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([':id' => $id]);
                $Adult = $stmt->fetch(PDO::FETCH_ASSOC);
                $id = $Adult['id'];
                $type = $Adult['type'];
                $description = $Adult['description'];
                $price = $Adult['Price'];
            }
            ?>

            <!--Start Table-->
            <div class="container-fluid mt-n10">
                <div class="card mb-4">
                    <div class="card-header">Edit Abonnement Adult</div>
                    <div class="card-body">
                        <form action="update-adult.php?id=<?php echo $_GET['id']; ?>" method="POST"
                              enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="id " hidden>Adulte id</label>
                                <input value="<?php echo $id; ?>" name="id" class="form-control" id="id Adult"
                                       type="text" placeholder=" id..." hidden/>
                            </div>
                            <div class="form-group">
                                <label for="adresse">Prix</label>
                                <input value="<?php echo $price; ?>" name="price" class="form-control"
                                       id="restaurant-adresse" type="text" placeholder="Adult price..."/>
                            </div>
                            <div class="form-group">
                                <label for="type">type Abonnement :</label>
                                <input value="<?php echo $type; ?>" name="type" class="form-control"
                                       id="restaurant-type" type="text" placeholder="Adult- type..."/>
                            </div>
                            <div class="form-group">
                                <label for="description">description:</label>
                                <input value="<?php echo $description; ?>" name="description" class="form-control"
                                       id="description" type="text" placeholder="description Adult..."/>
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