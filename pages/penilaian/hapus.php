<?php
$id = $_GET['id'];
if ($db->deleteNilai($id) > 0) {
    echo "
    <script>
    window.location='index.php?page=pages/penilaian/index';
    </script>
    ";
} else {
    echo "
    <script>
    window.location='index.php?page=pages/penilaian/index';
    </script>
    ";
}
