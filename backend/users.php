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
                                <div class="page-header-icon"><i data-feather="users"></i></div>
                                <span>Utilisateurs</span>
                            </h1>
                            <a href="add-new-user.php" title="Add new user" class="btn btn-white">
                                <div class="page-header-icon"><i data-feather="plus"></i></div>
                            </a>
                        </div>

                        <!--Seerch bar-->
                        <div class="form-row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <div class="form-group mr-0 mr-lg-2">

                                    <input name="search-keyword" id="myInput" onkeyup="myFunction()" class="form-control form-control-solid rounded-pill" type="text" placeholder="Rechercher un utilisateur..." />
                                </div>
                            </div>

                        </div>
                        <br><br>

                    </div>
                </div>
                <!--Start Table-->
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Utilisateurs</div>
                        <div class="card-body">
                            <div class="datatable table-responsive">



                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
            
                                            <th onclick="sortTable(0)"><i data-feather="list"></i> Nom d'utilisateur</th>
                                            <th onclick="sortTable(1)"><i data-feather="list"></i> E-mail de l'utilisateur</th>
                                            <th onclick="sortTable(2)"><i data-feather="list"></i> Photo</th>
                                            <th onclick="sortTable(3)"><i data-feather="list"></i> Enregistré le</th>
                                            <th onclick="sortTable(4)"><i data-feather="list"></i> Role</th>
                                            <th>Éditer</th>
                                            <th>Effacer</th>
                                            <th onclick="sortTable(7)"><i data-feather="list"></i> status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM users";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        while ($users = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $user_id = $users['user_id'];
                                            $user_name = $users['user_name'];
                                            $user_email = $users['user_email'];
                                            $user_photo = $users['user_photo'];
                                            $registered_on = $users['registered_on'];
                                            $user_role = $users['user_role'];
                                            $user_status = $users['user_status'];
                                        ?>
                                            <tr>
   
                                                <td>
                                                    <?php echo $user_name; ?>
                                                </td>
                                                <td>
                                                    <?php echo $user_email; ?>
                                                </td>
                                                <td>
                                                    <img src="../img/users/<?php echo $user_photo; ?>" width="50" height="50" />
                                                </td>
                                                <td><?php echo $registered_on; ?></td>
                                                <td>
                                                    <div class="badge badge-<?php echo $user_role == "admin" ? "primary" : "warning"; ?>">
                                                        <?php echo $user_role; ?>
                                                    </div>
                                                </td>
                                                <td>
                                                    <?php
                                                    if (isset($_COOKIE['_uid_'])) {
                                                        $u_id = base64_decode($_COOKIE['_uid_']);
                                                    } else if (isset($_SESSION['user_id'])) {
                                                        $u_id = $_SESSION['user_id'];
                                                    } else {
                                                        $u_id = -1;
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($user_id == $u_id) { ?>
                                                        <button title="You can't edit yourself!" class="btn btn-info btn-icon"><i data-feather="edit"></i></button>
                                                    <?php } else { ?>
                                                        <form action="update-user.php" method="POST">
                                                            <input type="hidden" name="user-id" value="<?php echo $user_id; ?>">
                                                            <button name="edit-user" class="btn btn-info btn-icon"><i data-feather="edit"></i></button>
                                                        </form>
                                                    <?php }
                                                    ?>

                                                </td>
                                                <td>

                                                    <?php
                                                    if (isset($_POST['user'])) {
                                                        $u_id = $_POST['user-id'];
                                                        $sql = "DELETE FROM users WHERE user_id = :id";
                                                        $stmt = $pdo->prepare($sql);
                                                        $stmt->execute([':id' => $u_id]);
                                                        header("Location: users.php");
                                                    }
                                                    ?>
                                                    <?php
                                                    if (isset($_COOKIE['_uid_'])) {
                                                        $u_id = base64_decode($_COOKIE['_uid_']);
                                                    } else if (isset($_SESSION['user_id'])) {
                                                        $u_id = $_SESSION['user_id'];
                                                    } else {
                                                        $u_id = -1;
                                                    }
                                                    ?>

                                                    <?php
                                                    if ($user_id == $u_id) { ?>
                                                        <button title="You can't delete yourself!" class="btn btn-red btn-icon"><i data-feather="trash-2"></i></button>
                                                    <?php } else { ?>
                                                        <form action="users.php" method="POST">
                                                            <input type="hidden" name="user-id" value="<?php echo $user_id; ?>">
                                                            <button name="user" type="submit" class="btn btn-danger btn-icon"><i data-feather="trash-2"></i></button>
                                                        </form>
                                                    <?php }
                                                    ?>

                                                </td>
                                                <td>


                                                    <?php
                                                    if (isset($_POST['access'])) {

                                                        $u_id = $_POST['user-id'];
                                                        $status = !$_POST['user-status'];
                                                        $sql = "UPDATE users SET user_status = :status WHERE user_id = :id";
                                                        $stmt = $pdo->prepare($sql);
                                                        $stmt->execute([':id' => $u_id, ':status' => $status]);
                                                        header("Location: users.php");
                                                    }
                                                    ?>
                                                    <form action="users.php" method="POST">
                                                        <input type="hidden" name="user-id" value="<?php echo $user_id; ?>">
                                                        <input type="hidden" name="user-status" value="<?php echo $user_status; ?>">

                                                        <button type="submit" name="access" class="btn btn-<?php echo ($user_status == "0" ?  "success" : "red"); ?>">
                                                            <?php echo ($user_status == "0" ?  "active" : "Banni"); ?>
                                                        </button>
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