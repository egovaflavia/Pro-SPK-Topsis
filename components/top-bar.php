<nav class="main-header navbar navbar-expand navbar-dark">
    <nav class="navbar navbar-light bg-dark">
    <a class="navbar-brand" href="#">
        <img src="assets/images/sdn.png" width="30" height="30" class="d-inline-block align-top" alt="">
        SPK Topsis
    </a>
    </nav>
    <!-- Left navbar links -->
    <ul style="font-weight: bold" class="navbar-nav">
        <?php
        if ($_SESSION['pengguna']->pengguna_level == 1) : ?>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/pengguna/index" class="nav-link">Pengguna</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/alternative/index" class="nav-link">Alternative</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/kriteria/index" class="nav-link">Kriteria</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/penilaian/index" class="nav-link">Penilaian</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/analisa/index" class="nav-link">Analisa</a>
            </li>
        <?php endif ?>
        <?php
        if ($_SESSION['pengguna']->pengguna_level == 2 || $_SESSION['pengguna']->pengguna_level == 1) : ?>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php?page=pages/laporan/index" class="nav-link">Laporan</a>
            </li>
        <?php endif ?>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="logout.php" class="nav-link">Logout</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
    </form>

</nav>