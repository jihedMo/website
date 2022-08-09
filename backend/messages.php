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
                                <div class="page-header-icon"><i data-feather="mail"></i></div>
                                <span>Messages</span>
                            </h1>

                        </div>

                        <!--Seerch bar-->
                        <div class="form-row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <div class="form-group mr-0 mr-lg-2">

                                    <input name="search-keyword" id="myInput" onkeyup="myFunction()" class="form-control form-control-solid rounded-pill" type="text" placeholder="Rechercher l'expéditeur..." />
                                </div>
                            </div>

                        </div>



                        <br><br>

                    </div>
                </div>

                <!--Start Table-->
                <div class="container-fluid mt-n10">
                    <div class="card mb-4">
                        <div class="card-header">Messages</div>
                        <div class="card-body">
                            <div class="datatable table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th onclick="sortTable(0)"><i data-feather="list"></i> Nom d'utilisateur</th>
                                            <th onclick="sortTable(1)"><i data-feather="list"></i> E-mail de l'utilisateur</th>
                                            <th onclick="sortTable(2)"><i data-feather="list"></i> Message</th>
                                            <th onclick="sortTable(3)"><i data-feather="list"></i> Date</th>
                                            <th>Effacer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM messages";
                                        $stmt = $pdo->prepare($sql);
                                        $stmt->execute();
                                        while ($ms = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            $ms_id = $ms['ms_id'];
                                            $ms_username = $ms['ms_username'];
                                            $ms_useremail = $ms['ms_usermail'];
                                            $ms_detail = $ms['ms_detail'];
                                            $ms_status = $ms['ms_status'];
                                            $ms_date = $ms['ms_date'];
                                            $ms_state = $ms['ms_state']; ?>
                                            <tr>
                                                
                                                <td>
                                                    <?php echo $ms_username; ?>
                                                </td>
                                                <td>
                                                    <?php echo $ms_useremail; ?>
                                                </td>
                                                <td>
                                                    <p style="width:20em;  overflow-wrap: break-word; word-wrap: break-word; "><?php echo $ms_detail; ?>
                                                </td>
                                                <td><?php echo $ms_date; ?></td>

                                                <td>
                                                    <?php
                                                    if (isset($_POST['delete'])) {
                                                        $id = $_POST['id'];
                                                        $sql = "DELETE FROM messages WHERE ms_id = :id";
                                                        $stmt = $pdo->prepare($sql);
                                                        $stmt->execute([
                                                            ':id' => $id
                                                        ]);
                                                        header("Location: messages.php");
                                                    }
                                                    ?>
                                                    <form action="messages.php" method="POST">
                                                        <input type="hidden" name="id" value="<?php echo $ms_id; ?>">
                                                        <button name="delete" type="submit" class="btn btn-red btn-icon"><i data-feather="trash"></i></button>
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