<?php
include_once "lib/Database.php";

$db = new Database("localhost", 3306, "root", "", "nomad-force");
?>

<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <strong>Nomad Force</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <?php
                $menu = $db->getMenuItems();
                foreach ($menu as $menuName => $menuUrl) {
                    echo '
                    <li class="nav-item">
                    <a class="nav-link" href="'.$menuUrl.'">'.$menuName.'</a>
                </li>
                    ';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>