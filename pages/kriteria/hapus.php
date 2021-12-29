<?php
$id = $_GET['id'];
if ($db->deleteKategori($id) > 0) {
    echo "
    <script>
    window.location='index.php?page=pages/kategori/index';
    </script>
    ";
} else {
    echo "
    <script>
    window.location='index.php?page=pages/kategori/index';
    </script>
    ";
}
