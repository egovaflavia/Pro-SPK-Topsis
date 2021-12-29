<?php
$id = $_GET['id'];
if ($db->deletePengguna($id) > 0) {
    echo "
    <script>
    window.location='index.php?page=pages/pengguna/index';
    </script>
    ";
} else {
    echo "
    <script>
    window.location='index.php?page=pages/pengguna/index';
    </script>
    ";
}
