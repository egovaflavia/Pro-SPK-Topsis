<?php
$id = $_GET['id'];
if ($db->deleteAlternative($id) > 0) {
    echo "
    <script>
    window.location='index.php?page=pages/alternative/index';
    </script>
    ";
} else {
    echo "
    <script>
    window.location='index.php?page=pages/alternative/index';
    </script>
    ";
}
