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
                                <span>Team</span>
                            </h1>
                            <a href="add-new-team.php" title="Add new team member" class="btn btn-white">
                                <div class="page-header-icon"><i data-feather="plus"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Start Table-->
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Team</div>
                        <div class="card-body">
                            <div class="datatable table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <a><label>Chercher: <input type="text" id="myInput" onkeyup="myFunction()" class="form-control form-control-sm" placeholder="chercher par nom.."></label></a>
                                    <br>
                                    <thead>
                                        <tr>
                                            <th onclick="sortTable(0)"><i data-feather="list"></i> Nom</th>
                                            <th onclick="sortTable(1)"><i data-feather="list"></i> image</th>
                                            <th>??diter</th>
                                            <th>Effacer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM team";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        while ($team = $stmt->fetch(PDO::FETCH_ASSOC)) {

                                            $id = $team['id'];
                                            $image = $team['Picture'];
                                            $name = $team['Name'];
                                        ?>
                                            <tr>

                                                <td>
                                                    <img src="../img/team/<?php echo $image; ?>" width="50" height="50" />
                                                </td>

                                                <td>
                                                    <?php echo $name; ?>
                                                </td>


                                                <td>
                                                    <form action="update-team.php" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                        <button name="edit-user" type="submit" class="btn btn-primary btn-icon"><i data-feather="edit"></i></button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <?php
                                                    if (isset($_POST['delete'])) {
                                                        $id = $_POST['adult-id'];
                                                        $sql = "DELETE FROM team WHERE id = :id";
                                                        $stmt = $pdo->prepare($sql);
                                                        $stmt->execute([':id' => $id]);
                                                        header("Location: Team.php");
                                                    }
                                                    ?>
                                                    <form action="team.php" method="POST">
                                                        <input type="hidden" name="adult-id" value="<?php echo $id; ?>">
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