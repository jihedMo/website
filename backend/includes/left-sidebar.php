<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <?php
            if (isset($_COOKIE['_uid_'])) {
                $user_id = base64_decode($_COOKIE['_uid_']);
            } else if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
            } else {
                $user_id = -1;
            }
            $sql = "SELECT * FROM users WHERE user_id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':id' => $user_id
            ]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $user_id = $user['user_id'];
            $user_name = $user['user_name'];
            $user_email = $user['user_email'];
            $user_photo = $user['user_photo'];
            $user_role = $user['user_role'];
            ?>

            <a class="nav-link collapsed pt-4 " href="index.php">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                <?php echo ($lang == "fr" ?  "Tableau de bord" : "Dashboard"); ?>
            </a>


            <?php
            if ($user_role == 'admin') {
            ?>
                <a class="nav-link collapsed pt-4 " href="users.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "Utilisateurs" : "users"); ?>
                </a>

                <a class="nav-link collapsed pt-4 " href="whyus.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "a propos nous" : "whyus"); ?>
                </a>
                <a class="nav-link collapsed pt-4 " href="Adult.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "abonnement Adultes" : "Adultes"); ?>
                </a>
                <a class="nav-link collapsed pt-4 " href="Classes.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "Classes" : "Classes"); ?>
                </a>
                <a class="nav-link collapsed pt-4 " href="Club.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "Club" : "Club"); ?>
                </a>
                <a class="nav-link collapsed pt-4 " href="Evenement.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "Evenements" : "Events"); ?>
                </a>
                <a class="nav-link collapsed pt-4 " href="Kid.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "Abonnement enfant" : "Kid"); ?>
                </a>
                <a class="nav-link collapsed pt-4 " href="blog.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "blog" : "blog"); ?>
                </a>
                <a class="nav-link collapsed pt-4 " href="Food.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "Food" : "Food"); ?>
                </a>
                <a class="nav-link collapsed pt-4 " href="boisson.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "boisson" : "boisson"); ?>
                </a>
                <a class="nav-link collapsed pt-4 " href="Team.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "Team" : "team"); ?>
                </a>
                <a class="nav-link collapsed pt-4" href="messages.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "Messages" : "Messages"); ?>
                </a>

            <?php
            } else {
            ?>
                <a class="nav-link collapsed pt-4 " href="Evenement.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "Evenements" : "Events"); ?>
                </a>
                <a class="nav-link collapsed pt-4 " href="blog.php">
                    <div class="nav-link-icon"><i data-feather="menu"></i></div>
                    <?php echo ($lang == "fr" ?  "blog" : "blog"); ?>
                </a>

            <?php
            } ?>
        </div>
    </div>

    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle"><?php echo ($lang == "fr" ?  "Connecté en tant que:" : "Logged in as:"); ?></div>
            <?php
            if (isset($_COOKIE['_uid_'])) {
                $user_id = base64_decode($_COOKIE['_uid_']);
            } else if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];
            } else {
                $user_id = -1;
            }
            $sql = "SELECT * FROM users WHERE user_id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':id' => $user_id
            ]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $user_name = $user['user_name'];
            ?>
            <div class="sidenav-footer-title"><?php echo $user_name; ?></div>
        </div>
    </div>
    <?php
    require_once("./includes/registration.php");
    ?>



</nav>