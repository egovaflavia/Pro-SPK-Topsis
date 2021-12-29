<?php 
include 'model/Db.php';
$db = new Db();
$alt = $db->getOneAlternative($_GET['id']);
$data = [
  'message' => 'success',
  'data' => $alt
];

echo json_encode($data);
?>